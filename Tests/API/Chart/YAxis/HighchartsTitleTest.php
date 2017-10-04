<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsTitle;

/**
 * Highcharts title test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsTitle(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsTitle(false);

		$res = ["align" => "middle", "margin" => 40, "reserveSpace" => true, "rotation" => 270, "style" => ["color" => "#666666"], "text" => "Values", "x" => 0];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setOffset(95);

		$res1 = ["align" => "middle", "margin" => 40, "reserveSpace" => true, "rotation" => 270, "style" => ["color" => "#666666"], "text" => "Values", "x" => 0, "offset" => 95];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with offset');

		$obj->setY(46);

		$res2 = ["align" => "middle", "margin" => 40, "reserveSpace" => true, "rotation" => 270, "style" => ["color" => "#666666"], "text" => "Values", "x" => 0, "offset" => 95, "y" => 46];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}

}
