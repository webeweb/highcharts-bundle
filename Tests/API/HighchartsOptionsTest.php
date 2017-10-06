<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts options test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API
 * @version 5.0.14
 */
final class HighchartsOptionsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsOptions(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newGlobal() method.
	 *
	 * @return void.
	 */
	public function testNewGlobal() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsOptions(false);

		$res = $obj->newGlobal();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Options\HighchartsGlobal::class, $res, "The method newGlobal() does not return the expected class");
	}

	/**
	 * Tests the newLang() method.
	 *
	 * @return void.
	 */
	public function testNewLang() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsOptions(false);

		$res = $obj->newLang();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Options\HighchartsLang::class, $res, "The method newLang() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsOptions(false);

		$obj->newGlobal();

		$res1 = ["global" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with global");

		$obj->newLang();

		$res2 = ["global" => [], "lang" => []];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with lang");
	}

}
