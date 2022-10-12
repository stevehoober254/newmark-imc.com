<?php

namespace App\Http\Controllers;

use App\Models\Insight;
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

    public function newmarkDigitalDetails()
    {
        return view('public.practice-area.practice-area-details');
    }

    public function contactUs()
    {
        return view('public.contact-us');
    }
}
