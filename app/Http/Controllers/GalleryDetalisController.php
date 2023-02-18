<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryDetalis;
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
        return view('dashbord.gallery.image.create', compact('gallery'));
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

        $galleries = GalleryDetalis::create($data);
        if ($request->file('galleryDetails')) {
            for ($i=0; $i < COUNT($request->galleryDetails); $i++) {
                $galleries
                ->addMedia($request->file('galleryDetails')[$i])
                ->usingName($request->title)
                ->toMediaCollection('galleryDetails');
            }
        }
        if ($request->file('galleryVideo')) {
            for ($i=0; $i < COUNT($request->galleryVideo); $i++) {
                $galleries
                ->addMedia($request->file('galleryVideo')[$i])
                ->usingName($request->title)
                ->toMediaCollection('galleryVideo');
            }
        }
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
