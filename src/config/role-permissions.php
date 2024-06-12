<?php


use App\Contracts\IRole;
use App\Contracts\IUserPermissions;
use App\Contracts\IPermissionModules;


return [
    'roles-set' => [
        IRole::SUPER_ADMIN => 'Super Admin',
        IRole::PARTNER_ADMIN => 'Partner Admin',
        IRole::PRODUCT_ADMIN => 'Product Admin',
    ],
    'permissions-set' => [
        IUserPermissions::PERMISSION_INDEX => 'List Permission',
        IUserPermissions::PERMISSION_CREATE => 'Create Permission',
        IUserPermissions::PERMISSION_DELETE => 'Delete Permission',
        IUserPermissions::PERMISSION_EDIT => 'Edit Permission',
        IUserPermissions::PERMISSION_SHOW => 'Show Permission',

        IUserPermissions::BOARD => 'Board',
        IUserPermissions::APPLICATION_CHART => 'Application Chart',
        IUserPermissions::DEPARTMENT_CHART => 'Department Chart',
        IUserPermissions::PARTNER_APPLICATION_CHART => 'Partner Application Chart',

        IUserPermissions::ROLE_INDEX => 'List Role',
        IUserPermissions::ROLE_CREATE => 'Create Role',
        IUserPermissions::ROLE_DELETE => 'Delete Role',
        IUserPermissions::ROLE_EDIT => 'Edit Role',
        IUserPermissions::ROLE_SHOW => 'Show Role',
        IUserPermissions::ROLE_PERMISSION_ASSIGN => 'Assign Role Permission',
        IUserPermissions::ROLE_PERMISSION_REVOKE => 'Revoke Role Permission',

        IUserPermissions::LOV_MANAGEMENT => 'lov_management',
        IUserPermissions::PURPOSE_OF_FINANCE_CREATE => 'create_purpose_of_finance',
        IUserPermissions::PURPOSE_OF_FINANCE_DELETE => 'delete_purpose_of_finance',
        IUserPermissions::PURPOSE_OF_FINANCE_EDIT => 'edit_purpose_of_finance',
        IUserPermissions::PURPOSE_OF_FINANCE_SHOW => 'show_purpose_of_finance',
        IUserPermissions::PURPOSE_OF_FINANCE_INDEX => 'list_purpose_of_finance',

        //SOURCE_OF_REVENUE Module Privileges
        IUserPermissions::SOURCE_OF_REVENUE_CREATE => 'create_source_of_revenue',
        IUserPermissions::SOURCE_OF_REVENUE_DELETE => 'delete_source_of_revenue',
        IUserPermissions::SOURCE_OF_REVENUE_EDIT => 'edit_source_of_revenue',
        IUserPermissions::SOURCE_OF_REVENUE_SHOW => 'show_source_of_revenue',
        IUserPermissions::SOURCE_OF_REVENUE_INDEX => 'list_source_of_revenue',

        IUserPermissions::SETTING => 'setting',
        IUserPermissions::EMPLOYEE_CREATE => 'Create Employee',
        IUserPermissions::EMPLOYEE_EDIT => 'Edit Employee',
        IUserPermissions::EMPLOYEE_DELETE => 'Delete Employee',
        IUserPermissions::EMPLOYEE_SHOW => 'Show Employee',
        IUserPermissions::EMPLOYEE_INDEX => 'List Employee',
        IUserPermissions::EMPLOYEE_PERMISSION_ASSIGN => 'Assign Employee Permission',
        IUserPermissions::EMPLOYEE_PERMISSION_REVOKE => 'Revoke Employee Permission',

        IUserPermissions::CUSTOMER_CREATE => 'Create Customer',
        IUserPermissions::CUSTOMER_EDIT => 'Edit Customer',
        IUserPermissions::CUSTOMER_DELETE => 'Delete Customer',
        IUserPermissions::CUSTOMER_SHOW => 'Show Customer',
        IUserPermissions::CUSTOMER_INDEX => 'List Customer',

        IUserPermissions::DEPARTMENT_CREATE => 'Create Department',
        IUserPermissions::DEPARTMENT_EDIT => 'Edit Department',
        IUserPermissions::DEPARTMENT_DELETE => 'Delete Department',
        IUserPermissions::DEPARTMENT_SHOW => 'Show Department',
        IUserPermissions::DEPARTMENT_INDEX => 'List Department',

        IUserPermissions::REPORT_SHOW => 'Show Report',
        IUserPermissions::DASHBOARD_SHOW => 'Show Dashboard',

        //
        IUserPermissions::CUSTOMER_MANAGEMENT => 'customer_management',
        IUserPermissions::LEADS => 'leads',
        IUserPermissions::CUSTOMER_LIST => 'customer_list',

        IUserPermissions::LOAN_MANAGEMENT => 'loan_management',
        IUserPermissions::API_MANAGEMENT => 'api_management',
        IUserPermissions::ACTIVITY_LOGS => 'activity_logs',
        IUserPermissions::LANDING_PAGE_MANAGEMENT => 'landing_page_management',

        IUserPermissions::PARTNER_MANAGEMENT => 'partner_management',
        IUserPermissions::LIST_PARTNER => 'list_partner',
        IUserPermissions::CREATE_PARTNER => 'create_partner',
        IUserPermissions::EDIT_PARTNER => 'edit_partner',
        IUserPermissions::DELETE_PARTNER => 'delete_partner',
        IUserPermissions::LIST_PARTNER_COMMISSION => 'list_partner_commission',

        IUserPermissions::PRODUCT_MANAGEMENT => 'product_management',
        IUserPermissions::LIST_PRODUCT_SETTING => 'list_product_setting',
        IUserPermissions::LIST_DOCUMENT => 'list_document',
        IUserPermissions::CREATE_DOCUMENT => 'create_document',
        IUserPermissions::EDIT_DOCUMENT => 'edit_document',
        IUserPermissions::DELETE_DOCUMENT => 'delete_document',

        IUserPermissions::LIST_PROCESSING_FEE_SLAB => 'list_document',
        IUserPermissions::CREATE_PROCESSING_FEE_SLAB => 'create_document',
        IUserPermissions::EDIT_PROCESSING_FEE_SLAB => 'edit_document',
        IUserPermissions::DELETE_PROCESSING_FEE_SLAB => 'delete_document',

        IUserPermissions::LIST_API => 'list_api',
        IUserPermissions::CREATE_API => 'create_api',
        IUserPermissions::EDIT_API => 'edit_api',
        IUserPermissions::DELETE_API => 'delete_api',
        IUserPermissions::LIST_PARTNER_API => 'list_partner_api',

        IUserPermissions::LIST_SYSTEM_LOGS => 'list_system_logs',

        IUserPermissions::SUBMIT_REVENUE => 'submit_revenue',

        IUserPermissions::CREATE_PRODUCT => 'create_product',
        IUserPermissions::EDIT_PRODUCT => 'edit_product',
        IUserPermissions::DELETE_PRODUCT => 'delete_product',
        IUserPermissions::LIST_PRODUCT => 'list_product',
        IUserPermissions::UPDATE_PRODUCT_STATUS => 'update_product_status',
        IUserPermissions::LIST_PRODUCT_ADMIN => 'list_product_admin',
        IUserPermissions::CREATE_PRODUCT_ADMIN => 'create_product_admin',
        IUserPermissions::EDIT_PRODUCT_ADMIN => 'edit_product_admin',
        IUserPermissions::DELETE_PRODUCT_ADMIN => 'delete_product_admin',

        IUserPermissions::TOTAL_APPLIED_APPS_CARD => 'total_applied_apps_card',
        IUserPermissions::TOTAL_INCOMPLETE_APPS_CARD => 'total_incomplete_apps_card',
        IUserPermissions::TOTAL_IN_PROGRESS_APPS_CARD => 'total_in_progress_apps_card',
        IUserPermissions::TOTAL_APPROVED_APPS_CARD => 'total_approved_apps_card',
        IUserPermissions::TOTAL_REJECTED_APPS_CARD => 'total_rejected_apps_card',
        IUserPermissions::TOTAL_DISBURSED_AMOUNT_CARD => 'total_disbursed_amount_card',
        IUserPermissions::TOTAL_CUSTOMERS_CARD => 'total_customers_card',
        IUserPermissions::TOTAL_PARTNERS_CARD => 'total_partners_card',
        IUserPermissions::TOTAL_COMMISSION_CARD => 'total_commission_card',

    ],
    'module-permission-set' => [
        IRole::SUPER_ADMIN => config('modules-permission'),
        IRole::PRODUCT_ADMIN => [
            IPermissionModules::DASHBOARD_MODULE => [
                IUserPermissions::DASHBOARD_SHOW,
                IUserPermissions::APPLICATION_CHART,
                IUserPermissions::DEPARTMENT_CHART,
                IUserPermissions::PARTNER_APPLICATION_CHART,
                IPermissionModules::DASHBOARD_CARDS_MODULE => [
                    IUserPermissions::TOTAL_APPLIED_APPS_CARD,
                    IUserPermissions::TOTAL_INCOMPLETE_APPS_CARD,
                    IUserPermissions::TOTAL_IN_PROGRESS_APPS_CARD,
                    IUserPermissions::TOTAL_APPROVED_APPS_CARD,
                    IUserPermissions::TOTAL_REJECTED_APPS_CARD,
                    IUserPermissions::TOTAL_DISBURSED_AMOUNT_CARD,
                    IUserPermissions::TOTAL_CUSTOMERS_CARD,
                    IUserPermissions::TOTAL_PARTNERS_CARD,
                    IUserPermissions::TOTAL_COMMISSION_CARD
                ]
            ],
            IPermissionModules::PRODUCT_MANAGEMENT_MODULE => [
                IUserPermissions::PRODUCT_MANAGEMENT,
                IPermissionModules::DOCUMENT_MODULE => [
                    IUserPermissions::LIST_DOCUMENT,
                    IUserPermissions::CREATE_DOCUMENT,
                    IUserPermissions::EDIT_DOCUMENT,
                    IUserPermissions::DELETE_DOCUMENT,
                ],
                IPermissionModules::PRODUCT_SETTING_MODULE => [
                    IUserPermissions::LIST_PRODUCT_SETTING,
                    IPermissionModules::PROCESSING_FEE_SLAB_MODULE => [
                        IUserPermissions::LIST_PROCESSING_FEE_SLAB,
                        IUserPermissions::CREATE_PROCESSING_FEE_SLAB,
                        IUserPermissions::EDIT_PROCESSING_FEE_SLAB,
                        IUserPermissions::DELETE_PROCESSING_FEE_SLAB,
                    ],
                    IPermissionModules::PRODUCT_VERIFICATION_METHODS_MODULE => [
                        IUserPermissions::PRODUCT_VERIFICATION_METHODS,
                    ],
                    IPermissionModules::APPLICATION_STEPS_MODULE => [
                        IUserPermissions::APPLICATION_STEPS,
                    ],
                    IPermissionModules::TERMS_CONDITIONS_MODULE => [
                        IUserPermissions::TERMS_CONDITIONS,
                    ],
                    IPermissionModules::FEE_SETTING_MODULE => [
                        IUserPermissions::APPLICATION_FEE,
                    ],
                    IPermissionModules::API_REQUEST_DURATION_MODULE => [
                        IUserPermissions::API_REQUEST_DURATION,
                    ],
                    IPermissionModules::DEPARTMENT_PERMISSION_MODULE => [
                        IUserPermissions::DEPARTMENT_PERMISSIONS,
                    ],
                ],
            ],
        ],
    ],
];
