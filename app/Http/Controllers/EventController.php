<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $events = Event::orderByDesc('id')->get();
        return view('dashbord.events.index', compact('events', 'i'));
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
        return view('dashbord.events.create', 'images', 'videos');
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

        // $event = Event::create([
        //     'title' => [
        //         'en' => $request->title,
        //         'ar' => $request->title_ar,
        //     ],
        //     'content' => [
        //         'en' => $request->content,
        //         'ar' => $request->content_ar,
        //     ],
        //     'link' => $request->link,
        // ]);
        $arrayAttach =  explode(',',  $request->attachments[0]);
        if ($request->attachments[0] != null) {

            for ($i = 0; $i < COUNT($arrayAttach); $i++) {
                $data['image_id'] = $arrayAttach[$i];
            }
        }
        $event = Event::create($data);

        if ($request->file('event')) {
            $event
                ->addMedia($request->file('event'))
                ->usingName($request->title)
                ->toMediaCollection('event');
        }


        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->get();
        $videos = DB::table('media')->where('mime_type', '=', 'video/mp4')->get();
        $event = Event::findOrFail($id);
        return view('dashbord.events.edit', compact('event', 'images', 'videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $event = Event::findOrFail($id);
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
        $arrayAttach =  explode(',',  $request->attachments[0]);
        if ($request->attachments[0] != null) {

            for ($i = 0; $i < COUNT($arrayAttach); $i++) {
                $data['image_id'] = $arrayAttach[$i];
            }
        }
        $event->update($data);

        if ($request->file('event')) {
            $event
                ->clearMediaCollection('event')
                ->addMedia($request->file('event'))
                ->usingName($request->title)
                ->toMediaCollection('event');
        }

        return redirect()->route('events.index')
            ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect()->route('events.index')
            ->with('success', __('master.messages_delete'));
    }
}
