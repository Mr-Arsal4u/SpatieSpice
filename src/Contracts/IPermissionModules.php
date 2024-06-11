<?php

namespace App\Contracts;

interface IPermissionModules
{
    public const DASHBOARD_MODULE = 'dashboard_module';
    public const CUSTOMER_MANAGEMENT_MODULE = 'customer_management_module';
    public const LOV_MANAGEMENT_MODULE = 'lov_module';
    public const DEPARTMENT_MODULE = 'department_module';
    public const EMPLOYEE_MODULE = 'employee_module';
    public const SOURCE_OF_REVENUE_MODULE = 'source_of_revenue_module';
    public const PURPOSE_OF_FINANCE_MODULE = 'purpose_of_finance_module';
    public const REPORTS_MODULE = 'reports_module';
    public const PERMISSION_MODULE = 'permissions_module';
    public const ROLE_MODULE = 'roles_module';
    public const LOAN_MANAGEMENT_MODULE = 'loan_module';
    public const PARTNER_MANAGEMENT_MODULE = 'partner_module';
    public const PARTNER_ADMIN_MANAGEMENT_MODULE = 'partner_admin_module';
    public const PRODUCT_MANAGEMENT_MODULE = 'product_management_module';
    public const API_MANAGEMENT_MODULE = 'api_module';
    public const SYSTEM_LOGS_MODULE = 'system_logs_module';
    public const ACTIVITY_LOGS_MODULE = 'activity_logs_module';
    public const LANDING_PAGE_MANAGEMENT_MODULE = 'landing_page_module';
    public const LANDING_PAGE_ACTIONS_MODULE = 'landing_page_actions_module';
    public const HOME_PAGE_MANAGEMENT_MODULE = 'home_page_module';
    public const HOME_PAGE_ACTIONS_MODULE = 'home_page_actions_module';
    public const SETTING_MODULE = 'setting_module';
    public const DOCUMENT_MODULE = 'document_module';
    public const PROCESSING_FEE_SLAB_MODULE = "processing_fee_slab_module";
    public const APPLICATION_STEPS_MODULE = "application_steps_module";
    public const TERMS_CONDITIONS_MODULE = "terms_conditions_module";
    public const PRODUCT_VERIFICATION_METHODS_MODULE = "product_verification_methods_module";
    public const FEE_SETTING_MODULE = "fee_setting_module";
    public const API_REQUEST_DURATION_MODULE = "api_request_duration_module";
    public const DEPARTMENT_PERMISSION_MODULE = "department_permission_module";

    public const PRODUCT_SETTING_MODULE = 'product_setting_module';
    public const LOAN_APPLICATION_MODULE = 'loan_application_module';
    public const VIEW_LOAN_APPLICATION_MODULE = 'view_loan_application_module';
    public const APPLICATION_BOARD_MODULE = 'application_board_module';
    public const BOARD_ACTIONS_MODULE = 'board_actions_module';
    public const LEAD_MODULE = 'lead_module';
    public const CUSTOMER_MODULE = 'customer_module';
    public const DASHBOARD_CARDS_MODULE = 'dashboard_cards_module';
}
