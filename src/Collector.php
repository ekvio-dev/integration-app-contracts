<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts;

/**
 * Interface Collector
 * @package Ekvio\Integration\Contracts
 */
interface Collector
{
    public function collect(array $options = []);
}