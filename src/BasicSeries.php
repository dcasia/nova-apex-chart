<?php

namespace DigitalCreative\NovaApexChart;

use JsonSerializable;
use Laravel\Nova\Card;

class BasicSeries implements JsonSerializable {


    /**
     * @var string
     */
    private string $name;
    private $data;

    public function __construct(string $name, $data)
    {
        $this->name = $name;
        $this->data = is_callable($data) ? call_user_func($data) : $data;
    }

    public function jsonSerialize()
    {
        return  [
            'name' => $this->name,
            'data' => $this->data,
        ];
    }
}