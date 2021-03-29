@extends('backend.master')
@section('content')
	 <section class="data_table"> <!--========== data table start ==========-->
                <form  method="post" enctype="multipart/form-data" id="myform"> <!--==========data form start ==========-->
                    <div class="data_heading"> <!--========== data table heading start ==========-->
                    <h3>room add</h3>
                    <h4><span class="data_text"><a href="#">Database</a></span> / <span class="add_text">Add room</span></h4>
                </div> <!--========== data table heading end ==========-->
                <div class="container"> <!--========== data table input start ==========-->
                    <div class="data">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12"> <!--========== basic info start ==========-->
                                <div class="data_input_field">
                                    <div class="data_input">
                                            <div class="row input_row">
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="room_name">Room name</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="room_name" placeholder="Room name" name="room_name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="room_number">Room number</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="number" id="room_number" placeholder="Room number" name="room_number">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label  class="input_field_name" for="available">Available</label>
                                                    <br>
                                                    <select id="available"  class="data_field_input_tag" name="available">
                                                        <option selected>Choose...</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                     <label  class="input_field_name" for="status">Status</label>
                                                    <br>
                                                    <select id="status"  class="data_field_input_tag" name="status">
                                                        <option selected>Choose...</option>
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row input_row">
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="bed_type">Bed type</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="bed_type" placeholder="Bed type" name ="bed_type">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="type_name">Type name</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="type_name" placeholder="Type name" name="type_name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="cost_pre_day">Cost per day</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="number" id="cost_pre_day" placeholder="Cost per day" name="cost_per_day">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="discount">Discount</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="number" id="discount" placeholder="Discount" name="discount">
                                                </div>
                                            </div>
                                            <div class="row input_row">
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="size">Size</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="size" placeholder="Size" name="size">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="max_adult">Max adult</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="max_adult" placeholder="Max adult" name="max_adult">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="max_guest">Max guest</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="max_guest" placeholder="Max guest" name="max_guest">
                                                </div>
                                                  <div class="col-12 col-sm-12 col-md-3">
                                                     <label  class="input_field_name" for="room_type_status">Status</label>
                                                    <br>
                                                    <select id="room_type_status"  class="data_field_input_tag" name="room_type_status">
                                                        <option selected>Choose...</option>
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row input_row">
                                                <div class="col-12">
                                                    <label class="input_field_name" for="description">Description</label>
                                                    <br>
                                                    <textarea class="description_taxt" id="description" cols="30" rows="3" name="description"></textarea>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div> <!--========== basic info end ==========-->
                        </div>
                    </div>
                </div> <!--========== data table input end ==========-->

                <div class="container"> <!--========== check box data input start ==========-->
                    <div class="check_bata_field">
                        <div class="data_input_field_head">
                            <h3>room facility</h3>
                        </div>
                        <div class="row" id="facilities">
                            <!-- Append facilities from script -->
                        </div>

                            <div>
                                <input type="file" name="image[]" multiple class="input_field_name" id="image">
                                <div class="img_preview">

                                </div>
                            </div>
                        </div> <!--========== add room and text end ==========-->
                    </div>
                </div> <!--========== check box data input end ==========-->
                <div class="container">
                    <div class="row">
                        <button id="submit_btn" class="add_btn">add</button>
                    </div>
                </div>
                </form> <!--==========data form end ==========-->
    </section> <!--========== data table end ==========-->
@endsection
@push('style')
<style>
    input[type="file"] {
      display: block;
    }
    .imageThumb {
      max-height: 75px;
      border: 2px solid;
      padding: 1px;
      cursor: pointer;
    }
    .img_preview {
      display: inline-block;
      margin: 10px 10px 0 0;
    }
    .remove {
      display: block;
      background: #444;
      border: 1px solid black;
      color: white;
      text-align: center;
      cursor: pointer;
    }
    .remove:hover {
      background: white;
      color: black;
    }
</style>
@endpush
@push('scripts')
    <script>
        let facilites_category = []
        let facilites  = {
            spa:['Steam Bath or Steam Room','Hammam', 'Vitality Pool', 'Relaxation Spaces','Experience Shower'],
            breakfast:['Egg and bread', 'Bread and jamm', 'Tea and bread'],
            gym:['Weught lifting', 'Lockers', 'lounge'],
        }
        let fecth_facilites_category_url = '{{ url("/fetch/facilities-category") }}'
        function fecthFacilitesCategory() {
            $.ajax({
                url: fecth_facilites_category_url,
                type: "GET",
                dataType: "JSON",
                success: (res) => {
                    if (res.status) {
                        facilites_category = res.facilities_category
                        createFacilities(facilites_category)
                    } else {
                        toastr.error(res.message)
                    }
                },
                error: (e) => {
                    console.log(e)
                }
            });
        }
        fecthFacilitesCategory()
        function createFacilities(data) {
            let rowId = $('#facilities');
            rowId.empty()
            for (let i = 0; i < data.length; i++) {
                let row = `
                         <div class="col-12 col-sm-6 col-md-3">
                                    <div class="check_boxes padding_bottom">
                                        <div class="room_facility_head">
                                            <h3>${data[i].name}</h3>
                                            <div id="${data[i].name}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        `
                rowId.append(row)
                let check_box_id = $(`#${[data[i].name]}`);
                let facilitiesArray = facilites[data[i].name].forEach(r=>{
                      let check = `
                            <input class="check_box_input" onchange="myFunction('${r}', '${data[i].name}')"  type="checkbox" id="${r.split(" ").join("_")}">
                            <label class="input_field_name check_box_label" for="${r.split(" ").join("_")}">${r}</label>
                           <br>
                        `
                    check_box_id.append(check)
                })
            }
        }
        let selected_facilities = {
            spa:[],
            breakfast:[],
            gym:[],
        }
        function myFunction(value, cat_name){
            const index = selected_facilities[cat_name].indexOf(value)
            if(index === -1  ){
                selected_facilities[cat_name].push(value)
            }else{
                selected_facilities[cat_name].splice(index,1)
            }
        }
        $("#image").on("change", function(e) {
            let files = e.target.files
            let filesLength = files.length
            for (let i = 0; i < filesLength; i++) {
                let f = files[i]
                let fileReader = new FileReader()
                fileReader.onload = (function(e) {
                  let file = e.target;
                 /* let test = `<img class="imageThumb" src= "${e.target.result}" />`*/
                  let tets = $("<span class=\"img_preview\">" +
                    "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                    "<br/>").insertAfter("#image");
                  $('.img_preview').append(tets)
                })
                fileReader.readAsDataURL(f);
            }
        })
        let url = '{{ url("/rooms") }}'
        $("#myform").on('submit',function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();

            let formData = new FormData(this)
            console.log(selected_facilities)
            formData.append('selected_facilities',JSON.stringify(selected_facilities) )
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
                        $('.img_preview').empty()
                    } else {
                        toastr.error(data.message)
                    }
                },
                error: function(error) {
                    console.log(error);
                    Object.keys(error.responseJSON.errors).forEach((key) => {
                        toastr.error(error.responseJSON.errors[key][0]);
                    })
                }
            });
        })
    </script>
@endpush
