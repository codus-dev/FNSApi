<?php

namespace Codus\FNSApi\Models;

use Carbon\Carbon;

final class Ticket
{
    public function __construct(int $type, Carbon $time, int $sum, int $fn, int $fd, int $fpd)
    {
        $this->type = $type;
        $this->time = $time;
        $this->sum = $sum;
        $this->fn = $fn;
        $this->fd = $fd;
        $this->fpd = $fpd;
    }

    public $type;
    public $time;
    public $sum;
    public $fn;
    public $fd;
    public $fpd;
}