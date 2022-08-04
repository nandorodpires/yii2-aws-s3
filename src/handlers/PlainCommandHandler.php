<?php

namespace nandorodpires\yii2\aws\s3\handlers;

use Aws\CommandInterface as AwsCommand;
use nandorodpires\yii2\aws\s3\base\handlers\Handler;
use nandorodpires\yii2\aws\s3\interfaces\commands\Asynchronous;
use nandorodpires\yii2\aws\s3\interfaces\commands\PlainCommand;

/**
 * Class PlainCommandHandler
 *
 * @package nandorodpires\yii2\aws\s3\handlers
 */
final class PlainCommandHandler extends Handler
{
    /**
     * @param \nandorodpires\yii2\aws\s3\interfaces\commands\PlainCommand $command
     *
     * @return \Aws\ResultInterface|\GuzzleHttp\Promise\PromiseInterface
     */
    public function handle(PlainCommand $command)
    {
        $awsCommand = $this->transformToAwsCommand($command);

        /** @var \GuzzleHttp\Promise\PromiseInterface $promise */
        $promise = $this->s3Client->executeAsync($awsCommand);

        return $this->commandIsAsync($command) ? $promise : $promise->wait();
    }

    /**
     * @param \nandorodpires\yii2\aws\s3\interfaces\commands\PlainCommand $command
     *
     * @return bool
     */
    protected function commandIsAsync(PlainCommand $command): bool
    {
        return $command instanceof Asynchronous && $command->isAsync();
    }

    /**
     * @param \nandorodpires\yii2\aws\s3\interfaces\commands\PlainCommand $command
     *
     * @return \Aws\CommandInterface
     */
    protected function transformToAwsCommand(PlainCommand $command): AwsCommand
    {
        $args = array_filter($command->toArgs());

        return $this->s3Client->getCommand($command->getName(), $args);
    }
}
