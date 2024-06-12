<?php

namespace App\Contracts;

interface IRole
{
    public const SUPER_ADMIN = 'super_admin';
    // public const ADMIN       =   'admin';
    public const CUSTOMER = 'customer';
    public const PARTNER_ADMIN = 'partner_admin';
    public const PRODUCT_ADMIN = 'product_admin';
}
