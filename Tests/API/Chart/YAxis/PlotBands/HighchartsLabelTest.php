<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\YAxis\PlotBands;

use WBW\HighchartsBundle\API\Chart\YAxis\PlotBands\HighchartsLabel;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts label test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\YAxis\PlotBands
 * @version 5.0.14
 */
final class HighchartsLabelTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsLabel(false);

		$res = ["align" => "center", "rotation" => 0, "useHTML" => false, "verticalAlign" => "top"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setStyle("a1b01e734b573fca08eb1a65e6df9a38");

		$res1 = ["align" => "center", "rotation" => 0, "useHTML" => false, "verticalAlign" => "top", "style" => "a1b01e734b573fca08eb1a65e6df9a38"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with style');

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res2 = ["align" => "center", "rotation" => 0, "useHTML" => false, "verticalAlign" => "top", "style" => "a1b01e734b573fca08eb1a65e6df9a38", "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with text');

		$obj->setTextAlign("6e1fcbf7c065b2e7fef4cdc9bae3fe53");

		$res3 = ["align" => "center", "rotation" => 0, "useHTML" => false, "verticalAlign" => "top", "style" => "a1b01e734b573fca08eb1a65e6df9a38", "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with text align');

		$obj->setX(11);

		$res4 = ["align" => "center", "rotation" => 0, "useHTML" => false, "verticalAlign" => "top", "style" => "a1b01e734b573fca08eb1a65e6df9a38", "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "x" => 11];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with x');

		$obj->setY(6);

		$res5 = ["align" => "center", "rotation" => 0, "useHTML" => false, "verticalAlign" => "top", "style" => "a1b01e734b573fca08eb1a65e6df9a38", "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "x" => 11, "y" => 6];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

