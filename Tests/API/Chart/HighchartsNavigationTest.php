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
use WBW\HighchartsBundle\API\Chart\HighchartsNavigation;
use WBW\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions;

/**
 * Highcharts navigation test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsNavigationTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsNavigation(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newButtonOptions() method.
	 *
	 * @return void.
	 */
	public function testNewButtonOptions() {

		$obj = new HighchartsNavigation(false);

		$res = $obj->newButtonOptions();
		$this->assertInstanceOf(HighchartsButtonOptions::class, $res, 'The method newButtonOptions() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsNavigation(false);

		$res = ["menuItemHoverStyle" => ["background" => "#335cad", "color" => "#ffffff"], "menuItemStyle" => ["padding" => "0.5em 1em", "color" => "#333333", "background" => "none"], "menuStyle" => ["border" => "1px solid #999999", "background" => "#ffffff", "padding" => "5px 0"]];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->newButtonOptions();

		$res1 = ["menuItemHoverStyle" => ["background" => "#335cad", "color" => "#ffffff"], "menuItemStyle" => ["padding" => "0.5em 1em", "color" => "#333333", "background" => "none"], "menuStyle" => ["border" => "1px solid #999999", "background" => "#ffffff", "padding" => "5px 0"], "buttonOptions" => []];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with button options');
	}

}
