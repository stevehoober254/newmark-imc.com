<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'team_create',
            ],
            [
                'id'    => 18,
                'title' => 'team_edit',
            ],
            [
                'id'    => 19,
                'title' => 'team_show',
            ],
            [
                'id'    => 20,
                'title' => 'team_delete',
            ],
            [
                'id'    => 21,
                'title' => 'team_access',
            ],
            [
                'id'    => 22,
                'title' => 'country_create',
            ],
            [
                'id'    => 23,
                'title' => 'country_edit',
            ],
            [
                'id'    => 24,
                'title' => 'country_show',
            ],
            [
                'id'    => 25,
                'title' => 'country_delete',
            ],
            [
                'id'    => 26,
                'title' => 'country_access',
            ],
            [
                'id'    => 27,
                'title' => 'department_create',
            ],
            [
                'id'    => 28,
                'title' => 'department_edit',
            ],
            [
                'id'    => 29,
                'title' => 'department_show',
            ],
            [
                'id'    => 30,
                'title' => 'department_delete',
            ],
            [
                'id'    => 31,
                'title' => 'department_access',
            ],
            [
                'id'    => 32,
                'title' => 'setting_access',
            ],
            [
                'id'    => 33,
                'title' => 'video_create',
            ],
            [
                'id'    => 34,
                'title' => 'video_edit',
            ],
            [
                'id'    => 35,
                'title' => 'video_show',
            ],
            [
                'id'    => 36,
                'title' => 'video_delete',
            ],
            [
                'id'    => 37,
                'title' => 'video_access',
            ],
            [
                'id'    => 38,
                'title' => 'contact_create',
            ],
            [
                'id'    => 39,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 40,
                'title' => 'contact_show',
            ],
            [
                'id'    => 41,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 42,
                'title' => 'contact_access',
            ],
            [
                'id'    => 43,
                'title' => 'office_create',
            ],
            [
                'id'    => 44,
                'title' => 'office_edit',
            ],
            [
                'id'    => 45,
                'title' => 'office_show',
            ],
            [
                'id'    => 46,
                'title' => 'office_delete',
            ],
            [
                'id'    => 47,
                'title' => 'office_access',
            ],
            [
                'id'    => 48,
                'title' => 'newsletter_subscriber_create',
            ],
            [
                'id'    => 49,
                'title' => 'newsletter_subscriber_edit',
            ],
            [
                'id'    => 50,
                'title' => 'newsletter_subscriber_show',
            ],
            [
                'id'    => 51,
                'title' => 'newsletter_subscriber_delete',
            ],
            [
                'id'    => 52,
                'title' => 'newsletter_subscriber_access',
            ],
            [
                'id'    => 53,
                'title' => 'general_access',
            ],
            [
                'id'    => 54,
                'title' => 'our_expertise_create',
            ],
            [
                'id'    => 55,
                'title' => 'our_expertise_edit',
            ],
            [
                'id'    => 56,
                'title' => 'our_expertise_show',
            ],
            [
                'id'    => 57,
                'title' => 'our_expertise_delete',
            ],
            [
                'id'    => 58,
                'title' => 'our_expertise_access',
            ],
            [
                'id'    => 59,
                'title' => 'newmark_career_access',
            ],
            [
                'id'    => 60,
                'title' => 'opportunity_create',
            ],
            [
                'id'    => 61,
                'title' => 'opportunity_edit',
            ],
            [
                'id'    => 62,
                'title' => 'opportunity_show',
            ],
            [
                'id'    => 63,
                'title' => 'opportunity_delete',
            ],
            [
                'id'    => 64,
                'title' => 'opportunity_access',
            ],
            [
                'id'    => 65,
                'title' => 'personal_history_form_show',
            ],
            [
                'id'    => 66,
                'title' => 'personal_history_form_delete',
            ],
            [
                'id'    => 67,
                'title' => 'personal_history_form_access',
            ],
            [
                'id'    => 68,
                'title' => 'client_create',
            ],
            [
                'id'    => 69,
                'title' => 'client_edit',
            ],
            [
                'id'    => 70,
                'title' => 'client_delete',
            ],
            [
                'id'    => 71,
                'title' => 'client_access',
            ],
            [
                'id'    => 72,
                'title' => 'sector_create',
            ],
            [
                'id'    => 73,
                'title' => 'sector_edit',
            ],
            [
                'id'    => 74,
                'title' => 'sector_show',
            ],
            [
                'id'    => 75,
                'title' => 'sector_delete',
            ],
            [
                'id'    => 76,
                'title' => 'sector_access',
            ],
            [
                'id'    => 77,
                'title' => 'insight_create',
            ],
            [
                'id'    => 78,
                'title' => 'insight_edit',
            ],
            [
                'id'    => 79,
                'title' => 'insight_show',
            ],
            [
                'id'    => 80,
                'title' => 'insight_delete',
            ],
            [
                'id'    => 81,
                'title' => 'insight_access',
            ],
            [
                'id'    => 82,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 83,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 84,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 85,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 86,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 87,
                'title' => 'testimonial_create',
            ],
            [
                'id'    => 88,
                'title' => 'testimonial_edit',
            ],
            [
                'id'    => 89,
                'title' => 'testimonial_show',
            ],
            [
                'id'    => 90,
                'title' => 'testimonial_delete',
            ],
            [
                'id'    => 91,
                'title' => 'testimonial_access',
            ],
            [
                'id'    => 92,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 93,
                'title' => 'internship_form_access',
            ],
            [
                'id'    => 94,
                'title' => 'internship_form_show',
            ],
            [
                'id'    => 95,
                'title' => 'internship_form_delete',
            ],
            [
                'id'    => 96,
                'title' => 'attachment_form_access',
            ],
            [
                'id'    => 97,
                'title' => 'attachment_form_show',
            ],
            [
                'id'    => 98,
                'title' => 'attachment_form_delete',
            ],
        ];

        Permission::insert($permissions);
    }
}
