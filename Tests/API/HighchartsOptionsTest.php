<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts options test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API
 * @version 5.0.14
 */
final class HighchartsOptionsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(true);

		$this->assertEquals(null, $obj1->getGlobal(), "The method getGlobal() does not return the expected value");
		$this->assertEquals(null, $obj1->getLang(), "The method getLang() does not return the expected value");
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(false);

		$obj->newGlobal();
		$obj->newLang();

		$obj->clear();

		$res = ["global" => [], "lang" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newGlobal() method.
	 *
	 * @return void.
	 */
	public function testNewGlobal() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(false);

		$res = $obj->newGlobal();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal::class, $res, "The method newGlobal() does not return the expected object");
	}

	/**
	 * Tests the newLang() method.
	 *
	 * @return void.
	 */
	public function testNewLang() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(false);

		$res = $obj->newLang();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang::class, $res, "The method newLang() does not return the expected object");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(true);

		$obj->setGlobal(new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal());

		$res1 = ["global" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with global");

		$obj->setLang(new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang());

		$res2 = ["global" => [], "lang" => []];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with lang");
	}

}
