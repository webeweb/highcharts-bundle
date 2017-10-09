WBWHighchartsBundle
====================

[![Build Status](https://travis-ci.org/webeweb/WBWHighchartsBundle.svg?branch=master)](https://travis-ci.org/webeweb/WBWHighchartsBundle) [![Latest Stable Version](https://poser.pugx.org/webeweb/highcharts-bundle/v/stable)](https://packagist.org/packages/webeweb/highcharts-bundle) [![Latest Unstable Version](https://poser.pugx.org/webeweb/highcharts-bundle/v/unstable)](https://packagist.org/packages/webeweb/highcharts-bundle) [![License](https://poser.pugx.org/webeweb/highcharts-bundle/license)](https://packagist.org/packages/webeweb/highcharts-bundle)

`WBWHighchartsBundle` eases the use of highcharts to display rich graphs and charts in your Symfony2 application by providing Twig extensions and PHP objects to do the heavy lifting. The bundle include the excellent JS library [Highcharts](https://www.highcharts.com).

Dry out your chart code by writing it all in PHP !

---

## Installation

Edit `symfony/composer.json` file to add this bundle package:

```yml
"require": {
    ...
    "webeweb/highcharts-bundle": "dev-master"
},
```

Run `php composer.phar update webeweb/highcharts-bundle`

Then, add the bundle into `symfony/app/AppKernel.php`:

```php
<?php
    public function registerBundles()
    {
        $bundles = array(
            ...
            new WBW\HighcartsBundleBundle\WBWHighchartsBundle(),
        );

        ...

        return $bundles;
    }
```

Run `php bin/console assets:install`

---

## Usage

In your controller ...

```php

	// Prepare the data.
	$data = [["name" => "Female", "y" => 25 ], ["name" => "Male", "y" => 25], ["name" => "Unknown", "y" => 50]];

	// Initialize the series.
	$series = [["colorByPoint" => true, "data" => $data, "name" => "your_custom_name"]];

	// Initialize the chart.
	$chart = new HighchartsChart;
	$chart->newChart()->setType("pie");
	$chart->newPlotOptions()->newPie()
		->setAllowPointSelect(true)
		->setCursor("pointer")
		->setShowInLegend(true)
		->newDataLabels()->setEnabled(true);
	$chart->setSeries($series);
	$chart->newTitle()->setText("your_custom_test");
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

---

## License

WBWHighchartsBundle is released under the LGPL License. See the bundled [LICENSE](LICENSE) file for details.

Please note that the Highcharts JS library is **not** free for commercial use, see their
[FAQ](http://shop.highsoft.com/faq) for more details on what constitutes a non-commercial project or their
[product page](http://shop.highsoft.com/highcharts.html) for details on pricing.
