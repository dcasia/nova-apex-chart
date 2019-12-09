<?php

namespace DigitalCreative\NovaApexChart;

use JsonSerializable;
use Laravel\Nova\Card;

class DataOnlySeries implements JsonSerializable {


    private $data;

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