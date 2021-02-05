<?php

namespace Console\App\Commands\Can;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Console\App\Commands\Base\UserCanCommand;
use Console\App\Models\User\Designer;

/**
 * Class DesignerCanCommand
 * @package Console\App\Commands\Can
 */
class DesignerCanCommand extends UserCanCommand
{
    protected $name = 'can:designer';
    protected $description = 'Show can designer do the skill';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->canUserDo(new Designer(), $input));

        return 0;
    }
}
