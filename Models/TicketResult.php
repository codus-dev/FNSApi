<?php

namespace Codus\FNSApi\Models;

abstract class TicketResult
{
    protected function __construct(int $code, string $message = null)
    {
        $this->code = $code;
        $this->message = $message;
    }

    private $code;
    private $message;

    public function getCode()
    {
        return $this->code;
    }

    public function getMessage()
    {
        return $this->message;
    }
}