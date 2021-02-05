<?php

namespace Console\App\Commands\User;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Base\BaseUserCommand;
use Console\App\Models\User\Designer;

/**
 * Class DesignerUserCommand
 * @package Console\App\Commands\user
 */
class DesignerUserCommand extends BaseUserCommand
{
    protected $name = 'user:designer';
    protected $description = 'What can designer do';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->getUserSkills(new Designer()));

        return 0;
    }
}
