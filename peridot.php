<?php

use cloak\peridot\CloakPlugin;
use Evenement\EventEmitterInterface;
use expect\peridot\ExpectPlugin;
use holyshared\peridot\FileFixturePlugin;
use holyshared\peridot\temporary\TemporaryPlugin;
use Peridot\Reporter\Dot\DotReporterPlugin;

return function (EventEmitterInterface $emitter) {
    $dot = new DotReporterPlugin($emitter);
    ExpectPlugin::create()->registerTo($emitter);
    TemporaryPlugin::create()->registerTo($emitter);

    $fixturePlugin = new FileFixturePlugin(__DIR__ . '/spec/fixtures/.fixtures.toml');
    $fixturePlugin->registerTo($emitter);

    if (defined('HHVM_VERSION') === false) {
        CloakPlugin::create('.cloak.toml')->registerTo($emitter);
    }
};
