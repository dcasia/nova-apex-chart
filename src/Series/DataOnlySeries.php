<?php

namespace DigitalCreative\NovaApexChart\Series;

use Closure;
use JsonSerializable;

class DataOnlySeries implements JsonSerializable
{
    /**
     * @var array|Closure
     */
    private $data;

    /**
     * DataOnlySeries constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = is_callable($data) ? call_user_func($data) : $data;
    }

    public function jsonSerialize()
    {
        return  [
            'data' => $this->data,
        ];
    }
}
