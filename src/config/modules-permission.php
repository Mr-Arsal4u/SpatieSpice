<?php

use App\Contracts\IPermissionModules;
use \App\Contracts\IUserPermissions;

return [
    IPermissionModules::USERS_MODULE => [
        IUserPermissions::USERS_SHOW,
        IUserPermissions::USERS_CREATE,
        IUserPermissions::USERS_EDIT,
        IUserPermissions::USERS_DELETE,
    ],

    IPermissionModules::POSTS_MODULE => [
        IUserPermissions::POSTS_SHOW,
        IUserPermissions::POSTS_CREATE,
        IUserPermissions::POSTS_EDIT,
        IUserPermissions::POSTS_DELETE,
    ],

];
