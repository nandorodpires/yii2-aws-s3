<?php

namespace nandorodpires\yii2\aws\s3\handlers;

use nandorodpires\yii2\aws\s3\base\handlers\Handler;
use nandorodpires\yii2\aws\s3\commands\GetPresignedUrlCommand;

/**
 * Class GetPresignedUrlCommandHandler
 *
 * @package nandorodpires\yii2\aws\s3\handlers
 */
final class GetPresignedUrlCommandHandler extends Handler
{
    /**
     * @param \nandorodpires\yii2\aws\s3\commands\GetPresignedUrlCommand $command
     *
     * @return string
     */
    public function handle(GetPresignedUrlCommand $command): string
    {
        $awsCommand = $this->s3Client->getCommand('GetObject', $command->getArgs());
        $request = $this->s3Client->createPresignedRequest($awsCommand, $command->getExpiration());

        return (string)$request->getUri();
    }
}
