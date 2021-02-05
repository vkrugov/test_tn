<?php

namespace Console\App\Commands\User;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Base\BaseUserCommand;
use Console\App\Models\User\Developer;

/**
 * Class DeveloperUserCommand
 * @package Console\App\Commands\user
 */
class DeveloperUserCommand extends BaseUserCommand
{
    protected $name = 'user:developer';
    protected $description = 'What can developer do';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->getUserSkills(new Developer()));

        return 0;
    }
}
