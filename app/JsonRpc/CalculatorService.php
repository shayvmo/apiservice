<?php
/**
 * hyperf_server
 *
 * @ClassName CalculatorService
 * @Author Administrator
 * @Date 2021-11-04 18:06 星期四
 * @Version 1.0
 * @Description
 */

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="jsonrpc-http")
 */
class CalculatorService implements CalculatorServiceInterface
{
    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }
}
