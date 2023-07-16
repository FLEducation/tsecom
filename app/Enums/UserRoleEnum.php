<?php

declare(strict_types=1);

namespace App\Enums;

enum UserRoleEnum: string
    {
        case USER_ROLE_0 = 'super admin';
        case USER_ROLE_1 = 'admin';
        case USER_ROLE_2 = 'seller';
        case USER_ROLE_3 = 'user';
    }