<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Pane;

use WBW\HighchartsBundle\API\Chart\Pane\HighchartsBackground;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts background test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Pane
 * @version 5.0.14
 */
final class HighchartsBackgroundTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsBackground(false);

		$res = ["borderColor" => "#cccccc", "borderWidth" => 1, "className" => "highcharts-pane", "innerRadius" => "0", "outerRadius" => "105%", "shape" => "solid"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res1 = ["borderColor" => "#cccccc", "borderWidth" => 1, "className" => "highcharts-pane", "innerRadius" => "0", "outerRadius" => "105%", "shape" => "solid", "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with background color');
	}
}

