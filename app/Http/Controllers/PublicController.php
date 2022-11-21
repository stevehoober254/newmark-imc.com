<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use App\Models\Opportunity;
use App\Models\OurExpertise;
use App\Models\PersonalHistoryForm;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function personalHistoryForm()
    {
        return view('public.personal-history-form', ['step' => 1]);
    }

    public function personalHistoryFormStep1(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email_address' => 'required|email|unique:personal_history_forms',
            'phone_number' => 'required|min:10',
            'age' => 'required|integer',
            'nationality' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'current_physical_address' => 'required',
        ]);

        // generate a unique slug for the new record
        $phs = PersonalHistoryForm::create([
            'slug' => uniqid(),
            'full_name' => $request->full_name,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'marital_status' => $request->marital_status,
            'current_physical_address' => $request->current_physical_address,
            'current_step' => 2,
        ]);

        return redirect()
            ->route('personal.historyform.step', ['slug' => $phs->slug, 'step' => $phs->current_step])
            ->with('success', 'Your personal information has been submitted successfully. Proceed to the next step to make the application complete.');;
    }

    // steps for the personal history form
    public function personalHistoryFormStep($slug, $step)
    {
        abort_if(!$slug, 404);
        $phs = PersonalHistoryForm::where([
            ['slug', $slug],
            ['current_step', $step]
        ])->first();
        abort_if(!$phs, 404);
        return view('public.personal-history-form', compact('step', 'slug'));
    }

    public function personalHistoryFormStepPost(Request $request, $slug, $step)
    {
        abort_if(!$slug, 404);
        $phs = PersonalHistoryForm::where([
            ['slug', $slug],
            ['current_step', $step]
        ])->first();
        abort_if(!$phs, 404);

        if ($step == 2) {
            $request->validate([
                'highest_level_of_education' => 'required',
                'field_of_study' => 'required',
                'institution' => 'required',
                'date_of_graduation' => 'required|date',
                'award_achieved' => 'required',
                'high_school_grade' => 'required',
            ]);

            $phs->update([
                'highest_level_of_education' => $request->highest_level_of_education,
                'field_of_study' => $request->field_of_study,
                'institution' => $request->institution,
                'date_of_graduation' => $request->date_of_graduation,
                'award_achieved' => $request->award_achieved,
                'high_school_grade' => $request->high_school_grade,
                'current_step' => 3,
            ]);
        } elseif ($step == 3) {
            $request->validate([
                'leadership_quality' => 'required',
            ]);

            $phs->update([
                'leadership_quality' => $request->leadership_quality,
                'current_step' => 4,
            ]);
        } else {
            return redirect()->back()->with('error', 'Invalid step. Please try again.');
        }

        return redirect()
            ->route('personal.historyform.step', ['slug' => $phs->slug, 'step' => $phs->current_step])
            ->with('success', 'Your personal information has been submitted successfully. Proceed to the next step to make the application complete.');;
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
