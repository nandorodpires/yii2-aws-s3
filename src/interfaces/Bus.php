<?php

namespace nandorodpires\yii2\aws\s3\interfaces;

use nandorodpires\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package nandorodpires\yii2\aws\s3\interfaces
 */
interface Bus
{
    /**
     * @param \nandorodpires\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
