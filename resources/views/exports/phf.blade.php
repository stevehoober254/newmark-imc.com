<table>
    <thead>
        <tr>
            <th>full_name</th>
            <th>age</th>
            <th>nationality</th>
            <th>gender</th>
            <th>marital_status</th>
            <th>current_physical_address</th>
            <th>email_address</th>
            <th>phone_number</th>
            <th>highest_level_of_education</th>
            <th>field_of_study</th>
            <th>institution</th>
            <th>award_achieved</th>
            <th>date_of_graduation</th>
            <th>high_school_grade</th>
            <th>leadership_quality</th>
            <th>practice_area_you_are_interested_in</th>
            <th>skills</th>
            <th>type_of_engagement</th>
            <th>preferred_workstation</th>
            <th>salary_expectations</th>
            <th>why_would_you_like_to_join_our_team</th>
            <th>facebook_url</th>
            <th>twitter_url</th>
            <th>linked_in_url</th>
            <th>do_you_have_personal_website</th>
            <th>portfolio_url</th>
            <th>other_links_works</th>
            <th>current_step</th>
            <th>organization_one</th>
            <th>First number_of_employees_supervised_one</th>
            <th>start_date_one</th>
            <th>end_date_one</th>
            <th>description_of_the_roles_and_responsibilities_one</th>
            <th>reason_for_leaving_one</th>
            <th>organization_two</th>
            <th>number_of_employees_supervised_two</th>
            <th>start_date_two</th>
            <th>end_date_two</th>
            <th>description_of_the_roles_and_responsibilities_two</th>
            <th>reason_for_leaving_two</th>
            <th>organization_three</th>
            <th>number_of_employees_supervised_three</th>
            <th>start_date_three</th>
            <th>end_date_three</th>
            <th>description_of_the_roles_and_responsibilities_three</th>
            <th>reason_for_leaving_three</th>
            <th>created_at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($phfs as $phf)
            <tr>
                <td>
                    {{ $phf->full_name }}
                </td>
                <td>
                    {{ $phf->age }}
                </td>
                <td>
                    {{ $phf->nationality }}
                </td>
                <td>
                    {{ $phf->gender }}
                </td>
                <td>
                    {{ $phf->marital_status }}
                </td>
                <td>
                    {{ $phf->current_physical_address }}
                </td>
                <td>
                    {{ $phf->email_address }}
                </td>
                <td>
                    {{ $phf->phone_number }}
                </td>
                <td>
                    {{ $phf->highest_level_of_education }}
                </td>
                <td>
                    {{ $phf->field_of_study }}
                </td>
                <td>
                    {{ $phf->institution }}
                </td>
                <td>
                    {{ $phf->award_achieved }}
                </td>
                <td>
                    {{ $phf->date_of_graduation }}
                </td>
                <td>
                    {{ $phf->high_school_grade }}
                </td>
                <td>
                    {{ $phf->leadership_quality }}
                </td>
                <td>
                    {{ $phf->practice_area_you_are_interested_in }}
                </td>
                <td>
                    {{ $phf->skills }}
                </td>
                <td>
                    {{ $phf->type_of_engagement }}
                </td>
                <td>
                    {{ $phf->preferred_workstation }}
                </td>
                <td>
                    {{ $phf->salary_expectations }}
                </td>
                <td>
                    {{ $phf->why_would_you_like_to_join_our_team }}
                </td>
                <td>
                    {{ $phf->facebook_url }}
                </td>
                <td>
                    {{ $phf->twitter_url }}
                </td>
                <td>
                    {{ $phf->linked_in_url }}
                </td>
                <td>
                    {{ $phf->do_you_have_personal_website }}
                </td>
                <td>
                    {{ $phf->portfolio_url }}
                </td>
                <td>
                    {{ $phf->other_links_works }}
                </td>
                <td>
                    {{ $phf->current_step }}
                </td>
                <td>
                    {{ $phf->organization_one }}
                </td>
                <td>
                    {{ $phf->number_of_employees_supervised_one }}
                </td>
                <td>
                    {{ $phf->start_date_one }}
                </td>
                <td>
                    {{ $phf->end_date_one }}
                </td>
                <td>
                    {{ $phf->description_of_the_roles_and_responsibilities_one }}
                </td>
                <td>
                    {{ $phf->reason_for_leaving_one }}
                </td>
                <td>
                    {{ $phf->organization_two }}
                </td>
                <td>
                    {{ $phf->number_of_employees_supervised_two }}
                </td>
                <td>
                    {{ $phf->start_date_two }}
                </td>
                <td>
                    {{ $phf->end_date_two }}
                </td>
                <td>
                    {{ $phf->description_of_the_roles_and_responsibilities_two }}
                </td>
                <td>
                    {{ $phf->reason_for_leaving_two }}
                </td>
                <td>
                    {{ $phf->organization_three }}
                </td>
                <td>
                    {{ $phf->number_of_employees_supervised_three }}
                </td>
                <td>
                    {{ $phf->start_date_three }}
                </td>
                <td>
                    {{ $phf->end_date_three }}
                </td>
                <td>
                    {{ $phf->description_of_the_roles_and_responsibilities_three }}
                </td>
                <td>
                    {{ $phf->reason_for_leaving_three }}
                </td>
                <td>
                    {{ $phf->created_at }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
