<?php

namespace Console\App\Commands\Base;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Console\App\Models\Base\BaseItUser;

/**
 * Class UserCanCommand
 * @package Console\App\Commands\Base
 */
abstract class UserCanCommand extends BaseCommand
{
    /**
     * Const for argument of skill
     */
    const SKILL_ARGUMENT = 'skill';

    /**
     * @var string
     */
    protected $help = 'Use user skill as argument';

    /**
     * Configures the current command.
     */
    protected function configure()
    {
        parent::configure();

        $this->addArgument(static::SKILL_ARGUMENT, InputArgument::REQUIRED, 'Pass the user skill.');
    }

    /**
     * @param BaseItUser $user
     * @param InputInterface $input
     * @return string
     */
    protected function canUserDo(BaseItUser $user, InputInterface $input): string
    {
        return $user->canDo($input->getArgument(static::SKILL_ARGUMENT)) ? 'true' : 'false';
    }
}
