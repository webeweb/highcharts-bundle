<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Options;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Options\HighchartsGlobal;

/**
 * Highcharts global test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Options
 * @version 5.0.14
 */
final class HighchartsGlobalTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsGlobal(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsGlobal(false);

		$res = ["VMLRadialGradientURL" => "http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png", "timezoneOffset" => 0, "useUTC" => true];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setDate(["Date" => "44749712dbec183e983dcd78a7736c41"]);

		$res1 = ["VMLRadialGradientURL" => "http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png", "timezoneOffset" => 0, "useUTC" => true, "Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with date");

		$obj->setGetTimezoneOffset("bc2cf98d144cf7852b57fe1dc90d1199");

		$res2 = ["VMLRadialGradientURL" => "http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png", "timezoneOffset" => 0, "useUTC" => true, "Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with get timezone offset");

		$obj->setTimezone("b2c6cc48f97ccd71b16d31d88fc177a6");

		$res3 = ["VMLRadialGradientURL" => "http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png", "timezoneOffset" => 0, "useUTC" => true, "Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199", "timezone" => "b2c6cc48f97ccd71b16d31d88fc177a6"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with timezone");
	}

}
