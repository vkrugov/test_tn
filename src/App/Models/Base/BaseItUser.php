<?php

namespace Console\App\Models\Base;

use App\Traits\HasSkill;
use Console\App\Enums\UserSkillMethod;

/**
 * Class BaseUser
 * @package Console\App\Models\Base
 */
abstract class BaseItUser
{
    use HasSkill;

    /**
     * BaseUser constructor.
     */
    public function __construct()
    {
        $this->setSubjectSkills();
    }

    /**
     * @return array
     */
    public function getDefaultSkills(): array
    {
        return [
            UserSkillMethod::WRITE_CODE => 'code writing',
            UserSkillMethod::TEST_CODE => 'code testing',
            UserSkillMethod::COMMUNICATE_WITH_MANAGER => 'communication with manager',
            UserSkillMethod::SET_TASK => 'set task',
        ];
    }
}
