<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Gauge;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts dial test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Gauge
 * @version 5.0.14
 */
final class HighchartsDialTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial(true);

		$this->assertEquals(null, $obj1->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBaseLength(), "The method getBaseLength() does not return the expected value");
		$this->assertEquals(null, $obj1->getBaseWidth(), "The method getBaseWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getRadius(), "The method getRadius() does not return the expected value");
		$this->assertEquals(null, $obj1->getRearLength(), "The method getRearLength() does not return the expected value");
		$this->assertEquals(null, $obj1->getTopWidth(), "The method getTopWidth() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial(false);

		$this->assertEquals("#000000", $obj0->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
		$this->assertEquals("70%", $obj0->getBaseLength(), "The method getBaseLength() does not return the expected value");
		$this->assertEquals(3, $obj0->getBaseWidth(), "The method getBaseWidth() does not return the expected value");
		$this->assertEquals("#cccccc", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
		$this->assertEquals("80%", $obj0->getRadius(), "The method getRadius() does not return the expected value");
		$this->assertEquals("10%", $obj0->getRearLength(), "The method getRearLength() does not return the expected value");
		$this->assertEquals(1, $obj0->getTopWidth(), "The method getTopWidth() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial(true);

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res1 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with background color");

		$obj->setBaseLength("908389f95bb7d5ec0ee86df707120146");

		$res2 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with base length");

		$obj->setBaseWidth(75);

		$res3 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 75];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with base width");

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res4 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setBorderWidth(19);

		$res5 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 19];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with border width");

		$obj->setRadius("fc021d54683383e5078ab9fefc4d53c8");

		$res6 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 19, "radius" => "fc021d54683383e5078ab9fefc4d53c8"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with radius");

		$obj->setRearLength("cfeff8818f149d68732253aca8a5c4bf");

		$res7 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 19, "radius" => "fc021d54683383e5078ab9fefc4d53c8", "rearLength" => "cfeff8818f149d68732253aca8a5c4bf"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with rear length");

		$obj->setTopWidth(39);

		$res8 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 19, "radius" => "fc021d54683383e5078ab9fefc4d53c8", "rearLength" => "cfeff8818f149d68732253aca8a5c4bf", "topWidth" => 39];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with top width");
	}

}
