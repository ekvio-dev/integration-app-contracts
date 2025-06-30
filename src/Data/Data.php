<?php

namespace Ekvio\Integration\Contracts\Data;

/**
 * Interface Data
 * @package Ekvio\Integration\Invoker
 */
interface Data
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