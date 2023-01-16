<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;

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

        return view('dashbord.article.create', compact('model'));
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
        $article = Artical::create($data);
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
    public function edit($model, $id= null)
    {

        if ($id != null) {
            $article = Artical::where('section', $model)->where('id', $id)->first();

        }else {
            $article = Artical::where('section', $model)->first();

        }
        // return $article;
        if ($article != NULL) {
            return view('dashbord.article.edit', compact('model', 'article'));

        }else {
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
