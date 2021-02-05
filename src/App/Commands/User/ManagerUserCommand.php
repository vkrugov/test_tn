<?php

namespace Console\App\Commands\User;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Base\BaseUserCommand;
use Console\App\Models\User\Manager;

/**
 * Class ManagerUserCommand
 * @package Console\App\Commands\user
 */
class ManagerUserCommand extends BaseUserCommand
{
    protected $name = 'user:manager';
    protected $description = 'What can manager do';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->getUserSkills(new Manager()));

        return 0;
    }
}
