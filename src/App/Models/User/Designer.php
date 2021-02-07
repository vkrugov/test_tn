<?php

namespace Console\App\Models\User;

use Console\App\Enums\UserSkillMethod;
use Console\App\Models\Base\BaseItUser;

/**
 * Class Designer
 * @package Console\App\Models\User
 */
class Designer extends BaseItUser
{
    const DRAW = 'draw';

    /**
     * @var string[]
     */
    protected $availableMethods = [
        self::DRAW,
        UserSkillMethod::COMMUNICATE_WITH_MANAGER,
    ];

    /**
     * @var array
     */
    protected $personalSkills = [
        self::DRAW => 'can draw',
    ];
}
