<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Drilldown;

use WBW\HighchartsBundle\API\Chart\Drilldown\HighchartsDrillUpButton;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts drill up button test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Drilldown
 * @version 5.0.14
 */
final class HighchartsDrillUpButtonTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsDrillUpButton(false);

		$res = ["relativeTo" => "plotBox"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setPosition("4757fe07fd492a8be0ea6a760d683d6e");

		$res1 = ["relativeTo" => "plotBox", "position" => "4757fe07fd492a8be0ea6a760d683d6e"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with position');

		$obj->setTheme("f484570d7cf557020e11ace406901b10");

		$res2 = ["relativeTo" => "plotBox", "position" => "4757fe07fd492a8be0ea6a760d683d6e", "theme" => "f484570d7cf557020e11ace406901b10"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with theme');
	}
}

