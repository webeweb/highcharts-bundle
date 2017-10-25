<?php

/*
 * This file is part of the WBWHighchartsBundle package.
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

        $this->assertEquals(null, $obj1->getDate(), "The method getDate() does not return the expected value");
        $this->assertEquals(null, $obj1->getVMLRadialGradientURL(), "The method getVMLRadialGradientURL() does not return the expected value");
        $this->assertEquals(null, $obj1->getCanvasToolsURL(), "The method getCanvasToolsURL() does not return the expected value");
        $this->assertEquals(null, $obj1->getGetTimezoneOffset(), "The method getGetTimezoneOffset() does not return the expected value");
        $this->assertEquals(null, $obj1->getTimezone(), "The method getTimezone() does not return the expected value");
        $this->assertEquals(null, $obj1->getTimezoneOffset(), "The method getTimezoneOffset() does not return the expected value");
        $this->assertEquals(null, $obj1->getUseUTC(), "The method getUseUTC() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal(false);

        $this->assertEquals(null, $obj0->getDate(), "The method getDate() does not return the expected value");
        $this->assertEquals("http://code.highcharts.com/{version}/gfx/vml-radial-gradient.png", $obj0->getVMLRadialGradientURL(), "The method getVMLRadialGradientURL() does not return the expected value");
        $this->assertEquals("http://code.highcharts.com/{version}/modules/canvas-tools.js", $obj0->getCanvasToolsURL(), "The method getCanvasToolsURL() does not return the expected value");
        $this->assertEquals(null, $obj0->getGetTimezoneOffset(), "The method getGetTimezoneOffset() does not return the expected value");
        $this->assertEquals(null, $obj0->getTimezone(), "The method getTimezone() does not return the expected value");
        $this->assertEquals(0, $obj0->getTimezoneOffset(), "The method getTimezoneOffset() does not return the expected value");
        $this->assertEquals(true, $obj0->getUseUTC(), "The method getUseUTC() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
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
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with date");

        $obj->setVMLRadialGradientURL("4fff8f495410c9be27e06b48ed58de29");

        $res2 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with VML radial gradient URL");

        $obj->setCanvasToolsURL("a676408d51fa75bb7824a5b404b76cd7");

        $res3 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7"];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with canvas tools URL");

        $obj->setGetTimezoneOffset("bc2cf98d144cf7852b57fe1dc90d1199");

        $res4 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with get timezone offset");

        $obj->setTimezone("b2c6cc48f97ccd71b16d31d88fc177a6");

        $res5 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199", "timezone" => "b2c6cc48f97ccd71b16d31d88fc177a6"];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with timezone");

        $obj->setTimezoneOffset(30);

        $res6 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199", "timezone" => "b2c6cc48f97ccd71b16d31d88fc177a6", "timezoneOffset" => 30];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with timezone offset");

        $obj->setUseUTC(0);

        $res7 = ["Date" => ["Date" => "44749712dbec183e983dcd78a7736c41"], "VMLRadialGradientURL" => "4fff8f495410c9be27e06b48ed58de29", "canvasToolsURL" => "a676408d51fa75bb7824a5b404b76cd7", "getTimezoneOffset" => "bc2cf98d144cf7852b57fe1dc90d1199", "timezone" => "b2c6cc48f97ccd71b16d31d88fc177a6", "timezoneOffset" => 30, "useUTC" => 0];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with use UTC");
    }

}
