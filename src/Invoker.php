<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts;

/**
 * Interface Invokable
 * @package Ekvio\Integration\Contracts
 */
interface Invoker
{
    /**
     * Invoke task
     * @param array $arguments
     */
    public function __invoke(array $arguments = []);

    /**
     * Get invoker name
     * @return string
     */
    public function name(): string;
}