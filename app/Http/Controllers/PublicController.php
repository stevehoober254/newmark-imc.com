<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use App\Models\Opportunity;
use App\Models\OurExpertise;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $insights = Insight::orderBy('id', 'desc')->limit(3)->get();
        return view('public.index', compact('insights'));
    }

    public function aboutUs()
    {
        return view('public.about-us');
    }

    public function careers()
    {
        return view('public.careers');
    }

    public function jobList()
    {
        $ourExpertises = OurExpertise::with(['media'])->get();
        $opportunities = Opportunity::with(['expertise_area', 'location'])->where('status', 1)->get();
        return view('public.job-list', compact('opportunities', 'ourExpertises'));
    }

    public function jobDetails($slug)
    {
        $opportunity = Opportunity::with(['expertise_area', 'location'])->where('slug', $slug)->first();
        abort_if(!$opportunity, 404);
        return view('public.job-details', compact('opportunity'));
    }

    public function insights()
    {
        return view('public.insights.newsroom');
    }

    public function insightDetail($slug)
    {
        $insight = Insight::where('slug', $slug)->first();
        if (!$insight) {
            abort(404);
        }
        return view('public.insights.insight-detail', compact('insight'));
    }

    public function newmarkDigital()
    {
        return view('public.practice-area.practice-area');
    }

    public function contactUs()
    {
        return view('public.contact-us');
    }
}
