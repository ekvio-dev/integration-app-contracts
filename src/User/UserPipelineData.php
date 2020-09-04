<?php
declare(strict_types=1);

namespace Ekvio\Integration\Contracts\User;

/**
 * Interface UserPipelineData
 * @package Ekvio\Integration\Contracts\User
 */
interface UserPipelineData
{
    /**
     * @param UserData[] $usersData
     * @return $this
     */
    public function change(array $usersData): self;

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
}