<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts subtitle test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsSubtitleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle(true);

		$this->assertEquals(null, $obj1->getAlign());
		$this->assertEquals(null, $obj1->getFloating());
		$this->assertEquals(null, $obj1->getStyle());
		$this->assertEquals(null, $obj1->getText());
		$this->assertEquals(null, $obj1->getUseHTML());
		$this->assertEquals(null, $obj1->getVerticalAlign());
		$this->assertEquals(null, $obj1->getWidthAdjust());
		$this->assertEquals(null, $obj1->getX());
		$this->assertEquals(null, $obj1->getY());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle(false);

		$this->assertEquals("center", $obj0->getAlign());
		$this->assertEquals(false, $obj0->getFloating());
		$this->assertEquals(["color" => "#666666"], $obj0->getStyle());
		$this->assertEquals(null, $obj0->getText());
		$this->assertEquals(false, $obj0->getUseHTML());
		$this->assertEquals(null, $obj0->getVerticalAlign());
		$this->assertEquals(-44, $obj0->getWidthAdjust());
		$this->assertEquals(0, $obj0->getX());
		$this->assertEquals(null, $obj0->getY());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setFloating(0);

		$res2 = ["align" => "right", "floating" => 0];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res3 = ["align" => "right", "floating" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res4 = ["align" => "right", "floating" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setUseHTML(1);

		$res5 = ["align" => "right", "floating" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 1];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setVerticalAlign("bottom");

		$res6 = ["align" => "right", "floating" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 1, "verticalAlign" => "bottom"];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setWidthAdjust(42);

		$res7 = ["align" => "right", "floating" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 1, "verticalAlign" => "bottom", "widthAdjust" => 42];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setX(61);

		$res8 = ["align" => "right", "floating" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 1, "verticalAlign" => "bottom", "widthAdjust" => 42, "x" => 61];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setY(85);

		$res9 = ["align" => "right", "floating" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 1, "verticalAlign" => "bottom", "widthAdjust" => 42, "x" => 61, "y" => 85];
		$this->assertEquals($res9, $obj->toArray());
	}

}
