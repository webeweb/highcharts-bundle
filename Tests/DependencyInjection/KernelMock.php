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

/**
 * Kernel mock.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\DependencyInjection
 * @version 5.0.14
 * @final
 */
final class KernelMock {

	public function locateResource($resource) {
		return "";
	}

}
