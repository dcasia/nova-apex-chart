<?php

namespace DigitalCreative\NovaApexChart\Formatter;

use JsonSerializable;

class BasicFormatter implements JsonSerializable
{
    /**
     * @var string
     */
    private $prefix;

    /**
     * @var string
     */
    private $suffix;

    public function __construct(string $prefix, string $suffix)
    {

        $this->prefix = $prefix;
        $this->suffix = $suffix;

    }

    public function jsonSerialize(): array
    {
        return [
            'prefix' => $this->prefix,
            'suffix' => $this->suffix,
        ];
    }
}
