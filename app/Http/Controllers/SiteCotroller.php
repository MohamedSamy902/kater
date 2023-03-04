<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Slider;
use App\Models\Artical;
use App\Models\Gallery;
use App\Models\WellBeing;
use App\Models\Healthcare;
use Illuminate\Http\Request;
use App\Models\GalleryDetalis;
use Illuminate\Support\Facades\DB;

class SiteCotroller extends Controller
{

    public function index()
    {
        $sliders = Slider::where('status', 'active')->get();
        $HowItAllBegan = Artical::where('section', 'HowItAllBegan')->first();
        $Vision = Artical::where('section', 'Vision')->first();
        $events = Event::whereNotNull('content')->where('status', 'active')->orderBy('order_by', 'DESC')->get();
        return view('site.index', compact('sliders', 'HowItAllBegan', 'Vision', 'events'));
    }

    public function about()
    {
        $TimeLine = Artical::where('section', 'TimeLine')->get();
        $OurVision = Artical::where('section', 'OurVision')->first();
        $OurGoals = Artical::where('section', 'OurGoals')->first();
        $OurMission = Artical::where('section', 'OurMission')->first();
        $FoundationStory = Artical::where('section', 'FoundationStory')->first();
        $WhoWeServe = Artical::where('section', 'WhoWeServe')->first();
        $WhereWeServe = Artical::where('section', 'WhereWeServe')->first();


        return view('site.about', compact('TimeLine', 'FoundationStory', 'OurVision', 'OurMission', 'OurGoals', 'WhoWeServe', 'WhereWeServe'));
    }




    public function impact()
    {
        $impact = Artical::where('section', 'Impact')->first();
        return view('site.impact', compact('impact'));
    }


    public function healthcare()
    {
        $healthcare = Artical::where('section', 'HealthcareInitiatives')->first();
        $healthcareies = Healthcare::where('status', 'active')->orderBy('order_by', 'DESC')->get();
        return view('site.healthcare', compact('healthcare', 'healthcareies'));
    }

    public function healthcareDetiles($id)
    {
        $healthcare = Healthcare::findOrFail($id);
        $allHealthcare = Healthcare::where('status', 'active')->get();
        $allWellBeing = WellBeing::where('status', 'active')->get();
        return view('site.healthcare-details', compact('healthcare', 'allHealthcare', 'allWellBeing'));
    }



    public function wellbeing()
    {
        $Wellbiganing = Artical::where('section', 'Wellbiganing')->first();
        $wellbeingies = WellBeing::where('status', 'active')->orderBy('order_by', 'DESC')->get();
        return view('site.wellbeing', compact('Wellbiganing', 'wellbeingies'));
    }


    public function wellbeingDetiles($id)
    {
        $wellBeing = WellBeing::findOrFail($id);
        $allHealthcare = Healthcare::where('status', 'active')->get();
        $allWellBeing = WellBeing::where('status', 'active')->get();
        // return $wellBeing->WellBeingDetalis;
        // return  DB::table('media')->where('id',  10)->where('mime_type', '=', 'image/jpeg')->orWhere('mime_type', '=', 'image/png')->orWhere('mime_type', '=', 'image/webp')->orWhere('mime_type', '=', 'image/jpg')->first();

        return view('site.wellbeing-details', compact('wellBeing', 'allHealthcare', 'allWellBeing'));

    }




    public function gallery()
    {
        $galleries = Gallery::where('status', 'active')->orderBy('order_by', 'DESC')->get();

        return view('site.gallery', compact('galleries'));
    }

    public function galleryDetiles($id)
    {
        $gall = Gallery::findOrFail($id);
        $galleries = GalleryDetalis::where('galleries_id', $id)->orderBy('order_by', 'DESC')->get();
        $countImageGallery = 1;
        $countVideoGallery = 1;
        foreach ($galleries as $key) {
            if ($key->getFirstMediaUrl('galleryDetails')) {
                $countImageGallery += 1;
            }


            if ($key->getFirstMediaUrl('galleryVideo')) {
                $countVideoGallery += 1;
            }
        }

        return view('site.gallery-details', compact('galleries', 'gall', 'countVideoGallery', 'countImageGallery'));
    }

    public function contact()
    {
        return view('site.contact');
    }
}
