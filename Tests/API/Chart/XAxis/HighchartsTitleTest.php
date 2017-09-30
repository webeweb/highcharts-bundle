<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\XAxis;

use WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts title test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsTitle(false);

		$res = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setMargin(2);

		$res1 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 2];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with margin');

		$obj->setOffset(56);

		$res2 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 2, "offset" => 56];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with offset');

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res3 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 2, "offset" => 56, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with text');

		$obj->setY(50);

		$res4 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 2, "offset" => 56, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "y" => 50];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

