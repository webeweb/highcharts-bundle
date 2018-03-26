<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts chart test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API
 * @version 5.0.14
 */
final class HighchartsChartTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(true);

        $this->assertNull($obj1->getAccessibility());
        $this->assertNull($obj1->getChart());
        $this->assertNull($obj1->getColors());
        $this->assertNull($obj1->getCredits());
        $this->assertNull($obj1->getData());
        $this->assertNull($obj1->getDefs());
        $this->assertNull($obj1->getDrilldown());
        $this->assertNull($obj1->getExporting());
        $this->assertNull($obj1->getLabels());
        $this->assertNull($obj1->getLegend());
        $this->assertNull($obj1->getLoading());
        $this->assertNull($obj1->getNavigation());
        $this->assertNull($obj1->getNoData());
        $this->assertNull($obj1->getPane());
        $this->assertNull($obj1->getPlotOptions());
        $this->assertNull($obj1->getResponsive());
        $this->assertNull($obj1->getSeries());
        $this->assertNull($obj1->getSubtitle());
        $this->assertNull($obj1->getTitle());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getXAxis());
        $this->assertNull($obj1->getYAxis());
        $this->assertNull($obj1->getZAxis());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $this->assertNull($obj0->getAccessibility());
        $this->assertNull($obj0->getChart());
        $this->assertEquals(["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], $obj0->getColors());
        $this->assertNull($obj0->getCredits());
        $this->assertNull($obj0->getData());
        $this->assertNull($obj0->getDefs());
        $this->assertNull($obj0->getDrilldown());
        $this->assertNull($obj0->getExporting());
        $this->assertNull($obj0->getLabels());
        $this->assertNull($obj0->getLegend());
        $this->assertNull($obj0->getLoading());
        $this->assertNull($obj0->getNavigation());
        $this->assertNull($obj0->getNoData());
        $this->assertNull($obj0->getPane());
        $this->assertNull($obj0->getPlotOptions());
        $this->assertNull($obj0->getResponsive());
        $this->assertNull($obj0->getSeries());
        $this->assertNull($obj0->getSubtitle());
        $this->assertNull($obj0->getTitle());
        $this->assertNull($obj0->getTooltip());
        $this->assertNull($obj0->getXAxis());
        $this->assertNull($obj0->getYAxis());
        $this->assertNull($obj0->getZAxis());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $obj->newAccessibility();
        $obj->newChart();
        $obj->newCredits();
        $obj->newData();
        $obj->newDrilldown();
        $obj->newExporting();
        $obj->newLabels();
        $obj->newLegend();
        $obj->newLoading();
        $obj->newNavigation();
        $obj->newNoData();
        $obj->newPlotOptions();
        $obj->newResponsive();
        $obj->newSubtitle();
        $obj->newTitle();
        $obj->newTooltip();
        $obj->newZAxis();

        $obj->clear();

        $res = ["accessibility" => [], "chart" => [], "credits" => [], "data" => [], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "plotOptions" => [], "responsive" => [], "subtitle" => [], "title" => [], "tooltip" => [], "zAxis" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newAccessibility() method.
     *
     * @return void.
     */
    public function testNewAccessibility() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newAccessibility();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility::class, $res);
    }

    /**
     * Tests the newChart() method.
     *
     * @return void.
     */
    public function testNewChart() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newChart();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart::class, $res);
    }

    /**
     * Tests the newCredits() method.
     *
     * @return void.
     */
    public function testNewCredits() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newCredits();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits::class, $res);
    }

    /**
     * Tests the newData() method.
     *
     * @return void.
     */
    public function testNewData() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newData();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData::class, $res);
    }

    /**
     * Tests the newDrilldown() method.
     *
     * @return void.
     */
    public function testNewDrilldown() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newDrilldown();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown::class, $res);
    }

    /**
     * Tests the newExporting() method.
     *
     * @return void.
     */
    public function testNewExporting() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newExporting();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting::class, $res);
    }

    /**
     * Tests the newLabels() method.
     *
     * @return void.
     */
    public function testNewLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels::class, $res);
    }

    /**
     * Tests the newLegend() method.
     *
     * @return void.
     */
    public function testNewLegend() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newLegend();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend::class, $res);
    }

    /**
     * Tests the newLoading() method.
     *
     * @return void.
     */
    public function testNewLoading() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newLoading();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading::class, $res);
    }

    /**
     * Tests the newNavigation() method.
     *
     * @return void.
     */
    public function testNewNavigation() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newNavigation();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation::class, $res);
    }

    /**
     * Tests the newNoData() method.
     *
     * @return void.
     */
    public function testNewNoData() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newNoData();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData::class, $res);
    }

    /**
     * Tests the newPlotOptions() method.
     *
     * @return void.
     */
    public function testNewPlotOptions() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newPlotOptions();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions::class, $res);
    }

    /**
     * Tests the newResponsive() method.
     *
     * @return void.
     */
    public function testNewResponsive() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newResponsive();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive::class, $res);
    }

    /**
     * Tests the newSubtitle() method.
     *
     * @return void.
     */
    public function testNewSubtitle() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newSubtitle();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle::class, $res);
    }

    /**
     * Tests the newTitle() method.
     *
     * @return void.
     */
    public function testNewTitle() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle::class, $res);
    }

    /**
     * Tests the newTooltip() method.
     *
     * @return void.
     */
    public function testNewTooltip() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newTooltip();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip::class, $res);
    }

    /**
     * Tests the newZAxis() method.
     *
     * @return void.
     */
    public function testNewZAxis() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(false);

        $res = $obj->newZAxis();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsChart(true);

        $obj->setAccessibility(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility());

        $res1 = ["accessibility" => []];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setChart(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart());

        $res2 = ["accessibility" => [], "chart" => []];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res3 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setCredits(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits());

        $res4 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => []];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setData(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData());

        $res5 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => []];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setDefs(["defs" => "cd8fc2597193b4c938e7ff50062936e3"]);

        $res6 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"]];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setDrilldown(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown());

        $res7 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => []];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setExporting(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting());

        $res8 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => []];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels());

        $res9 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => []];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setLegend(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend());

        $res10 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => []];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setLoading(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading());

        $res11 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => []];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setNavigation(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation());

        $res12 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => []];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setNoData(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData());

        $res13 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => []];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setPane(["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"]);

        $res14 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"]];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setPlotOptions(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions());

        $res15 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setResponsive(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive());

        $res16 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

        $res17 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"]];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setSubtitle(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle());

        $res18 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => []];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setTitle(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle());

        $res19 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => []];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setTooltip(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip());

        $res20 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => []];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setXAxis(["xAxis" => "b919a806dedef37999b45653bdde66c6"]);

        $res21 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"]];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setYAxis(["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]);

        $res22 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"], "yAxis" => ["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setZAxis(new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis());

        $res23 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"], "yAxis" => ["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"], "zAxis" => []];
        $this->assertEquals($res23, $obj->toArray());
    }

}
