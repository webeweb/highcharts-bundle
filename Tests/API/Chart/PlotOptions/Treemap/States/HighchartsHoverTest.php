<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions\Treemap\States;

use WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\States\HighchartsHover;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\PlotOptions\Treemap\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsHover(false);

		$res = ["animation" => ["duration" => 50], "brightness" => 0.1, "enabled" => true, "opacity" => 0.75];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res1 = ["animation" => ["duration" => 50], "brightness" => 0.1, "enabled" => true, "opacity" => 0.75, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with border color');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res2 = ["animation" => ["duration" => 50], "brightness" => 0.1, "enabled" => true, "opacity" => 0.75, "borderColor" => "97da935a74593c55d78be9d1295aa994", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with color');
	}
}

