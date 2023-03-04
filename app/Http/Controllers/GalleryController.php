<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $galleries = Gallery::all();

        return view('dashbord.gallery.index', compact('galleries', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        return view('dashbord.gallery.create', compact('images', 'videos'));
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
            'ar' => $request->title_ar
        ];
        $data['content'] = [
            'en' => $request->content,
            'ar' => $request->content_ar
        ];

        $gallery = Gallery::create($data);
        if ($request->file('gallery')) {
            $gallery
                ->addMedia($request->file('gallery'))
                ->usingName($request->title)
                ->toMediaCollection('gallery');
        }
        return redirect()->back()->with('success', __('master.messages_edit'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('dashbord.gallery.show', compact('gallery'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('dashbord.gallery.edit', compact('gallery','images', 'videos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $data = $request->all();
        $data['title'] = [
            'en' => $request->title,
            'ar' => $request->title_ar
        ];
        $data['content'] = [
            'en' => $request->content,
            'ar' => $request->content_ar
        ];
        $data['status'] = $request->status;


        $gallery->update($data);
        if ($request->file('gallery')) {
            $gallery
                ->clearMediaCollection('gallery')
                ->addMedia($request->file('gallery'))
                ->usingName($request->title)
                ->toMediaCollection('gallery');
        }

        return redirect()->back()->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        foreach($gallery->galleryDetalis as $galleryDetalis) {
            $galleryDetalis->clearMediaCollection('galleryDetails');
        }

        $gallery->clearMediaCollection('gallery');
        $gallery->delete();
        return redirect()->back()->with('success', __('master.messages_delete'));
    }
}
