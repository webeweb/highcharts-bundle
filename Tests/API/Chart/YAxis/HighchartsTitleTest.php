<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\YAxis;

use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsTitle;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts title test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsTitle(false);

		$res = ["align" => "middle", "margin" => 40, "reserveSpace" => true, "rotation" => 270, "style" => ["color" => "#666666"], "text" => "Values", "x" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setOffset(4);

		$res1 = ["align" => "middle", "margin" => 40, "reserveSpace" => true, "rotation" => 270, "style" => ["color" => "#666666"], "text" => "Values", "x" => 0, "offset" => 4];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with offset');

		$obj->setY(32);

		$res2 = ["align" => "middle", "margin" => 40, "reserveSpace" => true, "rotation" => 270, "style" => ["color" => "#666666"], "text" => "Values", "x" => 0, "offset" => 4, "y" => 32];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

