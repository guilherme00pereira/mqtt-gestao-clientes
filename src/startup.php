<?php

namespace G28\MqttGestaoClientes;


if (!function_exists(__NAMESPACE__ . 'runPlugin')) {
    function runPlugin($root): void
    {
        $plugin = Plugin::getInstance();
        $plugin->start($root);

        add_action('plugins_loaded', function () {
            new Admin();
        });
    }

}