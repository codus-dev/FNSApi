<?php

namespace Codus\FNSApi\Requests;

final class CheckTicketRequest extends TicketRequest
{
    protected function getRequestElementName()
    {
        return 'CheckTicketRequest';
    }

    protected function getInfoElementName()
    {
        return 'CheckTicketInfo';
    }
}