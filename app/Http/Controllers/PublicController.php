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

    public function insights()
    {
        return view('public.newsroom');
    }

    public function insightDetail($slug)
    {
        $insight = Insight::where('slug', $slug)->first();
        if (!$insight) {
            abort(404);
        }
        return view('public.insight-detail', compact('insight'));
    }

    public function practiceArea()
    {
        return view('public.practice-area');
    }

    public function newmarkCreative()
    {
        return view('public.practice-area.newmark-creative');
    }

    public function SingleNewmarkCreative()
    {
        return view('public.practice-area.single-newmark-creative');
    }

    public function newmarkDigital()
    {
        return view('public.practice-area.newmark-digital');
    }

    public function newmarkDigitalDetails()
    {
        return view('public.practice-area.newmark-digital-details');
    }

    public function contactUs()
    {
        return view('public.contact-us');
    }
}
