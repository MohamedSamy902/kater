<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\HealthcareDetails;
use Illuminate\Support\Facades\DB;

class HealthcareDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($healthcare)
    {
        $galleries = Gallery::get();
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        // return view('dashbord.gallery.image.create', compact('gallery', 'images', 'videos'));
        return view('dashbord.healthcare.image.create', compact('healthcare', 'galleries', 'images', 'videos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['title'] = [
            'en' => $request->title,
            'ar' => $request->title_ar,
        ];
        $data['healthcares_id'] =  $request->healthcares_id;
            $data['galleries_id'] = $request->galleries_id;
            $data['link'] = $request->link;

        $arrayAttach =  explode(',',  $request->attachments[0]);
        if ($request->attachments[0] != null) {

            for ($i = 0; $i < COUNT($arrayAttach); $i++) {
                $data['image_id'] = $arrayAttach[$i];
                $healthcare = HealthcareDetails::create($data);
            }
        }
        // $healthcare = HealthcareDetails::create([
        //     'title' => [
        //         'en' => $request->title,
        //         'ar' => $request->title_ar,
        //     ],
        //     'healthcares_id' => $request->healthcares_id,
        //     'galleries_id' => $request->galleries_id,
        //     'link' => $request->link

        // ]);

        if ($request->file('healthcareDetails')) {
            $healthcare
                ->addMedia($request->file('healthcareDetails'))
                ->usingName($request->title)
                ->toMediaCollection('healthcareDetails');
        }

        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthcareDetails  $healthcareDetalis
     * @return \Illuminate\Http\Response
     */
    public function show(HealthcareDetails $healthcareDetalis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\healthcareDetalis  $healthcareDetalis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        $healthcareDetalis = HealthcareDetails::findOrFail($id);
        return view('dashbord.healthcare.image.edit', compact('healthcareDetalis','images', 'videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\healthcareDetalis  $healthcareDetalis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $healthcareDetails = HealthcareDetails::findOrFail($id);
        $data = $request->all();
        $data['title'] = [
            'en' => $request->title,
            'ar' => $request->title_ar
        ];
        $data['link'] = $request->link;
        $arrayAttach =  explode(',',  $request->attachments[0]);
        if ($request->attachments[0] != null) {

            for ($i = 0; $i < COUNT($arrayAttach); $i++) {
                $data['image_id'] = $arrayAttach[$i];
                // $healthcareDetails = HealthcareDetails::create($data);
            }
        }
        $healthcareDetails->update($data);

        if ($request->file('healthcareDetails')) {
            $healthcareDetails
                ->clearMediaCollection('healthcareDetails')
                ->addMedia($request->file('healthcareDetails'))
                ->usingName($request->title)
                ->toMediaCollection('healthcareDetails');
        }

        return redirect()->back()
            ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\healthcareDetalis  $healthcareDetalis
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthcareDetails $healthcareDetalis)
    {
        //
    }


    public function removeImage($id)
    {
        $gallery = HealthcareDetails::findOrFail($id);
        $gallery->clearMediaCollection('galleryDetails');
        $gallery->delete();
        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }
}
