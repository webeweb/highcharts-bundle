<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Areaspline\Marker\States;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Areaspline\Marker\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsHover(true);

		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getFillColor(), "The method getFillColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineColor(), "The method getLineColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineWidthPlus(), "The method getLineWidthPlus() does not return the expected value");
		$this->assertEquals(null, $obj1->getRadius(), "The method getRadius() does not return the expected value");
		$this->assertEquals(null, $obj1->getRadiusPlus(), "The method getRadiusPlus() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsHover(false);

		$this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj0->getFillColor(), "The method getFillColor() does not return the expected value");
		$this->assertEquals("#ffffff", $obj0->getLineColor(), "The method getLineColor() does not return the expected value");
		$this->assertEquals(0, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(1, $obj0->getLineWidthPlus(), "The method getLineWidthPlus() does not return the expected value");
		$this->assertEquals(null, $obj0->getRadius(), "The method getRadius() does not return the expected value");
		$this->assertEquals(2, $obj0->getRadiusPlus(), "The method getRadiusPlus() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsHover(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsHover(true);

		$obj->setEnabled(0);

		$res1 = ["enabled" => 0];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res2 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with fill color");

		$obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

		$res3 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with line color");

		$obj->setLineWidth(95);

		$res4 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 95];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with line width");

		$obj->setLineWidthPlus(93);

		$res5 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 95, "lineWidthPlus" => 93];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with line width plus");

		$obj->setRadius(35);

		$res6 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 95, "lineWidthPlus" => 93, "radius" => 35];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with radius");

		$obj->setRadiusPlus(59);

		$res7 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 95, "lineWidthPlus" => 93, "radius" => 35, "radiusPlus" => 59];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with radius plus");
	}

}
