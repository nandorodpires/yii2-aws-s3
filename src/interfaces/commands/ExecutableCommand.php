<?php

namespace nandorodpires\yii2\aws\s3\interfaces\commands;

/**
 * Interface ExecutableCommand
 *
 * @package nandorodpires\yii2\aws\s3\interfaces\commands
 */
interface ExecutableCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute();
}
