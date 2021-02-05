<?php

namespace Console\App\Commands\Can;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Base\UserCanCommand;
use Console\App\Models\User\Tester;

/**
 * Class TesterCanCommand
 * @package Console\App\Commands\Can
 */
class TesterCanCommand extends UserCanCommand
{
    protected $name = 'can:tester';
    protected $description = 'Show can tester do the skill';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->canUserDo(new Tester(), $input));

        return 0;
    }
}
