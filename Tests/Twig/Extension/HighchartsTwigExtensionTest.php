<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\Twig\Extension;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\HighchartsChart;
use WBW\HighchartsBundle\API\HighchartsOptions;
use WBW\HighchartsBundle\Twig\Extension\HighchartsTwigExtension;

/**
 * Highcharts Twig extension test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\Wrapper
 * @version 5.0.14
 * @final
 */
final class HighchartsTwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the highchartsChartFunction() method.
	 */
	public function testHighchartsChartFunction() {

		$obj = new HighchartsTwigExtension();

		$cht = new HighchartsChart();
		$cht->newTitle()->setText("title");

		$res = "<script type=\"text/javascript\">\nHighcharts.chart('selector', {\"title\":{\"text\":\"title\"}});\n</script>\n";
		$this->assertEquals($res, $obj->highchartsChartFunction("selector", $cht), "The method highchartsChartFunction() does not return the expected string");
	}

	/**
	 * Tests the highchartsSetOptionsFunction() method.
	 */
	public function testHighchartsSetOptionsFunction() {

		$obj = new HighchartsTwigExtension();

		$opt = new HighchartsOptions();
		$opt->newGlobal();
		$opt->newLang();

		$res = "<script type=\"text/javascript\">\nHighcharts.setOptions({\"global\":[],\"lang\":[]});\n</script>\n";
		$this->assertEquals($res, $obj->highchartsSetOptionsFunction($opt), "The method highchartsSetOptionsFunction() does not return the expected string");
	}

}
