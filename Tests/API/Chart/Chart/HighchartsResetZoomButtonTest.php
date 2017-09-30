<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart;

use WBW\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts reset zoom button test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Chart
 * @version 5.0.14
 */
final class HighchartsResetZoomButtonTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsResetZoomButton(false);

		$res = ["relativeTo" => "plot"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setTheme("f484570d7cf557020e11ace406901b10");

		$res1 = ["relativeTo" => "plot", "theme" => "f484570d7cf557020e11ace406901b10"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with theme');
	}
}

