<?php

namespace Codus\FNSApi\Responses;

use Codus\FNSApi\Models\GetTicketResult;

final class GetTicketResponse extends TicketResponse
{
    public static function create(string $processingStatus, GetTicketResult $result = null)
    {
        return new GetTicketResponse($processingStatus, $result);
    }

    protected final function __construct(string $processingStatus, GetTicketResult $result = null)
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