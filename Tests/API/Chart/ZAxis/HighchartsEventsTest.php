<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts events test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis
 * @version 5.0.14
 */
final class HighchartsEventsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents(true);

		$this->assertEquals(null, $obj1->getAfterBreaks(), "The method getAfterBreaks() does not return the expected value");
		$this->assertEquals(null, $obj1->getAfterSetExtremes(), "The method getAfterSetExtremes() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointBreak(), "The method getPointBreak() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointInBreak(), "The method getPointInBreak() does not return the expected value");
		$this->assertEquals(null, $obj1->getSetExtremes(), "The method getSetExtremes() does not return the expected value");
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents(true);

		$obj->setAfterBreaks("2aee0ecaa51b86ca6fb2f52e53055d9c");

		$res1 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with after breaks");

		$obj->setAfterSetExtremes("782a209aa49fe0f760e3d9379f843e13");

		$res2 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with after set extremes");

		$obj->setPointBreak("0b72c42e9ef65da30a50c4374ac0ea59");

		$res3 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13", "pointBreak" => "0b72c42e9ef65da30a50c4374ac0ea59"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with point break");

		$obj->setPointInBreak("84525ae3843d52f899c93a7e8d266492");

		$res4 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13", "pointBreak" => "0b72c42e9ef65da30a50c4374ac0ea59", "pointInBreak" => "84525ae3843d52f899c93a7e8d266492"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with point in break");

		$obj->setSetExtremes("057f72c70fe8778e16e200860308778c");

		$res5 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13", "pointBreak" => "0b72c42e9ef65da30a50c4374ac0ea59", "pointInBreak" => "84525ae3843d52f899c93a7e8d266492", "setExtremes" => "057f72c70fe8778e16e200860308778c"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with set extremes");
	}

}
