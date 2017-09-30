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

use WBW\HighchartsBundle\API\Chart\HighchartsResponsive;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts responsive test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsResponsiveTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsResponsive(false);

		$obj->setRules(["rules" => "a4f86f7bfc24194b276c22e0ef158197"]);

		$res1 = ["rules" => ["rules" => "a4f86f7bfc24194b276c22e0ef158197"]];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with rules');
	}
}

