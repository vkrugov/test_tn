<?php

namespace Console\App\Commands\Base;

use Console\App\Models\Base\BaseUser;

/**
 * Class BaseUserCommand
 * @package Console\App\Commands\base
 */
abstract class BaseUserCommand extends BaseCommand
{
    /**
     * @param BaseUser $user
     * @return array
     */
    protected function getUserSkills(BaseUser $user): array
    {
        $skills = $user->getSkills();

        return !empty($skills) ? $skills : ['This User can\'t do anything'];
    }
}
