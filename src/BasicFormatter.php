<?php

namespace DigitalCreative\NovaApexChart;

use JsonSerializable;
use Laravel\Nova\Card;

class BasicFormatter implements JsonSerializable {


    /**
     * @var string
     */
    private string $prefix;
    private string $suffix;

    public function __construct(string $prefix, string $suffix)
    {
        $this->prefix = $prefix;
        $this->suffix = $suffix;
    }

    public function jsonSerialize()
    {
        return  [
            'prefix' => $this->prefix,
            'suffix' => $this->suffix,
        ];
    }
}