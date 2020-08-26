<?php

namespace Codus\FNSApi\Models;

use Carbon\Carbon;

final class TemporaryToken
{
    public static function create(string $token, Carbon $expireTime)
    {
        return new TemporaryToken($token, $expireTime);
    }

    private final function __construct(string $token, Carbon $expireTime)
    {
        $this->token = $token;
        $this->expireTime = $expireTime;
    }

    private $token;
    private $expireTime;

    public function getToken()
    {
        return $this->token;
    }

    public function getExpireTime()
    {
        return $this->expireTime;
    }
}