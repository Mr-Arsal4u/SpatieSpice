<?php

use App\Contracts\IUserRole;
use App\Contracts\IUserPermissions;

return [
    'roles-set' => [
        IUserRole::SUPER_ADMIN => 'Super Admin',
        IUserRole::ADMIN => 'Admin',
        IUserRole::USER => 'User',

    ],
    'permission-set' => [
        IUserPermissions::USERS_SHOW => 'Show Users',
        IUserPermissions::USERS_CREATE => 'Create Users',
        IUserPermissions::USERS_EDIT => 'Edit Users',
        IUserPermissions::USERS_DELETE => 'Delete Users',
        IUserPermissions::POSTS_SHOW => 'Show Posts',
        IUserPermissions::POSTS_CREATE => 'Create Posts',
        IUserPermissions::POSTS_EDIT => 'Edit Posts',
        IUserPermissions::POSTS_DELETE => 'Delete Posts',
    ],

    'module-permission-set' => [
        IUserRole::SUPER_ADMIN => config('modules-permission'),
    ]
];
