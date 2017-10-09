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

/**
 * Highcharts labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels(false);

		$res = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res1 = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7, "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with formatter");

		$obj->setStaggerLines(89);

		$res2 = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7, "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 89];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with stagger lines");

		$obj->setStep(33);

		$res3 = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7, "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 89, "step" => 33];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with step");

		$obj->setX(84);

		$res4 = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7, "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 89, "step" => 33, "x" => 84];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with x");
	}

}
