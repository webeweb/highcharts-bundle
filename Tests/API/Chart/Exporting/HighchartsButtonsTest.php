<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Exporting;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts buttons test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Exporting
 * @version 5.0.14
 */
final class HighchartsButtonsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(true);

		$this->assertEquals(null, $obj1->getContextButton(), "The method getContextButton() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newContextButton() method.
	 *
	 * @return void.
	 */
	public function testNewContextButton() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(false);

		$res = $obj->newContextButton();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton::class, $res, "The method newContextButton() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(true);

		$obj->setContextButton(new \WBW\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton());

		$res1 = ["contextButton" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with context button");
	}

}
