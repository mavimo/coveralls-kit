<?php

/**
 * This file is part of CoverallsKit.
 *
 * (c) Noritaka Horio <holy.shared.design@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace coveralls\spec;

use coveralls\entity\repository\Branch;
describe('Branch', function() {
    before(function() {
        $this->branch = new Branch([
            'name' => 'master',
            'remote' => false
        ]);
    });
    describe('__toString', function() {
        it('should return string value', function () {
            $value = (string) $this->branch;
            expect($value)->toEqual('master');
        });
    });
});
