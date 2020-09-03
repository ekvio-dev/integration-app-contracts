<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts\User;

/**
 * Interface UserData
 * @package Ekvio\Integration\Invoker
 */
interface UserData
{
    /**
     * @return string
     */
    public function key(): string;
    /**
     * @return array
     */
    public function data(): array;
}