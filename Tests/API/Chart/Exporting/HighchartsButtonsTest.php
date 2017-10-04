<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Exporting;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons;
use WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton;

/**
 * Highcharts buttons test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Exporting
 * @version 5.0.14
 */
final class HighchartsButtonsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsButtons(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newContextButton() method.
	 *
	 * @return void.
	 */
	public function testNewContextButton() {

		$obj = new HighchartsButtons(false);

		$res = $obj->newContextButton();
		$this->assertInstanceOf(HighchartsContextButton::class, $res, "The method newContextButton() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsButtons(false);

		$obj->newContextButton();

		$res1 = ["contextButton" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with context button");
	}

}
