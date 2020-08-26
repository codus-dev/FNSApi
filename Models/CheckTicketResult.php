<?php

namespace Codus\FNSApi\Models;

final class CheckTicketResult extends TicketResult
{
    public static function create(int $code, string $message)
    {
        return new CheckTicketResult($code, $message);
    }

    protected final function __construct(int $code, string $message)
    {
        parent::__construct($code, $message);
    }
}