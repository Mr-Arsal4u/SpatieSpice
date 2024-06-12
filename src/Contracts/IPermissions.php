<?php

namespace App\Contracts;


interface IPermissions
{
    public const DASHBOARD_INDEX = 'show_dashboard';
    public const DASHBOARD_USERS = 'show_dashbaoard_users';

    public const USER_MANAGEMENT_INDEX = 'show_user_management';
    public const USER_MANAGEMENT_CREATE = 'create_user';
    public const USER_MANAGEMENT_EDIT = 'edit_user';
    public const USER_MANAGEMENT_DELETE = 'delete_user';
    public const USER_MANAGEMENT_Role = 'role_list';
    public const USER_MANAGEMENT_ROLE_CREATE = 'create_role';
    public const USER_MANAGEMENT_ROLE_EDIT = 'edit_role';
    public const USER_MANAGEMENT_ROLE_DELETE = 'delete_role';

    public const USER_MANAGEMENT_PERMISSION = 'permission_list';
    public const USER_MANAGEMENT_PERMISSION_Assign = 'assign_permission';

    public const AUTHENTICATION_LOGS_INDEX = 'show_authentication_logs';
    public const AUTHENTICATION_LOGS_DELETE = 'delete_authentication_log';

    public const POSTS_INDEX = 'show_posts';
    public const POSTS_CREATE = 'create_post';
    public const POSTS_EDIT = 'edit_post';
    public const POSTS_DELETE = 'delete_post';

    public const CATEGORIES_INDEX = 'show_categories';
    public const CATEGORIES_CREATE = 'create_category';
    public const CATEGORIES_EDIT = 'edit_category';
    public const CATEGORIES_DELETE = 'delete_category';

    public const COMMENTS_INDEX = 'show_comments';
    public const COMMENTS_CREATE = 'create_comment';
    public const COMMENTS_EDIT = 'edit_comment';
    public const COMMENTS_DELETE = 'delete_comment';

    public const JOBS_INDEX = 'show_jobs';
    public const CREATE_JOB = 'create_job';
    public const DELETE_JOB = 'delete_job';

    public const VISITOR_LOGS_INDEX = 'show_visitor_logs';
    public const VISITOR_LOGS_DELETE = 'delete_visitor_logs';

    public const MESSAGES_INDEX = 'show_messages';
    public const MESSAGES_CREATE = 'create_message';
    public const MESSAGES_EDIT = 'edit_message';
    public const MESSAGES_DELETE = 'delete_message';

    public const SYSTEM_INDEX = 'show_settings';
    public const SYSTEM_LOGS = 'show_system_logs';
    public const SYSTEM_DASHBOARD = 'show_system_dashboard';
}
