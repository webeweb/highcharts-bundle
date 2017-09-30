<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\ZAxis;

use WBW\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts title test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\ZAxis
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

		$obj->setMargin(62);

		$res1 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 62];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with margin');

		$obj->setOffset(84);

		$res2 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 62, "offset" => 84];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with offset');

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res3 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 62, "offset" => 84, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with text');

		$obj->setY(89);

		$res4 = ["align" => "middle", "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666"], "x" => 0, "margin" => 62, "offset" => 84, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "y" => 89];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

