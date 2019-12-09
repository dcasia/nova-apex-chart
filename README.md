# Nova Apex Chart

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digital-creative/nova-apex-chart)](https://packagist.org/packages/digital-creative/nova-apex-chart)
[![Total Downloads](https://img.shields.io/packagist/dt/digital-creative/nova-apex-chart)](https://packagist.org/packages/digital-creative/nova-apex-chart)
[![License](https://img.shields.io/packagist/l/digital-creative/nova-apex-chart)](https://github.com/dcasia/nova-apex-chart/blob/master/LICENSE)

A Laravel Nova ApexCharts Component 

[ApexCharts Documentation](https://apexcharts.com/docs/series/#)

![SliderFilter in Action](https://raw.githubusercontent.com/dcasia/nova-apex-chart/master/screenshot.png)

# Installation

You can install the package via composer:

```
composer require digital-creative/nova-apex-chart
```

## Basic Usage

```php
class ExampleNovaResource extends Resource
{

    public function cards(Request $request)
        {
    
            return [
                (new NovaApexChart())
                    ->type('bar')
                    ->series(
                        [
                            new DataOnlySeries([ 400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380 ])
                        ])
                    ->options([
                        'xaxis' => [
                            'categories' => [ 'Jan', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct' ]
                        ],
                        'tooltip' => [
                            'y' => [
                                'formatter' => new BasicFormatter('$', 'USD')
                            ]
                        ]
                    ])
            ];
        }

}
```

Create basic series by calling
```php
use DigitalCreative\NovaApexChart\BasicSeries;
new BasicSeries('title', [ 400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380 ]);
```

Create data only series by calling
```php
use DigitalCreative\NovaApexChart\DataOnlySeries;
new DataOnlySeries([ 400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380 ]);
```

Create custom formatter
```php
use DigitalCreative\NovaApexChart\formatter\BasicFormatter;
new BasicFormatter('$', 'USD');
```

## License

The MIT License (MIT). Please see [License File](https://raw.githubusercontent.com/dcasia/nova-slider-filter/master/LICENSE) for more information.
