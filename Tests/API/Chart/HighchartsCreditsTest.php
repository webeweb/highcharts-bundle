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
use WBW\HighchartsBundle\API\Chart\HighchartsCredits;

/**
 * Highcharts credits test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsCreditsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsCredits(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsCredits(false);

		$res = ["enabled" => true, "href" => "http://www.highcharts.com", "style" => ["cursor" => "pointer", "color" => "#999999", "fontSize" => "10px"], "text" => "Highcharts.com"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);

		$res1 = ["enabled" => true, "href" => "http://www.highcharts.com", "style" => ["cursor" => "pointer", "color" => "#999999", "fontSize" => "10px"], "text" => "Highcharts.com", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with position");
	}

}
