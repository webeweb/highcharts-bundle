<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts drilldown test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsDrilldownTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsDrilldown(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsDrilldown(false);

		$res = ["activeAxisLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "activeDataLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "allowPointDrilldown" => true];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimation(0);

		$res1 = ["activeAxisLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "activeDataLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "allowPointDrilldown" => true, "animation" => 0];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setDrillUpButton(["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"]);

		$res2 = ["activeAxisLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "activeDataLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "allowPointDrilldown" => true, "animation" => 0, "drillUpButton" => ["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with drill up button");

		$obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

		$res3 = ["activeAxisLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "activeDataLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "allowPointDrilldown" => true, "animation" => 0, "drillUpButton" => ["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"], "series" => ["series" => "bef99584217af744e404ed44a33af589"]];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with series");
	}

}
