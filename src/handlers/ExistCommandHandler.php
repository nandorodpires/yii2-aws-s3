<?php

namespace nandorodpires\yii2\aws\s3\handlers;

use nandorodpires\yii2\aws\s3\base\handlers\Handler;
use nandorodpires\yii2\aws\s3\commands\ExistCommand;

/**
 * Class ExistCommandHandler
 *
 * @package nandorodpires\yii2\aws\s3\handlers
 */
final class ExistCommandHandler extends Handler
{
    /**
     * @param \nandorodpires\yii2\aws\s3\commands\ExistCommand $command
     *
     * @return bool
     */
    public function handle(ExistCommand $command): bool
    {
        return $this->s3Client->doesObjectExist(
            $command->getBucket(),
            $command->getFilename(),
            $command->getOptions()
        );
    }
}
