<?php

namespace Console\App\Models\User;

use Console\App\Enums\UserSkillMethod;
use Console\App\Models\Base\BaseUser;

/**
 * Class Tester
 * @package Console\App\Models\User
 */
class Tester extends BaseUser
{
    /**
     * @var string[]
     */
    protected $availableMethods = [
        UserSkillMethod::COMMUNICATE_WITH_MANAGER,
        UserSkillMethod::SET_TASK,
        UserSkillMethod::TEST_CODE,
    ];
}