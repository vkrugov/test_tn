<?php

namespace Console\App\Models\User;

use Console\App\Enums\UserSkillMethod;
use Console\App\Models\Base\BaseUser;

/**
 * Class Manager
 * @package Console\App\Models\User
 */
class Manager extends BaseUser
{
    /**
     * @var string[]
     */
    protected $availableMethods = [
        UserSkillMethod::SET_TASK,
    ];
}
