<?php
/*
Plugin Name: MQTT - Cadastro de Clientes, Dispositivos e Mídias
Description: Plugin para cadastro de clientes, dispositivos e mídias
Version: 0.0.1
Author: G28 - Guilherme Pereira
Namespace: G28\MqttGestaoClientes
*/

if ( ! defined( 'ABSPATH' ) ) exit;

require "vendor/autoload.php";

use function G28\MqttGestaoClientes\runPlugin;

runPlugin( __FILE__ );