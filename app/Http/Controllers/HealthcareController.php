<?php

namespace App\Http\Controllers;

use App\Models\Healthcare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthcareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healthcare = Healthcare::get();

        $i = 0;
        return view('dashbord.healthcare.index', compact('healthcare', 'i'));
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
        return view('dashbord.healthcare.create', compact('images', 'videos'));
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

        $Healthcare = Healthcare::create([
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
        ]);

        if ($request->file('healthcarevideo')) {
            $Healthcare
                ->addMedia($request->file('healthcarevideo'))
                ->usingName($request->title)
                ->toMediaCollection('healthcarevideo');
        }


        if ($request->file('healthcarePhoto')) {

            $Healthcare
                // ->clearMediaCollection('healthcarePhoto')
                ->addMedia($request->file('healthcarePhoto'))
                ->usingName($request->title)
                ->toMediaCollection('healthcarePhoto');
        }



        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Healthcare  $Healthcare
     * @return \Illuminate\Http\Response
     */
    public function show(Healthcare $healthcare)
    {
        // return $healthcare->healthcareDetalis;
        return view('dashbord.healthcare.show', compact('healthcare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Healthcare  $Healthcare
     * @return \Illuminate\Http\Response
     */
    public function edit(Healthcare $healthcare)
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        return view('dashbord.healthcare.edit', compact('healthcare','images', 'videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Healthcare  $Healthcare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Healthcare $healthcare)
    {
        $healthcare = Healthcare::findOrFail($healthcare->id);
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

        $healthcare->update($data);

        if ($request->file('healthcarevideo')) {
            $healthcare
                ->clearMediaCollection('healthcarevideo')
                ->addMedia($request->file('healthcarevideo'))
                ->usingName($request->title)
                ->toMediaCollection('healthcarevideo');
        }


        if ($request->file('healthcarePhoto')) {

            $healthcare
                ->clearMediaCollection('healthcarePhoto')
                ->addMedia($request->file('healthcarePhoto'))
                ->usingName($request->title)
                ->toMediaCollection('healthcarePhoto');
        }
        return redirect()->back()
            ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Healthcare  $Healthcare
     * @return \Illuminate\Http\Response
     */
    public function destroy(Healthcare $Healthcare)
    {
        //
    }
}
