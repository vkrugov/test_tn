<?php

namespace Console\App\Models\User;

use Console\App\Enums\UserSkillMethod;
use Console\App\Models\Base\BaseItUser;

/**
 * Class Developer
 * @package Console\App\Models\User
 */
class Developer extends BaseItUser
{
    /**
     * @var string[]
     */
    protected $availableSkillNames = [
        UserSkillMethod::COMMUNICATE_WITH_MANAGER,
        UserSkillMethod::WRITE_CODE,
        UserSkillMethod::TEST_CODE,
    ];
}
