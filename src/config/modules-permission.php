<?php

use App\Contracts\IUserPermissions;
use App\Contracts\IPermissionModules;




return [
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
        IUserPermissions::LIST_PRODUCT,
        IUserPermissions::CREATE_PRODUCT,
        IUserPermissions::EDIT_PRODUCT,
        IUserPermissions::DELETE_PRODUCT,
        IUserPermissions::UPDATE_PRODUCT_STATUS,
        IUserPermissions::LIST_PRODUCT_ADMIN,
        IUserPermissions::CREATE_PRODUCT_ADMIN,
        IUserPermissions::EDIT_PRODUCT_ADMIN,
        IUserPermissions::DELETE_PRODUCT_ADMIN,
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
];