<?php

namespace Console\App\Commands\Base;

use Symfony\Component\Console\Command\Command;

/**
 * Class BaseCommand
 * @package Console\App\Commands\Base
 */
abstract class BaseCommand extends Command
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var string
     */
    protected $help = 'Command doesn\'t need arguments';

    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this->setName($this->name)
            ->setDescription($this->description)
            ->setHelp($this->help);
    }
}
