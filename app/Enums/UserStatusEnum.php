<?php

declare(strict_types=1);

namespace App\Enums;

enum UserStatusEnum: string
    {
        case USER_STATUS_1 = 'actif';
        case USER_STATUS_2 = 'inactif';
    }