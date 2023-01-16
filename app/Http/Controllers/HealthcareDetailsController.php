<?php

namespace App\Http\Controllers;

use App\Models\HealthcareDetails;
use Illuminate\Http\Request;

class HealthcareDetailsController extends Controller
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
    public function create($healthcare)
    {
        return view('dashbord.healthcare.image.create', compact('healthcare'));
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

        $healthcare = HealthcareDetails::create(
            $data

        );

        if ($request->file('healthcareDetails')) {
            // return 'test';
            $healthcare
                ->addMedia($request->file('healthcareDetails'))
                ->usingName($request->title)
                ->toMediaCollection('healthcareDetails');
        }

        return redirect()->back()
            ->with('success', __('master.messages_save'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthcareDetails  $healthcareDetalis
     * @return \Illuminate\Http\Response
     */
    public function show(HealthcareDetails $healthcareDetalis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\healthcareDetalis  $healthcareDetalis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $healthcareDetalis = HealthcareDetails::findOrFail($id);
        return view('dashbord.healthcare.image.edit', compact('healthcareDetalis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\healthcareDetalis  $healthcareDetalis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $healthcareDetalis = HealthcareDetails::findOrFail($id);
        $data = $request->all();
        $data['title'] = [
            'en' => $request->title,
            'ar' => $request->title_ar
        ];

        $healthcareDetalis->update($data);

        if ($request->file('healthcareDetalis')) {
            $healthcareDetalis
                ->addMedia($request->file('healthcareDetalis'))
                ->usingName($request->title)
                ->toMediaCollection('healthcareDetalis');
        }

        return redirect()->back()
            ->with('success', __('master.messages_edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\healthcareDetalis  $healthcareDetalis
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthcareDetails $healthcareDetalis)
    {
        //
    }
}
