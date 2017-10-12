<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Polygon;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts tooltip test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Polygon
 * @version 5.0.14
 */
final class HighchartsTooltipTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsTooltip(true);

		$this->assertEquals(null, $obj1->getDateTimeLabelFormats(), "The method getDateTimeLabelFormats() does not return the expected value");
		$this->assertEquals(null, $obj1->getFollowPointer(), "The method getFollowPointer() does not return the expected value");
		$this->assertEquals(null, $obj1->getFollowTouchMove(), "The method getFollowTouchMove() does not return the expected value");
		$this->assertEquals(null, $obj1->getFooterFormat(), "The method getFooterFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getHeaderFormat(), "The method getHeaderFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getHideDelay(), "The method getHideDelay() does not return the expected value");
		$this->assertEquals(null, $obj1->getPadding(), "The method getPadding() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointFormat(), "The method getPointFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointFormatter(), "The method getPointFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getSplit(), "The method getSplit() does not return the expected value");
		$this->assertEquals(null, $obj1->getValueDecimals(), "The method getValueDecimals() does not return the expected value");
		$this->assertEquals(null, $obj1->getValuePrefix(), "The method getValuePrefix() does not return the expected value");
		$this->assertEquals(null, $obj1->getValueSuffix(), "The method getValueSuffix() does not return the expected value");
		$this->assertEquals(null, $obj1->getXDateFormat(), "The method getXDateFormat() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsTooltip(false);

		$this->assertEquals(null, $obj0->getDateTimeLabelFormats(), "The method getDateTimeLabelFormats() does not return the expected value");
		$this->assertEquals(false, $obj0->getFollowPointer(), "The method getFollowPointer() does not return the expected value");
		$this->assertEquals(true, $obj0->getFollowTouchMove(), "The method getFollowTouchMove() does not return the expected value");
		$this->assertEquals("false", $obj0->getFooterFormat(), "The method getFooterFormat() does not return the expected value");
		$this->assertEquals(null, $obj0->getHeaderFormat(), "The method getHeaderFormat() does not return the expected value");
		$this->assertEquals(500, $obj0->getHideDelay(), "The method getHideDelay() does not return the expected value");
		$this->assertEquals(8, $obj0->getPadding(), "The method getPadding() does not return the expected value");
		$this->assertEquals("<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", $obj0->getPointFormat(), "The method getPointFormat() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointFormatter(), "The method getPointFormatter() does not return the expected value");
		$this->assertEquals(false, $obj0->getSplit(), "The method getSplit() does not return the expected value");
		$this->assertEquals(null, $obj0->getValueDecimals(), "The method getValueDecimals() does not return the expected value");
		$this->assertEquals(null, $obj0->getValuePrefix(), "The method getValuePrefix() does not return the expected value");
		$this->assertEquals(null, $obj0->getValueSuffix(), "The method getValueSuffix() does not return the expected value");
		$this->assertEquals(null, $obj0->getXDateFormat(), "The method getXDateFormat() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsTooltip(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsTooltip(true);

		$obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

		$res1 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with date time label formats");

		$obj->setFollowPointer(0);

		$res2 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with follow pointer");

		$obj->setFollowTouchMove(0);

		$res3 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with follow touch move");

		$obj->setFooterFormat("1ac32e030fc5ef01e703d5419170690e");

		$res4 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with footer format");

		$obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");

		$res5 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with header format");

		$obj->setHideDelay(43);

		$res6 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with hide delay");

		$obj->setPadding(47);

		$res7 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43, "padding" => 47];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with padding");

		$obj->setPointFormat("332dd3de68dc71de0745837cbc13e217");

		$res8 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43, "padding" => 47, "pointFormat" => "332dd3de68dc71de0745837cbc13e217"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with point format");

		$obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");

		$res9 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43, "padding" => 47, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with point formatter");

		$obj->setSplit(0);

		$res10 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43, "padding" => 47, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 0];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with split");

		$obj->setValueDecimals(40);

		$res11 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43, "padding" => 47, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 0, "valueDecimals" => 40];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with value decimals");

		$obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");

		$res12 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43, "padding" => 47, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 0, "valueDecimals" => 40, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with value prefix");

		$obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");

		$res13 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43, "padding" => 47, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 0, "valueDecimals" => 40, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with value suffix");

		$obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");

		$res14 = ["dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "followPointer" => 0, "followTouchMove" => 0, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 43, "padding" => 47, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "split" => 0, "valueDecimals" => 40, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db", "xDateFormat" => "e24debfa0bc8408e1dda05cbd537a072"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with x date format");
	}

}
