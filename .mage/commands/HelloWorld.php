<?php
// .mage/commands/HelloWorld.php
namespace Command;

use Mage\Command\AbstractCommand;
use Mage\Console;

class HelloWorld extends AbstractCommand
{
    public function run()
    {
        Console::output('Hello world', 1, 2);
        return 0;
    }
}