<?php

namespace Console\App\Models\User;

use Console\App\Enums\UserSkillMethod;
use Console\App\Models\Base\BaseItUser;

/**
 * Class Manager
 * @package Console\App\Models\User
 */
class Manager extends BaseItUser
{
    /**
     * @var string[]
     */
    protected $availableSkillNames = [
        UserSkillMethod::SET_TASK,
    ];
}
