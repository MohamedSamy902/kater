<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

function upladeImage($model, $array, $collection)
{
    global $request;
    for ($i = 0; $i < COUNT($array); $i++) {
        if ($request->file($array[$i])) {
            $model
                ->clearMediaCollection($collection[$i])
                ->addMediaFromRequest($array[$i])
                ->usingFileName(time() . $request->file($array[$i])->getClientOriginalName())
                ->toMediaCollection($collection[$i]);
        }
    }
}


function getUrlMedia($model = null, $collect)
{
    if ($model->image_id != null) {
        $test = DB::table('media')->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->where('id', '=', $model->image_id)->first();

        return url('media/' . $test->id . '/' . $test->file_name);
    } else {
        return $model->getFirstMediaUrl($collect);
    }
}


function getUrlVideo($model = null, $collect)
{
    if ($model->image_id != null) {
        $test = DB::table('media')->where('mime_type', '=', 'video/mp4')->where('id', '=', $model->image_id)->get();
        // $test = DB::table('media')->where('id', '=', $model->image_id)->first();
        return url('media/' . $test->id . '/' . $test->file_name);
    } else {
        return $model->getFirstMediaUrl($collect);
    }
}
