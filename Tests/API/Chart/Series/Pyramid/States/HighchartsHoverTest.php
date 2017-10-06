<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Pyramid\States;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Pyramid\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Pyramid\States\HighchartsHover(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newMarker() method.
	 *
	 * @return void.
	 */
	public function testNewMarker() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Pyramid\States\HighchartsHover(false);

		$res = $obj->newMarker();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Pyramid\States\Hover\HighchartsMarker::class, $res, "The method newMarker() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\Pyramid\States\HighchartsHover(false);

		$res = ["animation" => ["duration" => 50], "enabled" => true, "lineWidth" => 2, "lineWidthPlus" => 1];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setHalo(["halo" => "57f842286171094855e51fc3a541c1e2"]);

		$res1 = ["animation" => ["duration" => 50], "enabled" => true, "lineWidth" => 2, "lineWidthPlus" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with halo");
	}

}
