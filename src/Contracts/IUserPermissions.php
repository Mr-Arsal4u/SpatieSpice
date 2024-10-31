<?php

namespace App\Contracts;

interface IUserPermissions
{

    public const USERS_SHOW = 'users_show';
    public const USERS_CREATE = 'users_create';
    public const USERS_EDIT = 'users_edit';
    public const USERS_DELETE = 'users_delete';

    public const POSTS_SHOW = 'posts_show';
    public const POSTS_CREATE = 'posts_create';
    public const POSTS_EDIT = 'posts_edit';
    public const POSTS_DELETE = 'posts_delete';

}
