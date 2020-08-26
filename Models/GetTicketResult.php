<?php

namespace Codus\FNSApi\Models;

final class GetTicketResult extends TicketResult
{
    public static function create(int $code, string $message = null, $ticket = null)
    {
        return new GetTicketResult($code, $message, $ticket);
    }

    protected final function __construct(int $code, string $message = null, $ticket = null)
    {
        parent::__construct($code, $message);
        $this->ticket = $ticket;
    }

    private $ticket;

    public function getTicket()
    {
        return $this->ticket;
    }
}