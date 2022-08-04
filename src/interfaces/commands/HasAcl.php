<?php

namespace nandorodpires\yii2\aws\s3\interfaces\commands;

/**
 * Interface HasAcl
 *
 * @package nandorodpires\yii2\aws\s3\interfaces\commands
 */
interface HasAcl
{
    /**
     * @param string $acl
     */
    public function withAcl(string $acl);
}
