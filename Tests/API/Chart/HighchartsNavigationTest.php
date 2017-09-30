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

use WBW\HighchartsBundle\API\Chart\HighchartsNavigation;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts navigation test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsNavigationTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsNavigation(false);

		$res = ["menuItemHoverStyle" => ["background" => "#335cad", "color" => "#ffffff"], "menuItemStyle" => ["padding" => "0.5em 1em", "color" => "#333333", "background" => "none"], "menuStyle" => ["border" => "1px solid #999999", "background" => "#ffffff", "padding" => "5px 0"]];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');
	}
}

