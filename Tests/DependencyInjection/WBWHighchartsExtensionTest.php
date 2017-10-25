<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\DependencyInjection;

use PHPUnit_Framework_TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use WBW\Bundle\HighchartsBundle\DependencyInjection\WBWHighchartsExtension;
use WBW\Bundle\HighchartsBundle\Twig\Extension\HighchartsTwigExtension;

/**
 * Highcharts extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\DependencyInjection
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
     * Tests the load() method.
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
