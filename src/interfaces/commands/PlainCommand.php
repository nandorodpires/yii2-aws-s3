<?php

namespace nandorodpires\yii2\aws\s3\interfaces\commands;

/**
 * Interface PlainCommand
 *
 * @package nandorodpires\yii2\aws\s3\interfaces\commands
 */
interface PlainCommand extends Command
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return array
     */
    public function toArgs(): array;
}
