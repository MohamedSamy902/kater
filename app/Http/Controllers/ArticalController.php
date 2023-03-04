<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($model)
    {
        $i = 0;
        $articles = Artical::where('section', $model)->get();
        // return $articles;
        return view('dashbord.article.index', compact('articles', 'model', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($model)
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();

        return view('dashbord.article.create', compact('model', 'images', 'videos', 'images', 'videos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $model)
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
        $data['section'] = $model;
        $data['link'] = $request->link;
        $arrayAttach =  explode(',',  $request->attachments[0]);
        if ($request->attachments[0] != null) {

            for ($i = 0; $i < COUNT($arrayAttach); $i++) {
                $data['image_id'] = $arrayAttach[$i];
                $article = Artical::create($data);
            }
        }else {
            $article = Artical::create($data);

        }

        if ($request->file('article')) {
            $article
                ->addMedia($request->file('article'))
                ->usingName($request->title)
                ->toMediaCollection($model);
        }

        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artical  $artical
     * @return \Illuminate\Http\Response
     */
    public function show($id, $model)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artical  $artical
     * @return \Illuminate\Http\Response
     */
    public function edit($model, $id = null)
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();

        if ($id != null) {
            $article = Artical::where('section', $model)->where('id', $id)->first();
        } else {
            $article = Artical::where('section', $model)->first();
        }
        if ($article != NULL) {
            return view('dashbord.article.edit', compact('model', 'article', 'images', 'videos'));
        } else {
            return abort('404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artical  $artical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $model, $id)
    {
        $article = Artical::findOrFail($id);
        $data = $request->all();
        $data['title'] = [
            'en' => $request->title,
            'ar' => $request->title_ar
        ];
        $data['content'] = [
            'en' => $request->content,
            'ar' => $request->content_ar
        ];
        $data['link'] = $request->link;
        $arrayAttach =  explode(',',  $request->attachments[0]);
        if ($request->attachments[0] != null) {

            for ($i = 0; $i < COUNT($arrayAttach); $i++) {
                $data['image_id'] = $arrayAttach[$i];
            }
        }
        $article->update($data);

        if ($request->file('article')) {
            $article
                ->clearMediaCollection($model)
                ->addMedia($request->file('article'))
                ->usingName($request->title)
                ->toMediaCollection($model);
        }

        return redirect()->back()
            ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artical  $artical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artical $artical)
    {
        //
    }
}
