<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame;

use WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts bottom test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 */
final class HighchartsBottomTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsBottom(false);

		$res = ["color" => "transparent", "size" => 1, "visible" => "default"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');
	}
}

