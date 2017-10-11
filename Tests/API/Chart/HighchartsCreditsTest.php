<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts credits test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsCreditsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsCredits(true);

		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getHref(), "The method getHref() does not return the expected value");
		$this->assertEquals(null, $obj1->getPosition(), "The method getPosition() does not return the expected value");
		$this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getText(), "The method getText() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\HighchartsCredits(false);

		$this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals("http://www.highcharts.com", $obj0->getHref(), "The method getHref() does not return the expected value");
		$this->assertEquals(null, $obj0->getPosition(), "The method getPosition() does not return the expected value");
		$this->assertEquals(["cursor" => "pointer", "color" => "#999999", "fontSize" => "10px"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
		$this->assertEquals("Highcharts.com", $obj0->getText(), "The method getText() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsCredits(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsCredits(true);

		$obj->setEnabled(1);

		$res1 = ["enabled" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setHref("e8fab833730f3a939d0b3812fe043b5d");

		$res2 = ["enabled" => 1, "href" => "e8fab833730f3a939d0b3812fe043b5d"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with href");

		$obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);

		$res3 = ["enabled" => 1, "href" => "e8fab833730f3a939d0b3812fe043b5d", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"]];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with position");

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res4 = ["enabled" => 1, "href" => "e8fab833730f3a939d0b3812fe043b5d", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with style");

		$obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

		$res5 = ["enabled" => 1, "href" => "e8fab833730f3a939d0b3812fe043b5d", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with text");
	}

}
