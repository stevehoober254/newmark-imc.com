<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function aboutUs()
    {
        return view('public.about-us');
    }

    public function newsroom()
    {
        return view('public.newsroom');
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
