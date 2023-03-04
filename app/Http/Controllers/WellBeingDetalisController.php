<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\WellBeingDetalis;
use Illuminate\Support\Facades\DB;

class WellBeingDetalisController extends Controller
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
    public function create($wellBeing)
    {
        $galleries = Gallery::get();
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        return view('dashbord.wellbeing.image.create', compact('wellBeing', 'galleries', 'images', 'videos'));
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

        $data['well_beings_id'] = $request->well_beings_id;
        $data['link'] = $request->link;

        $arrayAttach =  explode(',',  $request->attachments[0]);
        if ($request->attachments[0] != null) {

            for ($i = 0; $i < COUNT($arrayAttach); $i++) {
                $data['image_id'] = $arrayAttach[$i];
                $wellBeing = WellBeingDetalis::create($data);
            }
        }

        if ($request->file('wellBeingDetails')) {
            $wellBeing
                ->addMedia($request->file('wellBeingDetails'))
                ->usingName($request->title)
                ->toMediaCollection('wellBeingDetails');
        }

        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WellBeingDetalis  $wellBeingDetalis
     * @return \Illuminate\Http\Response
     */
    public function show(WellBeingDetalis $wellBeingDetalis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WellBeingDetalis  $wellBeingDetalis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        $wellBeingDetalis = WellBeingDetalis::findOrFail($id);
        return view('dashbord.wellbeing.image.edit', compact('wellBeingDetalis','images', 'videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WellBeingDetalis  $wellBeingDetalis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wellBeingDetalis = WellBeingDetalis::findOrFail($id);
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
            }
        }

        $wellBeingDetalis->update($data);

        if ($request->file('wellBeingDetalis')) {
            $wellBeingDetalis
                // ->clearMediaCollection('wellBeingDetalis')
                ->addMedia($request->file('wellBeingDetalis'))
                ->usingName($request->title)
                ->toMediaCollection('wellBeingDetalis');
        }

        return redirect()->back()
            ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WellBeingDetalis  $wellBeingDetalis
     * @return \Illuminate\Http\Response
     */
    public function destroy(WellBeingDetalis $wellBeingDetalis)
    {
        //
    }


    public function removeImage($id)
    {
        $gallery = WellBeingDetalis::findOrFail($id);
        // $gallery->clearMediaCollection('galleryDetails');
        $gallery->delete();
        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

}
