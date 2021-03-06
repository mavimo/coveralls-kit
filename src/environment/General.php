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

/**
 * Class General
 */
final class General extends AbstractAdapter implements EnvironmentAdapter
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getBuildJobId()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isSupported()
    {
        return true;
    }
}
