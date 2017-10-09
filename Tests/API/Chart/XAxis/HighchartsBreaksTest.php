<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\XAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts breaks test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsBreaksTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(false);

		$res = ["breakSize" => 0, "repeat" => 0];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setFrom(42);

		$res1 = ["breakSize" => 0, "repeat" => 0, "from" => 42];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with from");

		$obj->setTo(90);

		$res2 = ["breakSize" => 0, "repeat" => 0, "from" => 42, "to" => 90];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with to");
	}

}
