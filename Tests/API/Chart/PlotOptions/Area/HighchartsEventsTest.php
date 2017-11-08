<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Area;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts events test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Area
 * @version 5.0.14
 */
final class HighchartsEventsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents(true);

		$this->assertEquals(null, $obj1->getAfterAnimate(), "The method getAfterAnimate() does not return the expected value");
		$this->assertEquals(null, $obj1->getCheckboxClick(), "The method getCheckboxClick() does not return the expected value");
		$this->assertEquals(null, $obj1->getClick(), "The method getClick() does not return the expected value");
		$this->assertEquals(null, $obj1->getHide(), "The method getHide() does not return the expected value");
		$this->assertEquals(null, $obj1->getLegendItemClick(), "The method getLegendItemClick() does not return the expected value");
		$this->assertEquals(null, $obj1->getMouseOut(), "The method getMouseOut() does not return the expected value");
		$this->assertEquals(null, $obj1->getMouseOver(), "The method getMouseOver() does not return the expected value");
		$this->assertEquals(null, $obj1->getShow(), "The method getShow() does not return the expected value");
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsEvents(true);

		$obj->setAfterAnimate("ebdf113b6f659f6f3ea3c6b93e658235");

		$res1 = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with after animate");

		$obj->setCheckboxClick("27e3160a9be50f7b44b7bb9086d94964");

		$res2 = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235", "checkboxClick" => "27e3160a9be50f7b44b7bb9086d94964"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with checkbox click");

		$obj->setClick("a8affc088cbca89fa20dbd98c91362e4");

		$res3 = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235", "checkboxClick" => "27e3160a9be50f7b44b7bb9086d94964", "click" => "a8affc088cbca89fa20dbd98c91362e4"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with click");

		$obj->setHide("a88f05b6c963e145a45b58c47cd42a41");

		$res4 = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235", "checkboxClick" => "27e3160a9be50f7b44b7bb9086d94964", "click" => "a8affc088cbca89fa20dbd98c91362e4", "hide" => "a88f05b6c963e145a45b58c47cd42a41"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with hide");

		$obj->setLegendItemClick("56c962f18312c892a25fdf27904bd24b");

		$res5 = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235", "checkboxClick" => "27e3160a9be50f7b44b7bb9086d94964", "click" => "a8affc088cbca89fa20dbd98c91362e4", "hide" => "a88f05b6c963e145a45b58c47cd42a41", "legendItemClick" => "56c962f18312c892a25fdf27904bd24b"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with legend item click");

		$obj->setMouseOut("efc487f286f5bca976fafe58cb6e7895");

		$res6 = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235", "checkboxClick" => "27e3160a9be50f7b44b7bb9086d94964", "click" => "a8affc088cbca89fa20dbd98c91362e4", "hide" => "a88f05b6c963e145a45b58c47cd42a41", "legendItemClick" => "56c962f18312c892a25fdf27904bd24b", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with mouse out");

		$obj->setMouseOver("1f1a5f011c50a092eb06446d724dd573");

		$res7 = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235", "checkboxClick" => "27e3160a9be50f7b44b7bb9086d94964", "click" => "a8affc088cbca89fa20dbd98c91362e4", "hide" => "a88f05b6c963e145a45b58c47cd42a41", "legendItemClick" => "56c962f18312c892a25fdf27904bd24b", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with mouse over");

		$obj->setShow("a7dd12b1dab17d25467b0b0a4c8d4a92");

		$res8 = ["afterAnimate" => "ebdf113b6f659f6f3ea3c6b93e658235", "checkboxClick" => "27e3160a9be50f7b44b7bb9086d94964", "click" => "a8affc088cbca89fa20dbd98c91362e4", "hide" => "a88f05b6c963e145a45b58c47cd42a41", "legendItemClick" => "56c962f18312c892a25fdf27904bd24b", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "show" => "a7dd12b1dab17d25467b0b0a4c8d4a92"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with show");
	}

}
