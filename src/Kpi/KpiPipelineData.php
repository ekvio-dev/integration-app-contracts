<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts\Kpi;

/**
 * Interface KpiPipelineData
 * @package Ekvio\Integration\Contracts\Kpi
 */
interface KpiPipelineData
{
    /**
     * @param KpiData[] $data
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