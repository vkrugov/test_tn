<?php

namespace Console\App\Models\User;

use Console\App\Enums\UserSkillMethod;
use Console\App\Models\Base\BaseUser;

/**
 * Class Developer
 * @package Console\App\Models\User
 */
class Developer extends BaseUser
{
    /**
     * @var string[]
     */
    protected $availableMethods = [
        UserSkillMethod::COMMUNICATE_WITH_MANAGER,
        UserSkillMethod::WRITE_CODE,
        UserSkillMethod::TEST_CODE,
    ];
}
