<?php
/**
 * hyperf_server
 *
 * @ClassName CalculatorServiceInterface
 * @Author Administrator
 * @Date 2021-11-04 18:07 星期四
 * @Version 1.0
 * @Description
 */


namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService
 */
interface CalculatorServiceInterface
{
    public function sum(int $a, int $b): int;
}
