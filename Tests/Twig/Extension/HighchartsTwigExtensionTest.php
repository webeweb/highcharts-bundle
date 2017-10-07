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

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\HighchartsChart;
use WBW\HighchartsBundle\API\HighchartsOptions;
use WBW\HighchartsBundle\Exception\HighchartsFileNotFoundException;
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

		$res = "<script type=\"text/javascript\">\nHighcharts.chart('selector', {\"title\":{\"text\":\"title\"}});\n</script>";
		$this->assertEquals($res, $obj->highchartsChartFunction("selector", $cht), "The method highchartsChartFunction() does not return the expected string");
	}

	/**
	 * Tests the highchartsScriptFunction() method.
	 */
	public function testHighchartsScriptFunction() {

		$obj = new HighchartsTwigExtension();

		try {
			$obj->highchartsScriptFunction("inexistant-script");
		} catch (Exception $ex) {
			$this->assertInstanceOf(HighchartsFileNotFoundException::class, $ex, "The method highchartsScript() does not throw the expected exception");
			$this->assertEquals("The file \"code/inexistant-script.js\" was not found", $ex->getMessage(), "The method getMessage() does not return the expected string");
		}

		$res1 = "<script src=\"/bundles/wbwhighcharts/code/highcharts.js\" type=\"text/javascript\"></script>";
		$this->assertEquals($res1, $obj->highchartsScriptFunction("highcharts"), "The method highchartsScriptFunction() does not return the expected string");

		$res2 = "<script src=\"/bundles/wbwhighcharts/code/modules/exporting.js\" type=\"text/javascript\"></script>";
		$this->assertEquals($res2, $obj->highchartsScriptFunction("modules/exporting"), "The method highchartsScriptFunction() does not return the expected string");

		$res2_1 = "<script src=\"/bundles/wbwhighcharts/code/modules/exporting.js\" type=\"text/javascript\"></script>";
		$this->assertEquals($res2_1, $obj->highchartsScriptFunction("exporting", "code/modules"), "The method highchartsScriptFunction() does not return the expected string");

		$res3 = "<script src=\"/bundles/wbwhighcharts/code/themes/dark-unica.js\" type=\"text/javascript\"></script>";
		$this->assertEquals($res3, $obj->highchartsScriptFunction("themes/dark-unica"), "The method highchartsScriptFunction() does not return the expected string");

		$res3_1 = "<script src=\"/bundles/wbwhighcharts/code/themes/dark-unica.js\" type=\"text/javascript\"></script>";
		$this->assertEquals($res3_1, $obj->highchartsScriptFunction("dark-unica", "code/themes"), "The method highchartsScriptFunction() does not return the expected string");
	}

	/**
	 * Tests the highchartsSetOptionsFunction() method.
	 */
	public function testHighchartsSetOptionsFunction() {

		$obj = new HighchartsTwigExtension();

		$opt = new HighchartsOptions();
		$opt->newGlobal();
		$opt->newLang();

		$res = "<script type=\"text/javascript\">\nHighcharts.setOptions({\"global\":[],\"lang\":[]});\n</script>";
		$this->assertEquals($res, $obj->highchartsSetOptionsFunction($opt), "The method highchartsSetOptionsFunction() does not return the expected string");
	}

}
