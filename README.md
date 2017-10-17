WBWHighchartsBundle
====================

[![Build Status](https://travis-ci.org/webeweb/WBWHighchartsBundle.svg?branch=master)](https://travis-ci.org/webeweb/WBWHighchartsBundle) [![Coverage Status](https://coveralls.io/repos/github/webeweb/WBWHighchartsBundle/badge.svg?branch=master)](https://coveralls.io/github/webeweb/WBWHighchartsBundle?branch=master) [![Latest Stable Version](https://poser.pugx.org/webeweb/highcharts-bundle/v/stable)](https://packagist.org/packages/webeweb/highcharts-bundle) [![Latest Unstable Version](https://poser.pugx.org/webeweb/highcharts-bundle/v/unstable)](https://packagist.org/packages/webeweb/highcharts-bundle) [![License](https://poser.pugx.org/webeweb/highcharts-bundle/license)](https://packagist.org/packages/webeweb/highcharts-bundle) [![composer.lock](https://poser.pugx.org/webeweb/highcharts-bundle/composerlock)](https://packagist.org/packages/webeweb/highcharts-bundle) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/682376ac-1bed-4e41-90f0-90a8a4b20f75/mini.png)](https://insight.sensiolabs.com/projects/682376ac-1bed-4e41-90f0-90a8a4b20f75)

`WBWHighchartsBundle` eases the use of highcharts to display rich graphs and charts in your Symfony2 application by providing Twig extensions and PHP objects to do the heavy lifting. The bundle include the excellent JS library [Highcharts](https://www.highcharts.com).

Dry out your chart code by writing it all in PHP !

---

## Installation

Edit `symfony/composer.json` file to add this bundle package:

```yml
"require": {
    ...
    "webeweb/highcharts-bundle": "1.2"
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

---

## License

WBWHighchartsBundle is released under the LGPL License. See the bundled [LICENSE](LICENSE) file for details.

Please note that the Highcharts JS library is **not** free for commercial use, see their
[FAQ](http://shop.highsoft.com/faq) for more details on what constitutes a non-commercial project or their
[product page](http://shop.highsoft.com/highcharts.html) for details on pricing.
