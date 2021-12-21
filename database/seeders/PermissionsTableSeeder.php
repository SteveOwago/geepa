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
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 39,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 40,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 41,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 42,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 43,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 44,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 45,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 46,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 47,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 48,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 49,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 50,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 51,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 52,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 53,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 54,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 55,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 56,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 57,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 58,
                'title' => 'course_create',
            ],
            [
                'id'    => 59,
                'title' => 'course_edit',
            ],
            [
                'id'    => 60,
                'title' => 'course_show',
            ],
            [
                'id'    => 61,
                'title' => 'course_delete',
            ],
            [
                'id'    => 62,
                'title' => 'course_access',
            ],
            [
                'id'    => 63,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 64,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 65,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 66,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 67,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 68,
                'title' => 'test_create',
            ],
            [
                'id'    => 69,
                'title' => 'test_edit',
            ],
            [
                'id'    => 70,
                'title' => 'test_show',
            ],
            [
                'id'    => 71,
                'title' => 'test_delete',
            ],
            [
                'id'    => 72,
                'title' => 'test_access',
            ],
            [
                'id'    => 73,
                'title' => 'question_create',
            ],
            [
                'id'    => 74,
                'title' => 'question_edit',
            ],
            [
                'id'    => 75,
                'title' => 'question_show',
            ],
            [
                'id'    => 76,
                'title' => 'question_delete',
            ],
            [
                'id'    => 77,
                'title' => 'question_access',
            ],
            [
                'id'    => 78,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 79,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 80,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 81,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 82,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 83,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 84,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 85,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 86,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 87,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 88,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 89,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 90,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 91,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 92,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 93,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 94,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 95,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 96,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 97,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 98,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 99,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 100,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 101,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 102,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 103,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 104,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 105,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 106,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 107,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 108,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 109,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 110,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 111,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 112,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 113,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 114,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 115,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 116,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 117,
                'title' => 'task_create',
            ],
            [
                'id'    => 118,
                'title' => 'task_edit',
            ],
            [
                'id'    => 119,
                'title' => 'task_show',
            ],
            [
                'id'    => 120,
                'title' => 'task_delete',
            ],
            [
                'id'    => 121,
                'title' => 'task_access',
            ],
            [
                'id'    => 122,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 123,
                'title' => 'school_management_access',
            ],
            [
                'id'    => 124,
                'title' => 'school_create',
            ],
            [
                'id'    => 125,
                'title' => 'school_edit',
            ],
            [
                'id'    => 126,
                'title' => 'school_show',
            ],
            [
                'id'    => 127,
                'title' => 'school_delete',
            ],
            [
                'id'    => 128,
                'title' => 'school_access',
            ],
            [
                'id'    => 129,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
