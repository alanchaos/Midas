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
                'title' => 'resident_access',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 23,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 24,
                'title' => 'unit_access',
            ],
            [
                'id'    => 25,
                'title' => 'facility_access',
            ],
            [
                'id'    => 26,
                'title' => 'family_access',
            ],
            [
                'id'    => 27,
                'title' => 'tenant_access',
            ],
            [
                'id'    => 28,
                'title' => 'visitor_access',
            ],
            [
                'id'    => 29,
                'title' => 'defect_access',
            ],
            [
                'id'    => 30,
                'title' => 'add_unit_create',
            ],
            [
                'id'    => 31,
                'title' => 'add_unit_edit',
            ],
            [
                'id'    => 32,
                'title' => 'add_unit_show',
            ],
            [
                'id'    => 33,
                'title' => 'add_unit_delete',
            ],
            [
                'id'    => 34,
                'title' => 'add_unit_access',
            ],
            [
                'id'    => 35,
                'title' => 'add_block_create',
            ],
            [
                'id'    => 36,
                'title' => 'add_block_edit',
            ],
            [
                'id'    => 37,
                'title' => 'add_block_show',
            ],
            [
                'id'    => 38,
                'title' => 'add_block_delete',
            ],
            [
                'id'    => 39,
                'title' => 'add_block_access',
            ],
            [
                'id'    => 40,
                'title' => 'unit_management_create',
            ],
            [
                'id'    => 41,
                'title' => 'unit_management_edit',
            ],
            [
                'id'    => 42,
                'title' => 'unit_management_show',
            ],
            [
                'id'    => 43,
                'title' => 'unit_management_delete',
            ],
            [
                'id'    => 44,
                'title' => 'unit_management_access',
            ],
            [
                'id'    => 45,
                'title' => 'add_family_member_access',
            ],
            [
                'id'    => 46,
                'title' => 'activity_log_access',
            ],
            [
                'id'    => 47,
                'title' => 'facility_category_create',
            ],
            [
                'id'    => 48,
                'title' => 'facility_category_edit',
            ],
            [
                'id'    => 49,
                'title' => 'facility_category_show',
            ],
            [
                'id'    => 50,
                'title' => 'facility_category_delete',
            ],
            [
                'id'    => 51,
                'title' => 'facility_category_access',
            ],
            [
                'id'    => 52,
                'title' => 'facility_management_create',
            ],
            [
                'id'    => 53,
                'title' => 'facility_management_edit',
            ],
            [
                'id'    => 54,
                'title' => 'facility_management_show',
            ],
            [
                'id'    => 55,
                'title' => 'facility_management_delete',
            ],
            [
                'id'    => 56,
                'title' => 'facility_management_access',
            ],
            [
                'id'    => 57,
                'title' => 'add_tenant_access',
            ],
            [
                'id'    => 58,
                'title' => 'resident_setting_access',
            ],
            [
                'id'    => 59,
                'title' => 'family_setting_access',
            ],
            [
                'id'    => 60,
                'title' => 'tenant_setting_access',
            ],
            [
                'id'    => 61,
                'title' => 'facility_book_create',
            ],
            [
                'id'    => 62,
                'title' => 'facility_book_edit',
            ],
            [
                'id'    => 63,
                'title' => 'facility_book_show',
            ],
            [
                'id'    => 64,
                'title' => 'facility_book_delete',
            ],
            [
                'id'    => 65,
                'title' => 'facility_book_access',
            ],
            [
                'id'    => 66,
                'title' => 'check_facility_access',
            ],
            [
                'id'    => 67,
                'title' => 'add_visitor_create',
            ],
            [
                'id'    => 68,
                'title' => 'add_visitor_edit',
            ],
            [
                'id'    => 69,
                'title' => 'add_visitor_show',
            ],
            [
                'id'    => 70,
                'title' => 'add_visitor_delete',
            ],
            [
                'id'    => 71,
                'title' => 'add_visitor_access',
            ],
            [
                'id'    => 72,
                'title' => 'gate_create',
            ],
            [
                'id'    => 73,
                'title' => 'gate_edit',
            ],
            [
                'id'    => 74,
                'title' => 'gate_show',
            ],
            [
                'id'    => 75,
                'title' => 'gate_delete',
            ],
            [
                'id'    => 76,
                'title' => 'gate_access',
            ],
            [
                'id'    => 77,
                'title' => 'history_create',
            ],
            [
                'id'    => 78,
                'title' => 'history_edit',
            ],
            [
                'id'    => 79,
                'title' => 'history_show',
            ],
            [
                'id'    => 80,
                'title' => 'history_delete',
            ],
            [
                'id'    => 81,
                'title' => 'history_access',
            ],
            [
                'id'    => 82,
                'title' => 'qr_create',
            ],
            [
                'id'    => 83,
                'title' => 'qr_edit',
            ],
            [
                'id'    => 84,
                'title' => 'qr_show',
            ],
            [
                'id'    => 85,
                'title' => 'qr_delete',
            ],
            [
                'id'    => 86,
                'title' => 'qr_access',
            ],
            [
                'id'    => 87,
                'title' => 'feedback_access',
            ],
            [
                'id'    => 88,
                'title' => 'add_defect_create',
            ],
            [
                'id'    => 89,
                'title' => 'add_defect_edit',
            ],
            [
                'id'    => 90,
                'title' => 'add_defect_show',
            ],
            [
                'id'    => 91,
                'title' => 'add_defect_delete',
            ],
            [
                'id'    => 92,
                'title' => 'add_defect_access',
            ],
            [
                'id'    => 93,
                'title' => 'status_control_create',
            ],
            [
                'id'    => 94,
                'title' => 'status_control_edit',
            ],
            [
                'id'    => 95,
                'title' => 'status_control_show',
            ],
            [
                'id'    => 96,
                'title' => 'status_control_delete',
            ],
            [
                'id'    => 97,
                'title' => 'status_control_access',
            ],
            [
                'id'    => 98,
                'title' => 'defect_category_create',
            ],
            [
                'id'    => 99,
                'title' => 'defect_category_edit',
            ],
            [
                'id'    => 100,
                'title' => 'defect_category_show',
            ],
            [
                'id'    => 101,
                'title' => 'defect_category_delete',
            ],
            [
                'id'    => 102,
                'title' => 'defect_category_access',
            ],
            [
                'id'    => 103,
                'title' => 'e_billing_access',
            ],
            [
                'id'    => 104,
                'title' => 'maintenance_access',
            ],
            [
                'id'    => 105,
                'title' => 'facility_fee_access',
            ],
            [
                'id'    => 106,
                'title' => 'maintenances_payment_create',
            ],
            [
                'id'    => 107,
                'title' => 'maintenances_payment_edit',
            ],
            [
                'id'    => 108,
                'title' => 'maintenances_payment_show',
            ],
            [
                'id'    => 109,
                'title' => 'maintenances_payment_delete',
            ],
            [
                'id'    => 110,
                'title' => 'maintenances_payment_access',
            ],
            [
                'id'    => 111,
                'title' => 'payment_method_create',
            ],
            [
                'id'    => 112,
                'title' => 'payment_method_edit',
            ],
            [
                'id'    => 113,
                'title' => 'payment_method_show',
            ],
            [
                'id'    => 114,
                'title' => 'payment_method_delete',
            ],
            [
                'id'    => 115,
                'title' => 'payment_method_access',
            ],
            [
                'id'    => 116,
                'title' => 'facility_payment_create',
            ],
            [
                'id'    => 117,
                'title' => 'facility_payment_edit',
            ],
            [
                'id'    => 118,
                'title' => 'facility_payment_show',
            ],
            [
                'id'    => 119,
                'title' => 'facility_payment_delete',
            ],
            [
                'id'    => 120,
                'title' => 'facility_payment_access',
            ],
            [
                'id'    => 121,
                'title' => 'notice_access',
            ],
            [
                'id'    => 122,
                'title' => 'notice_board_create',
            ],
            [
                'id'    => 123,
                'title' => 'notice_board_edit',
            ],
            [
                'id'    => 124,
                'title' => 'notice_board_show',
            ],
            [
                'id'    => 125,
                'title' => 'notice_board_delete',
            ],
            [
                'id'    => 126,
                'title' => 'notice_board_access',
            ],
            [
                'id'    => 127,
                'title' => 'event_access',
            ],
            [
                'id'    => 128,
                'title' => 'event_category_create',
            ],
            [
                'id'    => 129,
                'title' => 'event_category_edit',
            ],
            [
                'id'    => 130,
                'title' => 'event_category_show',
            ],
            [
                'id'    => 131,
                'title' => 'event_category_delete',
            ],
            [
                'id'    => 132,
                'title' => 'event_category_access',
            ],
            [
                'id'    => 133,
                'title' => 'event_control_create',
            ],
            [
                'id'    => 134,
                'title' => 'event_control_edit',
            ],
            [
                'id'    => 135,
                'title' => 'event_control_show',
            ],
            [
                'id'    => 136,
                'title' => 'event_control_delete',
            ],
            [
                'id'    => 137,
                'title' => 'event_control_access',
            ],
            [
                'id'    => 138,
                'title' => 'event_enroll_create',
            ],
            [
                'id'    => 139,
                'title' => 'event_enroll_edit',
            ],
            [
                'id'    => 140,
                'title' => 'event_enroll_show',
            ],
            [
                'id'    => 141,
                'title' => 'event_enroll_delete',
            ],
            [
                'id'    => 142,
                'title' => 'event_enroll_access',
            ],
            [
                'id'    => 143,
                'title' => 'add_feedback_create',
            ],
            [
                'id'    => 144,
                'title' => 'add_feedback_edit',
            ],
            [
                'id'    => 145,
                'title' => 'add_feedback_show',
            ],
            [
                'id'    => 146,
                'title' => 'add_feedback_delete',
            ],
            [
                'id'    => 147,
                'title' => 'add_feedback_access',
            ],
            [
                'id'    => 148,
                'title' => 'feedback_category_create',
            ],
            [
                'id'    => 149,
                'title' => 'feedback_category_edit',
            ],
            [
                'id'    => 150,
                'title' => 'feedback_category_show',
            ],
            [
                'id'    => 151,
                'title' => 'feedback_category_delete',
            ],
            [
                'id'    => 152,
                'title' => 'feedback_category_access',
            ],
            [
                'id'    => 153,
                'title' => 'mall_access',
            ],
            [
                'id'    => 154,
                'title' => 'reward_access',
            ],
            [
                'id'    => 155,
                'title' => 'merchant_access',
            ],
            [
                'id'    => 156,
                'title' => 'point_access',
            ],
            [
                'id'    => 157,
                'title' => 'acess_management_access',
            ],
            [
                'id'    => 158,
                'title' => 'form_access',
            ],
            [
                'id'    => 159,
                'title' => 'form_category_create',
            ],
            [
                'id'    => 160,
                'title' => 'form_category_edit',
            ],
            [
                'id'    => 161,
                'title' => 'form_category_show',
            ],
            [
                'id'    => 162,
                'title' => 'form_category_delete',
            ],
            [
                'id'    => 163,
                'title' => 'form_category_access',
            ],
            [
                'id'    => 164,
                'title' => 'location_create',
            ],
            [
                'id'    => 165,
                'title' => 'location_edit',
            ],
            [
                'id'    => 166,
                'title' => 'location_show',
            ],
            [
                'id'    => 167,
                'title' => 'location_delete',
            ],
            [
                'id'    => 168,
                'title' => 'location_access',
            ],
            [
                'id'    => 169,
                'title' => 'voucher_access',
            ],
            [
                'id'    => 170,
                'title' => 'membership_access',
            ],
            [
                'id'    => 171,
                'title' => 'item_access',
            ],
            [
                'id'    => 172,
                'title' => 'order_access',
            ],
            [
                'id'    => 173,
                'title' => 'report_access',
            ],
            [
                'id'    => 174,
                'title' => 'security_access',
            ],
            [
                'id'    => 175,
                'title' => 'system_setting_access',
            ],
            [
                'id'    => 176,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
