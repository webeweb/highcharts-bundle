<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Area;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Area\HighchartsStates;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Area\States\HighchartsHover;

/**
 * Highcharts states test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Area
 * @version 5.0.14
 */
final class HighchartsStatesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsStates(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newHover() method.
	 *
	 * @return void.
	 */
	public function testNewHover() {

		$obj = new HighchartsStates(false);

		$res = $obj->newHover();
		$this->assertInstanceOf(HighchartsHover::class, $res, "The method newHover() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsStates(false);

		$obj->newHover();

		$res1 = ["hover" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with hover");
	}

}
