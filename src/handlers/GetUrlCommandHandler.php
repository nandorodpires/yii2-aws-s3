<?php

namespace nandorodpires\yii2\aws\s3\handlers;

use nandorodpires\yii2\aws\s3\base\handlers\Handler;
use nandorodpires\yii2\aws\s3\commands\GetUrlCommand;

/**
 * Class GetUrlCommandHandler
 *
 * @package nandorodpires\yii2\aws\s3\handlers
 */
final class GetUrlCommandHandler extends Handler
{
    /**
     * @param \nandorodpires\yii2\aws\s3\commands\GetUrlCommand $command
     *
     * @return string
     */
    public function handle(GetUrlCommand $command): string
    {
        return $this->s3Client->getObjectUrl($command->getBucket(), $command->getFilename());
    }
}
