<?php

namespace Codus\FNSApi\Requests;

final class AuthRequest
{
    public final function __construct(string $token)
    {
        $this->token = $token;
    }

    private $token;

    public function __toString()
    {
        return '<tns:AuthRequest xmlns:tns="urn://x-artefacts-gnivc-ru/ais3/kkt/AuthService/types/1.0"><tns:AuthAppInfo><tns:MasterToken>' . $this->token . '</tns:MasterToken></tns:AuthAppInfo></tns:AuthRequest>';
    }
}