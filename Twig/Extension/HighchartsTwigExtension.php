<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Twig\Extension;

use Twig_Extension;
use Twig_SimpleFunction;
use WBW\Bundle\HighchartsBundle\API\HighchartsChart;
use WBW\Bundle\HighchartsBundle\API\HighchartsOptions;
use WBW\Bundle\HighchartsBundle\Wrapper\HighchartsWrapper;
use WBW\Library\Core\Exception\IO\FileNotFoundException;

/**
 * Highcharts Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Twig\Extension
 * @final
 */
final class HighchartsTwigExtension extends Twig_Extension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.highchartsbundle.twig.extension.highcharts";

    /**
     * Directory.
     *
     * @var string
     */
    private $directory;

    /**
     * Environment.
     *
     * @var string
     */
    private $environment;

    /**
     * Wrapper.
     *
     * @var HightchartsWrapper
     */
    private $wrapper;

    /**
     * Constructor.
     *
     * @param string $directory The directory.
     * @param string $environment The environment.
     */
    public function __construct($directory, $environment) {
        $this->directory   = $directory;
        $this->environment = $environment;
        $this->wrapper     = new HighchartsWrapper();
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction('highchartsChart', [$this, 'highchartsChartFunction'], ['is_safe' => ['html']]),
            new Twig_SimpleFunction('highchartsScript', [$this, 'highchartsScriptFunction'], ['is_safe' => ['html']]),
            new Twig_SimpleFunction('highchartsSetOptions', [$this, 'highchartsSetOptionsFunction'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * Get the resources directory.
     *
     * @return string Returns the resources directory.
     */
    private function getResourcesDirectory() {
        return $this->directory . "/Resources";
    }

    /**
     * Displays an Highcharts.chart().
     *
     * @param string $selector The selector.
     * @param HighchartsChart $chart The chart.
     * @return string Returns the Highcharts.chart().
     */
    public function highchartsChartFunction($selector, HighchartsChart $chart) {

        // Initialize the output.
        $output   = [];
        $output[] = "<script type=\"text/javascript\">\n";
        $output[] = "Highcharts.chart('" . $selector . "', ";
        if ($this->isDevEnvironment()) {
            $output[] = $this->wrapper->unwrap(json_encode($chart, JSON_PRETTY_PRINT));
        } else {
            $output[] = $this->wrapper->unwrap(json_encode($chart));
        }
        $output[] = ");\n";
        $output[] = "</script>";

        // Return the output.
        return implode("", $output);
    }

    /**
     * Displays an Highcharts script.
     *
     * @param string $script The scriptname.
     * @param string $subdirectory The sub directory.
     * @return string Returns the Highcharts script.
     * @throws FileNotFoundException Throws a file not found exception if the script is not found.
     */
    public function highchartsScriptFunction($script, $subdirectory = "code") {

        // Initialize the filename.
        $filename = implode("/", ["highcharts-5.0.14", $subdirectory, $script . ".js"]);

        // Initialize and check the filepath.
        $filepath = $this->getResourcesDirectory() . "/public/" . $filename;
        if (!file_exists($filepath)) {
            throw new FileNotFoundException($filename);
        }

        // Return the output.
        return "<script src=\"/bundles/highcharts/" . $filename . "\" type=\"text/javascript\"></script>";
    }

    /**
     * Displays an Highcharts.setOptions()
     *
     * @param HighchartsOptions $options The options.
     * @return string Returns the Highcharts.setOptions().
     */
    public function highchartsSetOptionsFunction(HighchartsOptions $options) {

        // Initialize the output.
        $output   = [];
        $output[] = "<script type=\"text/javascript\">\n";
        $output[] = "Highcharts.setOptions(";
        if ($this->isDevEnvironment()) {
            $output[] = $this->wrapper->unwrap(json_encode($options, JSON_PRETTY_PRINT));
        } else {
            $output[] = $this->wrapper->unwrap(json_encode($options));
        }
        $output[] = ");\n";
        $output[] = "</script>";

        // Return the output.
        return implode("", $output);
    }

    /**
     * Determines if the environement is dev.
     *
     * @return boolean Returns true in case of success, false otherwise.
     */
    private function isDevEnvironment() {
        return $this->environment === "dev";
    }

}
