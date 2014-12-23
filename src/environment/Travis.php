<?php

/**
 * This file is part of CoverallsKit.
 *
 * (c) Noritaka Horio <holy.shared.design@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace coverallskit\environment;

use coverallskit\Environment;


/**
 * Class Travis
 * @package coverallskit\environment
 */
class Travis
{

    const TRAVIS = 'TRAVIS';


    /**
     * @var \coverallskit\Environment
     */
    private $environment;


    /**
     * @param Environment $environment
     */
    public function __construct(Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * @return bool
     */
    public function isSupported()
    {
        $travis = $this->environment->get('TRAVIS');
        return $travis === 'true';
    }

}