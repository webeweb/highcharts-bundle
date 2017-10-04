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
use WBW\HighchartsBundle\API\Chart\HighchartsExporting;
use WBW\HighchartsBundle\API\Chart\Exporting\HighchartsButtons;

/**
 * Highcharts exporting test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsExportingTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsExporting(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newButtons() method.
	 *
	 * @return void.
	 */
	public function testNewButtons() {

		$obj = new HighchartsExporting(false);

		$res = $obj->newButtons();
		$this->assertInstanceOf(HighchartsButtons::class, $res, "The method newButtons() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsExporting(false);

		$res = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->newButtons();

		$res1 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "buttons" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with buttons");

		$obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);

		$res2 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with chart options");

		$obj->setError("cb5e100e5a9a3e7f6d1fd97512215282");

		$res3 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "error" => "cb5e100e5a9a3e7f6d1fd97512215282"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with error");

		$obj->setFormAttributes(["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"]);

		$res4 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"]];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with form attributes");

		$obj->setMenuItemDefinitions(["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"]);

		$res5 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"]];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with menu item definitions");

		$obj->setSourceHeight(33);

		$res6 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "sourceHeight" => 33];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with source height");

		$obj->setSourceWidth(7);

		$res7 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "sourceHeight" => 33, "sourceWidth" => 7];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with source width");

		$obj->setWidth(2);

		$res8 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "buttons" => [], "chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => ["formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"], "menuItemDefinitions" => ["menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"], "sourceHeight" => 33, "sourceWidth" => 7, "width" => 2];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with width");
	}

}
