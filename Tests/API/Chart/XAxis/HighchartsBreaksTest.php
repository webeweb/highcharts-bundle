<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\XAxis;

use WBW\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts breaks test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsBreaksTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsBreaks(false);

		$res = ["breakSize" => 0, "repeat" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setFrom(5);

		$res1 = ["breakSize" => 0, "repeat" => 0, "from" => 5];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with from');

		$obj->setTo(20);

		$res2 = ["breakSize" => 0, "repeat" => 0, "from" => 5, "to" => 20];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with to');
	}
}

