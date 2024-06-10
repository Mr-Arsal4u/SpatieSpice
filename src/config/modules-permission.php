<?php

use App\Contracts\IPermissionModules;
use \App\Contracts\IUserPermissions;

return [
    IPermissionModules::DASHBOARD_MODULE => [
        IUserPermissions::DASHBOARD_SHOW,
        IUserPermissions::APPLICATION_CHART,
        IUserPermissions::DEPARTMENT_CHART,
        IUserPermissions::PARTNER_APPLICATION_CHART,
        // IPermissionModules::DASHBOARD_CARDS_MODULE => [
        //     IUserPermissions::TOTAL_APPLIED_APPS_CARD,
        //     IUserPermissions::TOTAL_INCOMPLETE_APPS_CARD,
        //     IUserPermissions::TOTAL_IN_PROGRESS_APPS_CARD,
        //     IUserPermissions::TOTAL_APPROVED_APPS_CARD,
        //     IUserPermissions::TOTAL_REJECTED_APPS_CARD,
        //     IUserPermissions::TOTAL_DISBURSED_AMOUNT_CARD,
        //     IUserPermissions::TOTAL_CUSTOMERS_CARD,
        //     IUserPermissions::TOTAL_PARTNERS_CARD,
        //     IUserPermissions::TOTAL_COMMISSION_CARD
        // ]
    ],
  

];
