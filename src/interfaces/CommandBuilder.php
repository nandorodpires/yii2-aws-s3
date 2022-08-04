<?php

namespace nandorodpires\yii2\aws\s3\interfaces;

use nandorodpires\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package nandorodpires\yii2\aws\s3\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \nandorodpires\yii2\aws\s3\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
