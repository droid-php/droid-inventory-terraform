<?php

namespace Droid\Inventory\Terraform;

use Droid\Inventory\Terraform\Command\GenerateCommand;

class DroidPlugin
{
    public function __construct($droid)
    {
        $this->droid = $droid;
    }

    public function getCommands()
    {
        return array(
            new GenerateCommand()
        );
    }
}
