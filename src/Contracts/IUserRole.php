<?php

namespace App\Contracts;

interface IUserRole
{
    public const SUPER_ADMIN = 'super_admin';
    public const ADMIN = 'admin';
    public const USER = 'user';
}
