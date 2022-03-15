highcharts-bundle
=================

[![Build Status](https://img.shields.io/github/workflow/status/webeweb/highcharts-bundle/build?style=flat-square)](https://github.com/webeweb/highcharts-bundle/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/webeweb/highcharts-bundle/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/highcharts-bundle?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/highcharts-bundle/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/highcharts-bundle/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/highcharts-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/highcharts-bundle)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/webeweb/highcharts-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/highcharts-bundle)
[![License](https://img.shields.io/packagist/l/webeweb/highcharts-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/highcharts-bundle)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/highcharts-bundle)

> IMPORTANT NOTICE: This package is no longer maintained.

`highcharts-bundle` eases the use of highcharts to display rich graphs and
charts in your Symfony 2 application by providing Twig extensions and PHP
objects to do the heavy lifting. The bundle include the excellent JS library
[Highcharts](https://www.highcharts.com).

Dry out your chart code by writing it all in PHP !

Includes:

- [Highcharts 5.14.0](https://www.highcharts.com/)

If you like this package, pay me a beer (or a coffee)
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/highcharts-bundle.svg?style=flat-square)](http://php.net)
[![Symfony](https://img.shields.io/badge/symfony-%5E2.6%7C%5E3.0%7C%5E4.0-brightness.svg?style=flat-square)](https://symfony.com)

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/highcharts-bundle
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
    public function registerBundles() {
        $bundles = [
            // ...
            new WBW\Bundle\HighchartsBundle\HighchartsBundle(),
        ];

        // ...

        return $bundles;
    }
```

Once the bundle is added then do:

```bash
$ php bin/console assets:install
```

## Usage

In your controller ...

```php
    // Prepare the data.
    $data = [["name" => "Female", "y" => 25 ], ["name" => "Male", "y" => 25], ["name" => "Unknown", "y" => 50]];

    // Initialize the series.
    $series = [["colorByPoint" => true, "data" => $data, "name" => "Gender distribution"]];

    // Initialize the chart.
    $chart = new HighchartsChart;
    $chart->newChart()->setType("pie");
    $chart->newPlotOptions()->newPie()
        ->setAllowPointSelect(true)
        ->setCursor("pointer")
        ->setShowInLegend(true)
        ->newDataLabels()->setEnabled(true);
    $chart->setSeries($series);
    $chart->newTitle()->setText("Gender distribution");
    $chart->newTooltip()->setPointFormat("{series.name}: <b>{point.percentage:.1f}%</b>");

    return $this->render('::your_template.html.twig', [
        'chart' => $chart
    ]);
```

In your template ...

```html
    <div id="Container"></div>
    {{ highchartsScript('highcharts') }}
    {{ highchartsScript('modules/exporting') }}
    {{ highchartsChart('Container', chart) }}
```

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/highcharts-bundle.git
$ cd highcharts-bundle
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

## License

`highcharts-bundle` is released under the MIT License. See the bundled [LICENSE](LICENSE)
file for details.

Please note that the Highcharts JS library is **not** free for commercial use,
see their [FAQ](http://shop.highsoft.com/faq) for more details on what constitutes
a non-commercial project or their [product page](http://shop.highsoft.com/highcharts.html)
for details on pricing.

## Donate

If you like this work, please consider donating at
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)
