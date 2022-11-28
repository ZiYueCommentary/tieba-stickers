<?php
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

var img:string = '<img class="tieba_stickers" src="/assets/extensions/wvbdev-tieba-stickers/{TEXT1}.png" width="30px"/>';

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config){
            $config->BBCodes->addCustom(
                '[tieba={TEXT1}]', img
            );
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config){
            $config->BBCodes->addCustom(
                '[tieba]{TEXT1}[/tieba]', img
            );
        })
    ];
