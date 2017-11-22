<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts tooltip test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsTooltipTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip(true);

		$this->assertEquals(null, $obj1->getAnimation());
		$this->assertEquals(null, $obj1->getBackgroundColor());
		$this->assertEquals(null, $obj1->getBorderColor());
		$this->assertEquals(null, $obj1->getBorderRadius());
		$this->assertEquals(null, $obj1->getBorderWidth());
		$this->assertEquals(null, $obj1->getCrosshairs());
		$this->assertEquals(null, $obj1->getDateTimeLabelFormats());
		$this->assertEquals(null, $obj1->getEnabled());
		$this->assertEquals(null, $obj1->getFollowPointer());
		$this->assertEquals(null, $obj1->getFollowTouchMove());
		$this->assertEquals(null, $obj1->getFooterFormat());
		$this->assertEquals(null, $obj1->getFormatter());
		$this->assertEquals(null, $obj1->getHeaderFormat());
		$this->assertEquals(null, $obj1->getHideDelay());
		$this->assertEquals(null, $obj1->getPadding());
		$this->assertEquals(null, $obj1->getPointFormat());
		$this->assertEquals(null, $obj1->getPointFormatter());
		$this->assertEquals(null, $obj1->getPositioner());
		$this->assertEquals(null, $obj1->getShadow());
		$this->assertEquals(null, $obj1->getShape());
		$this->assertEquals(null, $obj1->getShared());
		$this->assertEquals(null, $obj1->getSnap());
		$this->assertEquals(null, $obj1->getSplit());
		$this->assertEquals(null, $obj1->getStyle());
		$this->assertEquals(null, $obj1->getUseHTML());
		$this->assertEquals(null, $obj1->getValueDecimals());
		$this->assertEquals(null, $obj1->getValuePrefix());
		$this->assertEquals(null, $obj1->getValueSuffix());
		$this->assertEquals(null, $obj1->getXDateFormat());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip(false);

		$this->assertEquals(true, $obj0->getAnimation());
		$this->assertEquals("rgba(247,247,247,0.85)", $obj0->getBackgroundColor());
		$this->assertEquals(null, $obj0->getBorderColor());
		$this->assertEquals(3, $obj0->getBorderRadius());
		$this->assertEquals(1, $obj0->getBorderWidth());
		$this->assertEquals(null, $obj0->getCrosshairs());
		$this->assertEquals(null, $obj0->getDateTimeLabelFormats());
		$this->assertEquals(true, $obj0->getEnabled());
		$this->assertEquals(false, $obj0->getFollowPointer());
		$this->assertEquals(true, $obj0->getFollowTouchMove());
		$this->assertEquals("false", $obj0->getFooterFormat());
		$this->assertEquals(null, $obj0->getFormatter());
		$this->assertEquals(null, $obj0->getHeaderFormat());
		$this->assertEquals(500, $obj0->getHideDelay());
		$this->assertEquals(8, $obj0->getPadding());
		$this->assertEquals("<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", $obj0->getPointFormat());
		$this->assertEquals(null, $obj0->getPointFormatter());
		$this->assertEquals(null, $obj0->getPositioner());
		$this->assertEquals(true, $obj0->getShadow());
		$this->assertEquals("callout", $obj0->getShape());
		$this->assertEquals(false, $obj0->getShared());
		$this->assertEquals(null, $obj0->getSnap());
		$this->assertEquals(false, $obj0->getSplit());
		$this->assertEquals(["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], $obj0->getStyle());
		$this->assertEquals(false, $obj0->getUseHTML());
		$this->assertEquals(null, $obj0->getValueDecimals());
		$this->assertEquals(null, $obj0->getValuePrefix());
		$this->assertEquals(null, $obj0->getValueSuffix());
		$this->assertEquals(null, $obj0->getXDateFormat());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip(true);

		$obj->setAnimation(1);

		$res1 = ["animation" => 1];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res2 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res3 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setBorderRadius(74);

		$res4 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setBorderWidth(88);

		$res5 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setCrosshairs("db6c0bf6a6631359834bb9a0a5378bf1");

		$res6 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1"];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

		$res7 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setEnabled(0);

		$res8 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setFollowPointer(0);

		$res9 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setFollowTouchMove(1);

		$res10 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setFooterFormat("1ac32e030fc5ef01e703d5419170690e");

		$res11 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e"];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res12 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");

		$res13 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6"];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setHideDelay(15);

		$res14 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setPadding(95);

		$res15 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setPointFormat("332dd3de68dc71de0745837cbc13e217");

		$res16 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217"];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");

		$res17 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044"];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setPositioner("97c873b8ea05a822237283662ba3c751");

		$res18 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751"];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setShadow(1);

		$res19 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setShape("8c73a98a300905900337f535531dfca6");

		$res20 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6"];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setShared(1);

		$res21 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setSnap(18);

		$res22 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1, "snap" => 18];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setSplit(0);

		$res23 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1, "snap" => 18, "split" => 0];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res24 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1, "snap" => 18, "split" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setUseHTML(1);

		$res25 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1, "snap" => 18, "split" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setValueDecimals(79);

		$res26 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1, "snap" => 18, "split" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "valueDecimals" => 79];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");

		$res27 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1, "snap" => 18, "split" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "valueDecimals" => 79, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818"];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");

		$res28 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1, "snap" => 18, "split" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "valueDecimals" => 79, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db"];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");

		$res29 = ["animation" => 1, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 74, "borderWidth" => 88, "crosshairs" => "db6c0bf6a6631359834bb9a0a5378bf1", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "enabled" => 0, "followPointer" => 0, "followTouchMove" => 1, "footerFormat" => "1ac32e030fc5ef01e703d5419170690e", "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "hideDelay" => 15, "padding" => 95, "pointFormat" => "332dd3de68dc71de0745837cbc13e217", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "shadow" => 1, "shape" => "8c73a98a300905900337f535531dfca6", "shared" => 1, "snap" => 18, "split" => 0, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "valueDecimals" => 79, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db", "xDateFormat" => "e24debfa0bc8408e1dda05cbd537a072"];
		$this->assertEquals($res29, $obj->toArray());
	}

}
