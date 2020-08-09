<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts;

/**
 * Interface Extractor
 * @package Ekvio\Integration\Contracts
 */
interface Extractor
{
    /**
     * @param array $options
     * @return array
     */
    public function extract(array $options = []): array;
}