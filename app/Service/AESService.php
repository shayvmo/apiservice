<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Service;

use phpseclib3\Crypt\AES;
use phpseclib3\Crypt\Random;

class AESService
{
    public function encrypt(string $iv = '', string $key = ''): string
    {
        $aes = new AES('ctr');
        $aes->setIV($iv ?: Random::string(16));
        $aes->setKey($key ?: Random::string(16));
        return $aes->encrypt('hello');
    }

    public function decrypt(string $text, string $iv, string $key): string
    {
        $aes = new AES('ctr');
        $aes->setIV($iv);
        $aes->setKey($key);
        return $aes->decrypt($text);
    }
}
