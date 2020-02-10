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

    /**
     * @var bool
     */
    private $showComma;

    public function __construct(string $prefix, string $suffix, bool $showComma = false)
    {

        $this->prefix = $prefix;
        $this->suffix = $suffix;
        $this->showComma = $showComma;

    }

    public function jsonSerialize(): array
    {
        return [
            'prefix' => $this->prefix,
            'suffix' => $this->suffix,
            'showComma' => $this->showComma,
        ];
    }
}
