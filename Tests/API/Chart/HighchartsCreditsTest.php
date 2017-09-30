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

use WBW\HighchartsBundle\API\Chart\HighchartsCredits;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts credits test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsCreditsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsCredits(false);

		$res = ["enabled" => true, "href" => "http://www.highcharts.com", "style" => ["cursor" => "pointer", "color" => "#999999", "fontSize" => "10px"], "text" => "Highcharts.com"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');
	}
}

