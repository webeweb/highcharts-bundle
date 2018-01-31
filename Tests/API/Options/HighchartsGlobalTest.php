<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Options;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts global test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Options
 * @version 5.0.14
 */
final class HighchartsGlobalTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal(true);

        $this->assertEquals(null, $obj1->getDate());
        $this->assertEquals(null, $obj1->getVMLRadialGradientURL());
        $this->assertEquals(null, $obj1->getCanvasToolsURL());
        $this->assertEquals(null, $obj1->getGetTimezoneOffset());
        $this->assertEquals(null, $obj1->getTimezone());
        $this->assertEquals(null, $obj1->getTimezoneOffset());
        $this->assertEquals(null, $obj1->getUseUTC());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal(false);

        $this->assertEquals(null, $obj0->getDate());
        $this->assertEquals("http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png", $obj0->getVMLRadialGradientURL());
        $this->assertEquals("http://code.highcharts.com/{version}/modules/canvas-tools.js", $obj0->getCanvasToolsURL());
        $this->assertEquals(null, $obj0->getGetTimezoneOffset());
        $this->assertEquals(null, $obj0->getTimezone());
        $this->assertEquals(0, $obj0->getTimezoneOffset());
        $this->assertEquals(true, $obj0->getUseUTC());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal(true);

        $obj->setDate(["Date" => "44749712dbec183e983dcd78a7736c41"]);

        $res1 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setVMLRadialGradientURL("4fff8f495410c9be27e06b48ed58de29");

        $res2 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setCanvasToolsURL("a676408d51fa75bb7824a5b404b76cd7");

        $res3 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setGetTimezoneOffset("bc2cf98d144cf7852b57fe1dc90d1199");

        $res4 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setTimezone("b2c6cc48f97ccd71b16d31d88fc177a6");

        $res5 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199", "timezone" => "b2c6cc48f97ccd71b16d31d88fc177a6"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setTimezoneOffset(76);

        $res6 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199", "timezone" => "b2c6cc48f97ccd71b16d31d88fc177a6", "timezoneOffset" => 76];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setUseUTC(1);

        $res7 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199", "timezone" => "b2c6cc48f97ccd71b16d31d88fc177a6", "timezoneOffset" => 76, "useUTC" => 1];
        $this->assertEquals($res7, $obj->toArray());
    }

}
