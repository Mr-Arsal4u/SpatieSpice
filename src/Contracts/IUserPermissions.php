<?php

namespace App\Contracts;

interface IUserPermissions
{
    //PURPOSE_OF_FINANCE Module Privileges
    public const LOV_MANAGEMENT = 'lov_management';

    public const PURPOSE_OF_FINANCE_CREATE = 'create_purpose_of_finance';
    public const PURPOSE_OF_FINANCE_DELETE = 'delete_purpose_of_finance';
    public const PURPOSE_OF_FINANCE_EDIT = 'edit_purpose_of_finance';
    public const PURPOSE_OF_FINANCE_SHOW = 'show_purpose_of_finance';
    public const PURPOSE_OF_FINANCE_INDEX = 'list_purpose_of_finance';

    //SOURCE_OF_REVENUE Module Privileges
    public const SOURCE_OF_REVENUE_CREATE = 'create_source_of_revenue';
    public const SOURCE_OF_REVENUE_DELETE = 'delete_source_of_revenue';
    public const SOURCE_OF_REVENUE_EDIT = 'edit_source_of_revenue';
    public const SOURCE_OF_REVENUE_SHOW = 'show_source_of_revenue';
    public const SOURCE_OF_REVENUE_INDEX = 'list_source_of_revenue';

    //Employee Module Privileges
    public const EMPLOYEE_CREATE = 'create_employee';
    public const EMPLOYEE_DELETE = 'delete_employee';
    public const EMPLOYEE_EDIT = 'edit_employee';
    public const EMPLOYEE_SHOW = 'show_employee';
    public const EMPLOYEE_INDEX = 'list_employee';
    public const EMPLOYEE_PERMISSION_ASSIGN = 'assign_employee_permission';
    public const EMPLOYEE_PERMISSION_REVOKE = 'revoke_employee_permission';

    //Customer Module Privileges
    public const CUSTOMER_CREATE = 'create_customer';
    public const CUSTOMER_DELETE = 'delete_customer';
    public const CUSTOMER_EDIT = 'edit_customer';
    public const CUSTOMER_SHOW = 'show_customer';
    public const CUSTOMER_INDEX = 'list_customer';

    //Department Module Privileges
    public const DEPARTMENT_CREATE = 'create_department';
    public const DEPARTMENT_DELETE = 'delete_department';
    public const DEPARTMENT_EDIT = 'edit_department';
    public const DEPARTMENT_SHOW = 'show_department';
    public const DEPARTMENT_INDEX = 'list_department';


    //Reports Module Privileges
    public const REPORT_SHOW = 'show_report';

    //Dashboard Module Privileges
    public const DASHBOARD_SHOW = 'show_dashboard';

    public const SETTING = 'setting_management';

    //Permission Module Privileges
    public const PERMISSION_INDEX = 'list_permission';
    public const PERMISSION_CREATE = 'create_permission';
    public const PERMISSION_EDIT = 'edit_permission';
    public const PERMISSION_DELETE = 'delete_permission';
    public const PERMISSION_SHOW = 'show_permission';

    //Roles Module Privileges
    public const ROLE_INDEX = 'list_role';
    public const ROLE_CREATE = 'create_role';
    public const ROLE_EDIT = 'edit_role';
    public const ROLE_DELETE = 'delete_role';
    public const ROLE_SHOW = 'show_role';
    public const ROLE_PERMISSION_ASSIGN = 'assign_role_permission';
    public const ROLE_PERMISSION_REVOKE = 'revoke_role_permission';

    //
    public const CUSTOMER_MANAGEMENT = 'customer_management';
    public const LEADS = 'leads_list';
    public const CUSTOMER_LIST = 'customer_list';

    public const LOAN_MANAGEMENT = 'loan_management';
    public const LIST_APPLICATION = 'list_application';
    public const VIEW_APPLICATION = 'view_application';
    public const APPROVE_LOAN_AMOUNT = 'approve_loan_amount';
    public const APPROVE_APPLICATION = 'approve_application';
    public const REJECT_APPLICATION = 'reject_application';
    public const VIEW_APPLICATION_DOCUMENTS = 'view_application_documents';
    public const REQUEST_APPLICATION_DOCUMENTS = 'request_application_documents';

    public const ACTIVITY_LOGS = 'list_activity_logs';

    public const LANDING_PAGE_MANAGEMENT = 'landing_page_management';
    public const EDIT_LANDING_PAGE = 'edit_landing_page';
    public const PREVIEW_LANDING_PAGE = 'preview_landing_page';

    public const HOME_PAGE_MANAGEMENT = 'home_page_management';
    public const EDIT_HOME_PAGE = 'edit_home_page';
    public const PREVIEW_HOME_PAGE = 'preview_home_page';

