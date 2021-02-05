<?php

namespace Console\App\Commands\Can;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Base\UserCanCommand;
use Console\App\Models\User\Developer;

/**
 * Class DeveloperCanCommand
 * @package Console\App\Commands\Can
 */
class DeveloperCanCommand extends UserCanCommand
{
    protected $name = 'can:developer';
    protected $description = 'Show can developer do the skill';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->canUserDo(new Developer(), $input));

        return 0;
    }
}
