<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\NoData;

use WBW\HighchartsBundle\API\Chart\NoData\HighchartsPosition;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts position test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\NoData
 * @version 5.0.14
 */
final class HighchartsPositionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsPosition(false);

		$res = ["align" => "center", "verticalAlign" => "middle", "x" => 0, "y" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');
	}
}

