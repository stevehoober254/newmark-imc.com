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
        $expertises = OurExpertise::all();
        return view('public.about-us', compact('expertises'));
    }

    public function expertise($slug)
    {
        abort_if(!$slug, 404);
        $ourExpertise = OurExpertise::where('slug', $slug)->first();
        abort_if(!$ourExpertise, 404);
        return view('public.expertise', compact('ourExpertise', 'slug'));
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

    public function careerSearchPost(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);
        return redirect()->route('career.search', ['query' => $request->search]);
    }

    public function careerSearch($query)
    {
        abort_if(!$query, 404);
        $ourExpertises = OurExpertise::with(['media'])->get();
        $opportunities = Opportunity::with(['expertise_area', 'location'])
            ->where('status', 1)->where('job_title', 'like', "%$query%")
            ->orwhere('category', 'like', "%$query%")
            ->orwhere('reporting_to', 'like', "%$query%")
            ->orwhere('job_purpose', 'like', "%$query%")
            ->orwhere('key_responsibility', 'like', "%$query%")
            ->orwhere('qualification', 'like', "%$query%")
            ->get();
        return view('public.job-list', compact('opportunities', 'ourExpertises'));
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
