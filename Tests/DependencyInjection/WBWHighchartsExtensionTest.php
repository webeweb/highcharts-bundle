<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\DependencyInjection;

use PHPUnit_Framework_TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use WBW\HighchartsBundle\DependencyInjection\WBWHighchartsExtension;
use WBW\HighchartsBundle\Twig\Extension\HighchartsTwigExtension;

/**
 * Highcharts extension test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\DependencyInjection
 * @version 5.0.14
 * @final
 */
final class WBWHighchartsExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Locate a resource.
	 *
	 * @param string $resource The resource.
	 * @return string Returns a resource path.
	 */
	public function locateResource($resource) {
		return "";
	}

	/**
	 * Test the load() method.
	 *
	 * @return void
	 */
	public function testLoad() {

		// We set a container builder with only the necessary.
		$container = new ContainerBuilder(new ParameterBag(["kernel.environment" => "dev"]));
		$container->set("kernel", $this);

		$obj = new WBWHighchartsExtension();

		$obj->load([], $container);

		$this->assertInstanceOf(HighchartsTwigExtension::class, $container->get(HighchartsTwigExtension::SERVICE_NAME), "The method load() does not load the expected service");
	}

}
