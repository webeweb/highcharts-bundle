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
use WBW\HighchartsBundle\API\Chart\HighchartsLoading;

/**
 * Highcharts loading test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLoadingTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsLoading(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsLoading(false);

		$res = ["hideDuration" => 100, "labelStyle" => ["fontWeight" => "bold", "position" => "relative", "top" => "45%"], "showDuration" => 100, "style" => ["position" => "absolute", "backgroundColor" => "#ffffff", "opacity" => 0.5, "textAlign" => "center"]];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');
	}

}
