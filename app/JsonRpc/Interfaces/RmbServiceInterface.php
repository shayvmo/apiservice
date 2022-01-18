<?php


declare(strict_types=1);

namespace App\JsonRpc\Interfaces;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService
 */
interface RmbServiceInterface
{
    public function convert($amount): array;
}
