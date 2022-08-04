<?php

namespace nandorodpires\yii2\aws\s3\interfaces;

use nandorodpires\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Service
 *
 * @package nandorodpires\yii2\aws\s3\interfaces
 */
interface Service
{
    /**
     * @param \nandorodpires\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);

    /**
     * @param string $commandClass
     *
     * @return \nandorodpires\yii2\aws\s3\interfaces\commands\Command
     */
    public function create(string $commandClass): Command;
}
