<?php

namespace nandorodpires\yii2\aws\s3\interfaces\commands;

/**
 * Interface HasBucket
 *
 * @package nandorodpires\yii2\aws\s3\interfaces\commands
 */
interface HasBucket
{
    /**
     * @param string $name
     */
    public function inBucket(string $name);
}
