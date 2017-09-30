<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\XAxis;

use WBW\HighchartsBundle\API\Chart\XAxis\HighchartsLabels;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsLabels(false);

		$res = ["autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => 15, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "x" => 0, "zIndex" => 7];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAlign("f792d1afb0399dce47533bead9d71a8a");

		$res1 = ["autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => 15, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "x" => 0, "zIndex" => 7, "align" => "f792d1afb0399dce47533bead9d71a8a"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with align');

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res2 = ["autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => 15, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "x" => 0, "zIndex" => 7, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with formatter');

		$obj->setStaggerLines(22);

		$res3 = ["autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => 15, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "x" => 0, "zIndex" => 7, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 22];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with stagger lines');

		$obj->setStep(20);

		$res4 = ["autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => 15, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "x" => 0, "zIndex" => 7, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 22, "step" => 20];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with step');

		$obj->setY(5);

		$res5 = ["autoRotation" => [-45], "autoRotationLimit" => 80, "distance" => 15, "enabled" => true, "format" => "{value}", "padding" => 5, "reserveSpace" => true, "rotation" => 0, "style" => ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], "useHTML" => false, "x" => 0, "zIndex" => 7, "align" => "f792d1afb0399dce47533bead9d71a8a", "formatter" => "f2ffc59487832cbad265a8fef2133592", "staggerLines" => 22, "step" => 20, "y" => 5];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with y');
	}
}

