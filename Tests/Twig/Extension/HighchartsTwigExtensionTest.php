<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\Twig\Extension;

use Exception;
use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\HighchartsBundle\API\HighchartsChart;
use WBW\Bundle\HighchartsBundle\API\HighchartsOptions;
use WBW\Bundle\HighchartsBundle\Twig\Extension\HighchartsTwigExtension;
use WBW\Library\Core\Exception\File\FileNotFoundException;

/**
 * Highcharts Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\Wrapper
 * @final
 */
final class HighchartsTwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new HighchartsTwigExtension(getcwd(), "");

		$this->assertCount(3, $obj->getFunctions(), "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $obj->getFunctions()[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("highchartsChart", $obj->getFunctions()[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "highchartsChartFunction"], $obj->getFunctions()[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $obj->getFunctions()[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $obj->getFunctions()[1], "The method getFunctions() does not return the expected object on item 1");
		$this->assertEquals("highchartsScript", $obj->getFunctions()[1]->getName(), "The method getName() does not return the expected name on item 1");
		$this->assertEquals([$obj, "highchartsScriptFunction"], $obj->getFunctions()[1]->getCallable(), "The method getCallable() does not return the expected callable on item 1");
		$this->assertEquals(["html"], $obj->getFunctions()[1]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 1");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $obj->getFunctions()[2], "The method getFunctions() does not return the expected object on item 2");
		$this->assertEquals("highchartsSetOptions", $obj->getFunctions()[2]->getName(), "The method getName() does not return the expected name on item 2");
		$this->assertEquals([$obj, "highchartsSetOptionsFunction"], $obj->getFunctions()[2]->getCallable(), "The method getCallable() does not return the expected callable on item 2");
		$this->assertEquals(["html"], $obj->getFunctions()[2]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 2");
	}

	/**
	 * Tests the highchartsChartFunction() method.
	 *
	 * @return void
	 */
	public function testHighchartsChartFunction() {

		$cht = new HighchartsChart();
		$cht->newTitle()->setText("title");

		$obj1 = new HighchartsTwigExtension(getcwd(), "");

		$res1 = "<script type=\"text/javascript\">\nHighcharts.chart('selector', {\"title\":{\"text\":\"title\"}});\n</script>";
		$this->assertEquals($res1, $obj1->highchartsChartFunction("selector", $cht), "The method highchartsChartFunction() does not return the expected string in prod");

		$obj2 = new HighchartsTwigExtension(getcwd(), "dev");

		$res2 = "<script type=\"text/javascript\">\nHighcharts.chart('selector', {\n    \"title\": {\n        \"text\": \"title\"\n    }\n});\n</script>";
		$this->assertEquals($res2, $obj2->highchartsChartFunction("selector", $cht), "The method highchartsChartFunction() does not return the expected string in dev");
	}

	/**
	 * Tests the highchartsScriptFunction() method.
	 *
	 * @return void
	 */
	public function testHighchartsScriptFunction() {

		$obj = new HighchartsTwigExtension(getcwd(), "");

		try {
			$obj->highchartsScriptFunction("inexistant-script");
		} catch (Exception $ex) {
			$this->assertInstanceOf(FileNotFoundException::class, $ex, "The method highchartsScript() does not throw the expected exception");
			$this->assertEquals("The file \"code/inexistant-script.js\" is not found", $ex->getMessage(), "The method getMessage() does not return the expected string");
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
	 *
	 * @return void
	 */
	public function testHighchartsSetOptionsFunction() {

		$opt = new HighchartsOptions();
		$opt->newGlobal();
		$opt->newLang();

		$obj1 = new HighchartsTwigExtension(getcwd(), "");

		$res1 = "<script type=\"text/javascript\">\nHighcharts.setOptions({\"global\":[],\"lang\":[]});\n</script>";
		$this->assertEquals($res1, $obj1->highchartsSetOptionsFunction($opt), "The method highchartsSetOptionsFunction() does not return the expected string in prod");

		$obj2 = new HighchartsTwigExtension(getcwd(), "dev");

		$res2 = "<script type=\"text/javascript\">\nHighcharts.setOptions({\n    \"global\": [],\n    \"lang\": []\n});\n</script>";
		$this->assertEquals($res2, $obj2->highchartsSetOptionsFunction($opt), "The method highchartsSetOptionsFunction() does not return the expected string in dev");
	}

}
