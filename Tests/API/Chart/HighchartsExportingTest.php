<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use WBW\HighchartsBundle\API\Chart\HighchartsExporting;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts exporting test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsExportingTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsExporting(false);

		$res = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setChartOptions("0788f6dc968cd56a32e6d11f1134e345");

		$res1 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with chart options');

		$obj->setError("cb5e100e5a9a3e7f6d1fd97512215282");

		$res2 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "chartOptions" => "0788f6dc968cd56a32e6d11f1134e345", "error" => "cb5e100e5a9a3e7f6d1fd97512215282"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with error');

		$obj->setFormAttributes("7b7fc4307d3a34d310ab661dc7febf59");

		$res3 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "chartOptions" => "0788f6dc968cd56a32e6d11f1134e345", "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with form attributes');

		$obj->setMenuItemDefinitions("09a79ad3f58b50c3087cd936eabb5cc3");

		$res4 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "chartOptions" => "0788f6dc968cd56a32e6d11f1134e345", "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59", "menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with menu item definitions');

		$obj->setSourceHeight(25);

		$res5 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "chartOptions" => "0788f6dc968cd56a32e6d11f1134e345", "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59", "menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3", "sourceHeight" => 25];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with source height');

		$obj->setSourceWidth(21);

		$res6 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "chartOptions" => "0788f6dc968cd56a32e6d11f1134e345", "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59", "menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3", "sourceHeight" => 25, "sourceWidth" => 21];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with source width');

		$obj->setWidth(90);

		$res7 = ["allowHTML" => false, "enabled" => true, "fallbackToExportServer" => true, "filename" => "chart", "libURL" => "https://code.highcharts.com/{version}/lib", "printMaxWidth" => 780, "scale" => 2, "type" => "image/png", "url" => "https://export.highcharts.com", "chartOptions" => "0788f6dc968cd56a32e6d11f1134e345", "error" => "cb5e100e5a9a3e7f6d1fd97512215282", "formAttributes" => "7b7fc4307d3a34d310ab661dc7febf59", "menuItemDefinitions" => "09a79ad3f58b50c3087cd936eabb5cc3", "sourceHeight" => 25, "sourceWidth" => 21, "width" => 90];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with width');
	}
}

