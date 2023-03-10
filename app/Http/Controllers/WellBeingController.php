<?php

namespace App\Http\Controllers;

use App\Models\WellBeing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WellBeingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wellbeing = WellBeing::get();
        $i = 0;
        return view('dashbord.wellbeing.index', compact('wellbeing', 'i'));
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
        return view('dashbord.wellbeing.create', compact('images', 'videos'));
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

        $wellBeing = WellBeing::create([
            'title' => [
                'en' => $request->title,
                'ar' => $request->title_ar,
            ],
            'content' => [
                'en' => $request->content,
                'ar' => $request->content_ar,
            ],
            'short_content' => [
                'en' => $request->short_content,
                'ar' => $request->short_content_ar,
            ],
            'convoys' => [
                'en' => $request->convoys,
                'ar' => $request->convoys_ar,
            ],
            'services' => [
                'en' => $request->services,
                'ar' => $request->services_ar,
            ],
            'short_content' => [
                'en' => $request->short_content,
                'ar' => $request->short_content_ar,
            ],
        ]);

        if ($request->file('wellbeingVideo')) {
            $wellBeing
                ->addMedia($request->file('wellbeingVideo'))
                ->usingName($request->title)
                ->toMediaCollection('wellbeingVideo');
        }

        if ($request->file('wellbeingPhoto')) {
            $wellBeing
                // ->clearMediaCollection('healthcarePhoto')
                ->addMedia($request->file('wellbeingPhoto'))
                ->usingName($request->title)
                ->toMediaCollection('wellbeingPhoto');
        }



        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WellBeing  $wellBeing
     * @return \Illuminate\Http\Response
     */
    public function show(WellBeing $wellBeing)
    {
        return view('dashbord.wellbeing.show', compact('wellBeing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WellBeing  $wellBeing
     * @return \Illuminate\Http\Response
     */
    public function edit(WellBeing $wellBeing)
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        return view('dashbord.wellbeing.edit', compact('wellBeing','images', 'videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WellBeing  $wellBeing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WellBeing $wellBeing)
    {
        $wellBeing = WellBeing::findOrFail($wellBeing->id);
        $data = $request->all();
        $data['title'] = [
            'en' => $request->title,
            'ar' => $request->title_ar
        ];

        $data['content'] = [
            'en' => $request->content,
            'ar' => $request->content_ar
        ];

        $data['short_content'] = [
            'en' => $request->short_content,
            'ar' => $request->short_content_ar
        ];

        $data['convoys'] = [
            'en' => $request->convoys,
            'ar' => $request->convoys_ar
        ];

        $data['services'] = [
            'en' => $request->services,
            'ar' => $request->services_ar
        ];
        $data['status'] = $request->status;

        $wellBeing->update($data);

        if ($request->file('wellbeingVideo')) {
            $wellBeing
                ->clearMediaCollection('wellbeingVideo')
                ->addMedia($request->file('wellbeingVideo'))
                ->usingName($request->title)
                ->toMediaCollection('wellbeingVideo');
        }
        if ($request->file('wellbeingPhoto')) {
            $wellBeing
                ->clearMediaCollection('wellbeingPhoto')
                ->addMedia($request->file('wellbeingPhoto'))
                ->usingName($request->title)
                ->toMediaCollection('wellbeingPhoto');
        }

        return redirect()->back()
            ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WellBeing  $wellBeing
     * @return \Illuminate\Http\Response
     */
    public function destroy(WellBeing $wellBeing)
    {
        //
    }
}
