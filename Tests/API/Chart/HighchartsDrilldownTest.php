<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use WBW\HighchartsBundle\API\Chart\HighchartsDrilldown;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts drilldown test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsDrilldownTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsDrilldown(false);

		$res = ["activeAxisLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "activeDataLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "allowPointDrilldown" => true];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimation(1);

		$res1 = ["activeAxisLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "activeDataLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "allowPointDrilldown" => true, "animation" => 1];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation');

		$obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

		$res2 = ["activeAxisLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "activeDataLabelStyle" => ["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], "allowPointDrilldown" => true, "animation" => 1, "series" => ["series" => "bef99584217af744e404ed44a33af589"]];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with series');
	}
}

