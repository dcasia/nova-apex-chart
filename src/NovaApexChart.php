<?php

namespace DigitalCreative\NovaApexChart;

use Laravel\Nova\Card;

class NovaApexChart extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    public function __construct($component = null)
    {
        parent::__construct($component);
        $this->withMeta([
            'options' => (object)[],
            'type' => 'bar'
        ]);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-apex-chart';
    }

    public function series(array $series): self
    {
        return $this->withMeta([ 'series' => $series ]);
    }

    public function type(string $type): self
    {
        return $this->withMeta([ 'type' => $type ]);
    }

    public function options(array $options): self
    {
        return $this->withMeta([ 'options' => (object)$options ]);
    }
}