    //Partner Management Module
    public const PARTNER_MANAGEMENT = 'partner_management';
    public const LIST_PARTNER = 'list_partner';
    public const CREATE_PARTNER = 'create_partner';
    public const EDIT_PARTNER = 'edit_partner';
    public const DELETE_PARTNER = 'delete_partner';
    public const LIST_PARTNER_COMMISSION = 'list_partner_commission';
    public const LIST_PARTNER_ADMIN = 'list_partner_admin';
    public const CREATE_PARTNER_ADMIN = 'create_partner_admin';
    public const EDIT_PARTNER_ADMIN = 'edit_partner_admin';
    public const DELETE_PARTNER_ADMIN = 'delete_partner_admin';

    //QuickFinancing Module
    public const PRODUCT_MANAGEMENT = 'product_management';
    public const LIST_PRODUCT_SETTING = 'list_product_setting';
    public const PRODUCT_VERIFICATION_METHODS = 'product_verification_methods';
    public const APPLICATION_STEPS = 'application_steps';
    public const TERMS_CONDITIONS = 'terms_&_conditions';
    public const APPLICATION_FEE = 'application_fee';
    public const API_REQUEST_DURATION = 'api_request_duration';
    public const DEPARTMENT_PERMISSIONS = 'department_permission';


    public const LIST_DOCUMENT = 'list_document';
    public const CREATE_DOCUMENT = 'create_document';
    public const EDIT_DOCUMENT = 'edit_document';
    public const DELETE_DOCUMENT = 'delete_document';

    public const LIST_PROCESSING_FEE_SLAB = 'list_processing_fee_slab';
    public const CREATE_PROCESSING_FEE_SLAB = 'create_processing_fee_slab';
    public const EDIT_PROCESSING_FEE_SLAB = 'edit_processing_fee_slab';
    public const DELETE_PROCESSING_FEE_SLAB = 'delete_processing_fee_slab';

    //System Logs
    public const LIST_SYSTEM_LOGS = 'list_system_logs';

    //new permission
    public const APPLICATION_CHART = 'application_chart';
    public const DEPARTMENT_CHART = 'department_chart';
    public const PARTNER_APPLICATION_CHART = 'partner_application_chart';

    //API Management Module
    public const API_MANAGEMENT = 'api_management';
    public const LIST_API = 'list_api';
    public const CREATE_API = 'create_api';
    public const EDIT_API = 'edit_api';
    public const DELETE_API = 'delete_api';
    public const UPDATE_API_STATUS = 'update_api_status';
    public const LIST_PARTNER_API = 'list_partner_api';
    public const ENABLE_PARTNER_API = 'enable_partner_api';

    //Application board Module
    public const BOARD = 'show_board';
    public const CREATE_CHAT = 'create_chat';
    public const DEPARTMENT_ASSIGNMENT = 'department_assignment';
    public const USER_ASSIGNMENT = 'user_assignment';

    public const SUBMIT_REVENUE = 'submit_revenue';

    //Product Management Module
    public const CREATE_PRODUCT = 'create_product';
    public const EDIT_PRODUCT = 'edit_product';
    public const DELETE_PRODUCT = 'delete_product';
    public const SHOW_PRODUCT = 'show_product';
    public const LIST_PRODUCT = 'list_product';
    public const UPDATE_PRODUCT_STATUS = 'update_product_status';
    public const LIST_PRODUCT_ADMIN = 'list_product_admin';
    public const CREATE_PRODUCT_ADMIN = 'create_product_admin';
    public const EDIT_PRODUCT_ADMIN = 'edit_product_admin';
    public const DELETE_PRODUCT_ADMIN = 'delete_product_admin';

    //Dashboard Cards Modules
    public const TOTAL_APPLIED_APPS_CARD = 'total_applied_apps_card';
    public const TOTAL_INCOMPLETE_APPS_CARD = 'total_incomplete_apps_card';
    public const TOTAL_IN_PROGRESS_APPS_CARD = 'total_in_progress_apps_card';
    public const TOTAL_APPROVED_APPS_CARD = 'total_approved_apps_card';
    public const TOTAL_REJECTED_APPS_CARD = 'total_rejected_apps_card';
    public const TOTAL_DISBURSED_AMOUNT_CARD = 'total_disbursed_amount_card';
    public const TOTAL_CUSTOMERS_CARD = 'total_customers_card';
    public const TOTAL_PARTNERS_CARD = 'total_partners_card';
    public const TOTAL_COMMISSION_CARD = 'total_commission_card';

    public const COMPLIANCE_DASHBOARD = 'compliance_dashboard';
}
