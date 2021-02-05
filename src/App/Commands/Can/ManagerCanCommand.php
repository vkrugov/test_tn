<?php

namespace Console\App\Commands\Can;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Base\UserCanCommand;
use Console\App\Models\User\Manager;

/**
 * Class ManagerCanCommand
 * @package Console\App\Commands\Can
 */
class ManagerCanCommand extends UserCanCommand
{
    protected $name = 'can:manager';
    protected $description = 'Show can manager do the skill';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->canUserDo(new Manager(), $input));

        return 0;
    }
}
