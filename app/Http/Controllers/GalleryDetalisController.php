<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryDetalis;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class GalleryDetalisController extends Controller
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
    public function create($gallery)
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        return view('dashbord.gallery.image.create', compact('gallery', 'images', 'videos'));
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

        $data['galleries_id'] = $request->galleries_id;

        $arrayAttach =  explode(',',  $request->attachments[0]);
        if ($request->attachments[0] != null) {

            for ($i = 0; $i < COUNT($arrayAttach); $i++) {
                $data['image_id'] = $arrayAttach[$i];
                $galleries = GalleryDetalis::create($data);
            }
        }
        if ($request->file('galleryDetails')) {
            for ($i = 0; $i < COUNT($request->galleryDetails); $i++) {
                $galleries = GalleryDetalis::create($data);
                $galleries
                    ->addMedia($request->file('galleryDetails')[$i])
                    ->usingName($request->title)
                    ->toMediaCollection('galleryDetails');
            }
        }
        if ($request->file('galleryVideo')) {
            $galleries = GalleryDetalis::create($data);
            for ($i = 0; $i < COUNT($request->galleryVideo); $i++) {
                $galleries
                    ->addMedia($request->file('galleryVideo')[$i])
                    ->usingName($request->title)
                    ->toMediaCollection('galleryVideo');
            }
        }
        return 'ood ';
        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryDetalis  $galleryDetalis
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryDetalis $galleryDetalis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryDetalis  $galleryDetalis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = GalleryDetalis::findOrFail($id);
        return view('dashbord.gallery.image.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleryDetalis  $galleryDetalis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryDetalis $galleryDetalis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryDetalis  $galleryDetalis
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryDetalis $galleryDetalis)
    {
        //
    }

    public function removeImage($id)
    {
        $gallery = GalleryDetalis::findOrFail($id);
        $gallery->clearMediaCollection('galleryDetails');
        $gallery->delete();
        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }
}
