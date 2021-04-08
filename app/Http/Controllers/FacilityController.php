<?php

namespace App\Http\Controllers;

use App\Facility;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $facilities = Facility::latest()->paginate(20);

        return view('backend.pages.facilities.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => 'required',
            'icon' => 'required|mimes:jpeg,png,jpg,gif',
            'type' => 'required',
            'status' => 'required',
        ]);

        try {
            // get file Name
            $file_Name = pathinfo($request->icon->getClientOriginalName(), PATHINFO_FILENAME);
            // get file extension
            $extension = pathinfo($request->icon->getClientOriginalName(), PATHINFO_EXTENSION);
            // create unique file name
            $full_file_name = $file_Name . "-" . time() . '.' . $request->icon->getClientOriginalExtension();
            //file upload using img intervention
            $img_uploads = Image::make($request->icon)
                ->resize(50, 50)
                ->save(public_path('storage/facilities/') . $full_file_name);
            // store the value into the database based on file uploads
            Facility::create([
                'name' => $request->name,
                'icon' => '/storage/facilities/' . $full_file_name,
                'type' => $request->type,
                'status' => $request->status,
            ]);
            return back()->with(['success' => 'Facility Created Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['error' => 'Facility creation failed!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Facility $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Facility $facility
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Facility $facility)
    {
        return view('backend.pages.facilities.edit', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Facility $facility
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Facility $facility)
    {
        $validated = $this->validate($request, [
            'name' => 'required',
            'icon' => 'sometimes|mimes:jpeg,png,jpg,gif',
            'type' => 'required',
            'status' => 'required',
        ]);

        try {
            $facility->update([
                'name' => $request->name,
                'type' => $request->type,
                'status' => $request->status,
            ]);

            // store the value into the database based on file uploads
            if ($request->file('icon')) {
                // get file Name
                $file_Name = pathinfo($request->icon->getClientOriginalName(), PATHINFO_FILENAME);
                // get file extension
                $extension = pathinfo($request->icon->getClientOriginalName(), PATHINFO_EXTENSION);
                // create unique file name
                $full_file_name = $file_Name . "-" . time() . '.' . $request->icon->getClientOriginalExtension();
                //file upload using img intervention
                $img_uploads = Image::make($request->icon)
                    ->resize(50, 50)
                    ->save(public_path('storage/facilities/') . $full_file_name);

                if (file_exists(public_path($facility->icon))) {
                    @unlink(public_path($facility->icon));
                }

                $facility->icon = '/storage/facilities/' . $full_file_name;
                $facility->save();
            }
            return redirect()->route('admin.facilities.index')->with(['success' => 'Facility Updated Successfully!']);
        } catch (\Exception $e) {
            return redirect()->route('admin.facilities.index')->with(['error' => 'Facility update failed!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Facility $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        //
    }
}
