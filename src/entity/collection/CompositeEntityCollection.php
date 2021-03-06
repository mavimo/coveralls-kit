<?php

/**
 * This file is part of CoverallsKit.
 *
 * (c) Noritaka Horio <holy.shared.design@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace coverallskit\entity\collection;

use Countable;
use coverallskit\CompositeEntity;
use IteratorAggregate;

/**
 * Interface CompositeEntityCollection
 */
interface CompositeEntityCollection extends CompositeEntity, IteratorAggregate, Countable
{
}
