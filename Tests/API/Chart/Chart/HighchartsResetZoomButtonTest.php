<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton;

/**
 * Highcharts reset zoom button test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart
 * @version 5.0.14
 */
final class HighchartsResetZoomButtonTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsResetZoomButton(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsResetZoomButton(false);

		$res = ["relativeTo" => "plot"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);

		$res1 = ["relativeTo" => "plot", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with position");

		$obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

		$res2 = ["relativeTo" => "plot", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with theme");
	}

}
