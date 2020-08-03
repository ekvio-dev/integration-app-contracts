<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts;

/**
 * Interface Profiler
 * @package Ekvio\Integration\Contracts
 */
interface Profiler
{
    /**
     * @param string $message
     */
    public function profile(string $message): void;
}