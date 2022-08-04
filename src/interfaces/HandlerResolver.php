<?php

namespace nandorodpires\yii2\aws\s3\interfaces;

use nandorodpires\yii2\aws\s3\interfaces\commands\Command;
use nandorodpires\yii2\aws\s3\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package nandorodpires\yii2\aws\s3\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \nandorodpires\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return \nandorodpires\yii2\aws\s3\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
