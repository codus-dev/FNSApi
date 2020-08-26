<?php

namespace Codus\FNSApi\Responses;

use Codus\FNSApi\Models\CheckTicketResult;

final class CheckTicketResponse extends TicketResponse
{
    public static function create(string $processingStatus, CheckTicketResult $result = null)
    {
        return new CheckTicketResponse($processingStatus, $result);
    }

    protected final function __construct(string $processingStatus, CheckTicketResult $result = null)
    {
        parent::__construct($processingStatus);
        $this->result = $result;
    }

    private $result;

    public function getResult()
    {
        return $this->result;
    }
}