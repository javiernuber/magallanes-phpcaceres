<?php
namespace Task;

use Mage\Task\BuiltIn\Symfony2\SymfonyAbstractTask;

class DoctrineSchemaUpdate extends SymfonyAbstractTask
{
    public function getName()
    {
        return 'Doctrine - Updating database';
    }

    public function run()
    {
        $result = $this->runCommandRemote($this->getAppPath() . " doctrine:schema:update --force");
        if ($result === false) {
            $result = $this->runCommandRemote($this->getAppPath() . " doctrine:schema:create --force");
        }
        return $result;
    }
}