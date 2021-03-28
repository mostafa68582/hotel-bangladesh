@extends('backend.master')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6"><h4>Add Picture</h4></div>
                <div class="col-6 text-right"> <a href="{{ route ('room-images.create') }}" class="btn btn-primary">All Picture</a></div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body p-0">
                    <form method="post" enctype="multipart/form-data" id="addPicture">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="room_type_id">Choose Room Type</label>
                                <select id="room_type_id" class="form-control room_type_name" name="room_type_id" placeholder="Choose Room type">
                                    <option value="choose">Choose...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="caption">Caption</label>
                                <input type="text" class="form-control" id="caption" placeholder="Caption" name="caption">
                            </div>
                            <div class="form-group">
                                <label for="image">Picture</label>
                                <input type="file" multiple class="form-control" id="image" placeholder="User Name" name="image[]">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option selected>Choose...</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm" id="update-facilities">Add Imge</button>
                        </div>
                    </form>
                    <!-- Paginate -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Edit Modal -->
@endsection

@push('style')
<style>

</style>
@endpush

@push('scripts')
    <script>
    let room_type = []
    let get_Room_type_url = '{{ url("/fetch/room-type") }}'
    function fetchRoomType() {
        $.ajax({
            url: get_Room_type_url,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
                if (res.status) {
                    room_type = res.room_type
                    createSelectOption(room_type)
                } else {
                    toastr.error(res.message)
                }
            },
            error: (e) => {
                console.log(e)
            }
        });
    }
    function createSelectOption(data) {
        let seleectOption = $('.room_type_name');
        for (let i = 0; i < data.length; i++) {
            let option = `
                    <option value="${data[i].id}">${data[i].name}</option>
                `
            seleectOption.append(option)
        }
    }
   fetchRoomType()
    function validateImage(image){
        let allowed_extensions = ["jpg","png","jpeg"]
       for (let i = 0; i <= image.files.length - 1; i++) {
            let file_extension = image.files.item(i).name.split('.')[1].toLowerCase()
            let validateExtention = allowed_extensions.includes(file_extension)
            if(!validateExtention){
                return false
            }
        }
        return true
    }
     let url = '{{ url("/room-images") }}'
        $("#addPicture").on('submit', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            let room_type_id = $("#room_type_id").val()
            let caption = $("#caption").val()
            let status = $("#status").val()
            let image = document.getElementById("image")
            if(room_type_id == 'choose') return toastr.error('Room type  is required')
            if(caption == '') return toastr.error('Caption  is required')
            if(image.files.length <= 0) return toastr.error('No image selected')
            if(image.files.length > 2) return toastr.error('Can\'t Upload more than 2 files')
            let validationImag = validateImage(image)
            if(!validationImag) return toastr.error('This type of file is not allowed')
            if(status == 'Choose...') return toastr.error('Status is required')
            if(status == 'Choose...'){
                status = ''
            }
            let formData = new FormData(this)
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    if (data.status) {
                        this.reset()
                        toastr.success(data.message)
                    }else {
                        toastr.error(data.message)
                    }
                },
                error: function(error) {
                    console.log(error)
                    Object.keys(error.responseJSON.errors).forEach((key) => {
                        toastr.error(error.responseJSON.errors[key][0])
                    })
                }
            });
        })
    </script>
@endpush
