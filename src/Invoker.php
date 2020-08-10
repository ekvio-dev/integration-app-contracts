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
     * @param array $parameters
     */
    public function __invoke(array $parameters = []);

    /**
     * Get invoker name
     * @return string
     */
    public function name(): string;
}