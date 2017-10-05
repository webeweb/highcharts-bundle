<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Twig_Extension;
use Twig_SimpleFunction;
use WBW\HighchartsBundle\API\HighchartsChart;
use WBW\HighchartsBundle\API\HighchartsOptions;
use WBW\HighchartsBundle\Wrapper\HighchartsWrapper;

/**
 * Highcharts Twig extension.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Twig\Extension
 * @version 5.0.14
 * @final
 */
final class HighchartsTwigExtension extends Twig_Extension {

	/**
	 * Service name.
	 */
	const SERVICE_NAME = "wbwhighchartsbundle.twig.extension.highcharts";

	/**
	 * Container.
	 *
	 * @var ContainerInterface
	 */
	private $container;

	/**
	 * Wrapper.
	 *
	 * @var HightchartsWrapper
	 */
	private $wrapper;

	/**
	 * Constructor.
	 *
	 * @param ContainerInterface The container interface.
	 */
	public final function __construct(ContainerInterface $container = null) {
		$this->container = $container;
		$this->wrapper	 = new HighchartsWrapper();
	}

	/**
	 * Get the Twig functions.
	 *
	 * @return array Returns the Twig functions.
	 */
	public function getFunctions() {
		return [
			new Twig_SimpleFunction('highchartsChart', [$this, 'highchartsChartFunction'], ['is_safe' => ['html']]),
			new Twig_SimpleFunction('highchartsSetOptions', [$this, 'highchartsSetOptionsFunction'], ['is_safe' => ['html']]),
		];
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
		$output		 = [];
		$output[]	 = "<script type=\"text/javascript\">\n";
		$output[]	 = "Highcharts.chart('" . $selector . "', ";
		if ($this->isDevEnvironment()) {
			$output[] = $this->wrapper->unwrap(json_encode($chart, JSON_PRETTY_PRINT));
		} else {
			$output[] = $this->wrapper->unwrap(json_encode($chart));
		}
		$output[]	 = ");\n";
		$output[]	 = "</script>\n";

		// Return the output.
		return implode("", $output);
	}

	/**
	 * Displays an Highcharts.setOptions()
	 *
	 * @param HighchartsOptions $options The options.
	 * @return string Returns the Highcharts.setOptions().
	 */
	public function highchartsSetOptionsFunction(HighchartsOptions $options) {

		// Initialize the output.
		$output		 = [];
		$output[]	 = "<script type=\"text/javascript\">\n";
		$output[]	 = "Highcharts.setOptions(";
		if ($this->isDevEnvironment()) {
			$output[] = $this->wrapper->unwrap(json_encode($options, JSON_PRETTY_PRINT));
		} else {
			$output[] = $this->wrapper->unwrap(json_encode($options));
		}
		$output[]	 = ");\n";
		$output[]	 = "</script>\n";

		// Return the output.
		return implode("", $output);
	}

	/**
	 * Determines if the environement is dev.
	 *
	 * @return boolean Returns true in case of success, false otherwise.
	 */
	private function isDevEnvironment() {
		return !is_null($this->container) ? $this->container->get("kernel")->getEnvironment() === "dev" : false;
	}

}
