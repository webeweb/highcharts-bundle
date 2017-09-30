<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Gauge;

use WBW\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDial;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts dial test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Gauge
 * @version 5.0.14
 */
final class HighchartsDialTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsDial(false);

		$res = ["backgroundColor" => "#000000", "baseLength" => "70%", "baseWidth" => 3, "borderColor" => "#cccccc", "borderWidth" => 0, "radius" => "80%", "rearLength" => "10%", "topWidth" => 1];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');
	}
}

