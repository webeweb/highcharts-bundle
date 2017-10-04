<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart\Options3d;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide;

/**
 * Highcharts frame test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart\Options3d
 * @version 5.0.14
 */
final class HighchartsFrameTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsFrame(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newBack() method.
	 *
	 * @return void.
	 */
	public function testNewBack() {

		$obj = new HighchartsFrame(false);

		$res = $obj->newBack();
		$this->assertInstanceOf(HighchartsBack::class, $res, 'The method newBack() does not return the expected class');
	}

	/**
	 * Tests the newBottom() method.
	 *
	 * @return void.
	 */
	public function testNewBottom() {

		$obj = new HighchartsFrame(false);

		$res = $obj->newBottom();
		$this->assertInstanceOf(HighchartsBottom::class, $res, 'The method newBottom() does not return the expected class');
	}

	/**
	 * Tests the newSide() method.
	 *
	 * @return void.
	 */
	public function testNewSide() {

		$obj = new HighchartsFrame(false);

		$res = $obj->newSide();
		$this->assertInstanceOf(HighchartsSide::class, $res, 'The method newSide() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsFrame(false);

		$obj->newBack();

		$res1 = ["back" => []];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with back');

		$obj->newBottom();

		$res2 = ["back" => [], "bottom" => []];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with bottom');

		$obj->newSide();

		$res3 = ["back" => [], "bottom" => [], "side" => []];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with side');

		$obj->setTop(["top" => "b28354b543375bfa94dabaeda722927f"]);

		$res4 = ["back" => [], "bottom" => [], "side" => [], "top" => ["top" => "b28354b543375bfa94dabaeda722927f"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with top');
	}

}
