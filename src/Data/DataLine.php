<?php

namespace Ekvio\Integration\Contracts\Data;

/**
 * Interface DataLine
 * @package Ekvio\Integration\Contracts\Data
 */
interface DataLine
{
    /**
     * @param Data[] $data
     * @return $this
     */
    public function change(array $data): self;

    /**
     * @param string $key
     * @param array $data
     */
    public function addSource(string $key, array $data): void;

    /**
     * @param array $log
     */
    public function addLog(array $log): void;

    /**
     * @return array
     */
    public function data(): array;

    /**
     * @return array
     */
    public function logs(): array;

    /**
     * @return array
     */
    public function sources(): array;

    /**
     * @param string $key
     * @return array
     */
    public function dataFromSource(string $key): array;

    /**
     * @param string $key
     * @return string
     */
    public function sourceName(string $key): string;
}