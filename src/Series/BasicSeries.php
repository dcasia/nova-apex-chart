<?php

namespace DigitalCreative\NovaApexChart\Series;

use Closure;
use JsonSerializable;

class BasicSeries implements JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array|Closure
     */
    private $data;

    /**
     * BasicSeries constructor.
     *
     * @param string $name
     * @param $data
     */
    public function __construct(string $name, $data)
    {

        $this->name = $name;
        $this->data = is_callable($data) ? call_user_func($data) : $data;

    }

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'data' => $this->data,
        ];
    }
}
