<?php

namespace Console\App\Commands\User;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Base\BaseUserCommand;
use Console\App\Models\User\Tester;

/**
 * Class TesterUserCommand
 * @package Console\App\Commands\user
 */
class TesterUserCommand extends BaseUserCommand
{
    protected $name = 'user:tester';
    protected $description = 'What can tester do';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->getUserSkills(new Tester()));

        return 0;
    }
}
