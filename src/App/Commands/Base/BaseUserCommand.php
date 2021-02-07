<?php

namespace Console\App\Commands\Base;

use Console\App\Models\Base\BaseItUser;

/**
 * Class BaseUserCommand
 * @package Console\App\Commands\base
 */
abstract class BaseUserCommand extends BaseCommand
{
    /**
     * @param BaseItUser $user
     * @return array
     */
    protected function getUserSkills(BaseItUser $user): array
    {
        $skills = $user->getSkills();

        return !empty($skills) ? $skills : ['This User can\'t do anything'];
    }
}
