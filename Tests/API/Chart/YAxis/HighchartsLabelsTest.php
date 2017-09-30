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

use WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsLabels(false);

		$res = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res1 = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7, "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with formatter');

		$obj->setStaggerLines(68);

		$res2 = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7, "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 68];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with stagger lines');

		$obj->setStep(84);

		$res3 = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7, "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 68, "step" => 84];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with step');

		$obj->setX(88);

		$res4 = ["align" => "right", "autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => -25, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "y" => 3, "zIndex" => 7, "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 68, "step" => 84, "x" => 88];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with x');
	}
}

