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

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-apex-chart';
    }

    public static function createBasicSeries(string $name, array $data)
    {
        return [
            'name' => $name,
            'data' => $data,
        ];
    }

    public static function createDataOnlySeries(array $data)
    {
        return [
            'data' => $data,
        ];
    }

    public static function createCustomSeries(array $series)
    {
        return [
            'series' => $series,
        ];
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
        return $this->withMeta([ 'options' => $options ]);
    }

}
