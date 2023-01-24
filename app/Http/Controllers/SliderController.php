<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $sliders = Slider::orderByDesc('id')->get();
        return view('dashbord.slider.index', compact('sliders', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.slider.create');
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

            $slider = Slider::create([
                'title' => [
                    'en' => $request->title,
                    'ar' => $request->title_ar,
                ],
                'content' => [
                    'en' => $request->content,
                    'ar' => $request->content_ar,
                ]
            ]);

            if ($request->file('slider')) {
                $slider
                        ->addMedia($request->file('slider'))
                        ->usingName($request->title)
                        ->toMediaCollection('slider');
            }

            if ($request->file('shaip')) {
                $slider
                        ->addMedia($request->file('shaip'))
                        ->usingName($request->title)
                        ->toMediaCollection('shaip');
            }

        return redirect()->back()
        ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('dashbord.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $data = $request->all();
        $data['title'] = [
            'en' => $request->title,
            'ar' => $request->title_ar
        ];
        $data['content'] = [
            'en' => $request->content,
            'ar' => $request->content_ar,
        ];
        $data['link'] = $request->link;
        $data['status'] = $request->status;

        $slider->update($data);
        if ($request->file('slider')) {
            $slider
                ->clearMediaCollection('slider')
                ->addMedia($request->file('slider'))
                ->usingName($request->title)
                ->toMediaCollection('slider');
        }

        if ($request->file('shaip')) {
            $slider
                ->clearMediaCollection('shaip')
                ->addMedia($request->file('shaip'))
                ->usingName($request->title)
                ->toMediaCollection('shaip');
        }

        return redirect()->route('sliders.index')
        ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();

            return redirect()->route('sliders.index')
        ->with('success', __('master.messages_delete'));
    }
}
