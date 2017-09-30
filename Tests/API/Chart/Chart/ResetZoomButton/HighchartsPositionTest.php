<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart\ResetZoomButton;

use WBW\HighchartsBundle\API\Chart\Chart\ResetZoomButton\HighchartsPosition;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts position test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart\ResetZoomButton
 * @version 5.0.14
 */
final class HighchartsPositionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsPosition(false);

		$res = ["verticalAlign" => "top", "x" => -10, "y" => 10];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAlign("f792d1afb0399dce47533bead9d71a8a");

		$res1 = ["verticalAlign" => "top", "x" => -10, "y" => 10, "align" => "f792d1afb0399dce47533bead9d71a8a"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with align');
	}
}

