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
        } elseif ($step == 4) {
            $request->validate([
                'organization_one' => 'required',
                'number_of_employees_supervised_one' => 'required|integer',
                'start_date_one' => 'required|date',
                'end_date_one' => 'required|date',
                'description_of_the_roles_and_responsibilities_one' => 'required',
                'reason_for_leaving_one' => 'required',
                'organization_two' => 'nullable',
                'number_of_employees_supervised_two' => 'nullable|integer',
                'start_date_two' => 'nullable|date',
                'end_date_two' => 'nullable|date',
                'description_of_the_roles_and_responsibilities_two' => 'nullable',
                'reason_for_leaving_two' => 'nullable',
                'organization_three' => 'nullable',
                'number_of_employees_supervised_three' => 'nullable|integer',
                'start_date_three' => 'nullable|date',
                'end_date_three' => 'nullable|date',
                'description_of_the_roles_and_responsibilities_three' => 'nullable',
                'reason_for_leaving_three' => 'nullable',
            ]);
            $phs->update([
                'organization_one' => $request->organization_one,
                'number_of_employees_supervised_one' => $request->number_of_employees_supervised_one,
                'start_date_one' => $request->start_date_one,
                'end_date_one' => $request->end_date_one,
                'description_of_the_roles_and_responsibilities_one' => $request->description_of_the_roles_and_responsibilities_one,
                'reason_for_leaving_one' => $request->reason_for_leaving_one,
                'organization_two' => $request->organization_two,
                'number_of_employees_supervised_two' => $request->number_of_employees_supervised_two,
                'start_date_two' => $request->start_date_two,
                'end_date_two' => $request->end_date_two,
                'description_of_the_roles_and_responsibilities_two' => $request->description_of_the_roles_and_responsibilities_two,
                'reason_for_leaving_two' => $request->reason_for_leaving_two,
                'organization_three' => $request->organization_three,
                'number_of_employees_supervised_three' => $request->number_of_employees_supervised_three,
                'start_date_three' => $request->start_date_three,
                'end_date_three' => $request->end_date_three,
                'description_of_the_roles_and_responsibilities_three' => $request->description_of_the_roles_and_responsibilities_three,
                'reason_for_leaving_three' => $request->reason_for_leaving_three,
                'current_step' => 5,
            ]);
        } elseif ($step == 5) {
            $request->validate([
                'practice_area_you_are_interested_in' => 'required',
                'type_of_engagement' => 'required',
                'preferred_workstation' => 'required',
                'salary_expectations' => 'required',
                'skills' => 'required',
                'why_would_you_like_to_join_our_team' => 'required',
            ]);
            $phs->update([
                'practice_area_you_are_interested_in' => $request->practice_area_you_are_interested_in,
                'type_of_engagement' => $request->type_of_engagement,
                'preferred_workstation' => $request->preferred_workstation,
                'salary_expectations' => $request->salary_expectations,
                'skills' => $request->skills,
                'why_would_you_like_to_join_our_team' => $request->why_would_you_like_to_join_our_team,
                'current_step' => 6,
            ]);
        } elseif ($step == 6) {
            $request->validate([
                'facebook_url' => 'required|url',
                'twitter_url' => 'required|url',
                'linked_in_url' => 'required|url',
                'do_you_have_personal_website' => 'required',
                'portfolio_url' => 'required_if:do_you_have_personal_website,==,Yes',
                'other_links_works' => 'nullable',
            ]);
            $phs->update([
                'facebook_url' => $request->facebook_url,
                'twitter_url' => $request->twitter_url,
                'linked_in_url' => $request->linked_in_url,
                'do_you_have_personal_website' => $request->do_you_have_personal_website,
                'portfolio_url' => $request->portfolio_url,
                'other_links_works' => $request->other_links_works,
                'current_step' => 'completed',
            ]);
        } else {
            return redirect()->back()->with('error', 'Invalid step. Please try again.');
        }

        if ($phs->current_step == 'completed') {
            return redirect()->route('personal.historyform')->with('success', 'Thank you for taking time to fill in the form. Your form details have been submitted successfully. We will get back to you shortly.');
        } else {
            return redirect()
                ->route('personal.historyform.step', ['slug' => $phs->slug, 'step' => $phs->current_step])
                ->with('success', 'Your personal information has been submitted successfully. Proceed to the next step to make the application complete.');
        }
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
