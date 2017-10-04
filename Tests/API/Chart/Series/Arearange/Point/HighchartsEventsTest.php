<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Arearange\Point;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Series\Arearange\Point\HighchartsEvents;

/**
 * Highcharts events test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Arearange\Point
 * @version 5.0.14
 */
final class HighchartsEventsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsEvents(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsEvents(false);

		$obj->setClick("a8affc088cbca89fa20dbd98c91362e4");

		$res1 = ["click" => "a8affc088cbca89fa20dbd98c91362e4"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with click");

		$obj->setMouseOut("efc487f286f5bca976fafe58cb6e7895");

		$res2 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with mouse out");

		$obj->setMouseOver("1f1a5f011c50a092eb06446d724dd573");

		$res3 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with mouse over");

		$obj->setRemove("0f6969d7052da9261e31ddb6e88c136e");

		$res4 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with remove");

		$obj->setSelect("99938282f04071859941e18f16efcf42");

		$res5 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e", "select" => "99938282f04071859941e18f16efcf42"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with select");

		$obj->setUnselect("223f2d725e5f4ddb92b585d87421adbd");

		$res6 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e", "select" => "99938282f04071859941e18f16efcf42", "unselect" => "223f2d725e5f4ddb92b585d87421adbd"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with unselect");

		$obj->setUpdate("3ac340832f29c11538fbe2d6f75e8bcc");

		$res7 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e", "select" => "99938282f04071859941e18f16efcf42", "unselect" => "223f2d725e5f4ddb92b585d87421adbd", "update" => "3ac340832f29c11538fbe2d6f75e8bcc"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with update");
	}

}
