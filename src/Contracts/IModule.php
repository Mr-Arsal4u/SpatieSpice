<?php

namespace App\Contracts;

interface IModule
{
    public const DASHBOARD_MODULE = 'dashboard';
    public const USER_MANAGEMENT = 'user_management';

    public const AUTHENTICATION_LOGS_MODULE = 'authentication_logs';
    public const POSTS_MODULE = 'posts';
    public const REQUEST_MODULE = 'request';
    public const CATEGORIES_MODULE = 'categories';
    public const COMMENTS_MODULE = 'comments';
    public const JOBS_MODULE = 'jobs';
    public const VISITOR_LOGS_MODULE = 'visitor_logs';
    public const MESSAGES_MODULE = 'messages';
    public const SYSTEM_MODULE = 'settings';

    public const ROLE_MODULE = 'role';
    public const PERMISSION_MODULE = 'permission';
    public const USER_MODULE = 'user';

    public const SYSTEM_MODULE_LOGS = 'system_logs';
    public const SYSTEM_MODULE_DASHBAORD = 'system_dashbaord';
}
