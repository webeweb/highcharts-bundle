<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use WBW\HighchartsBundle\API\Chart\HighchartsLabels;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsLabels(false);

		$res = ["style" => ["color" => "#333333"]];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setItems(["items" => "691d502cfd0e0626cd3b058e5682ad1c"]);

		$res1 = ["style" => ["color" => "#333333"], "items" => ["items" => "691d502cfd0e0626cd3b058e5682ad1c"]];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with items');
	}
}

