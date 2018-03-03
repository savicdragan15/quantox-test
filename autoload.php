<?php
/**
 * Created by PhpStorm.
 * User: savicdragan15
 * Date: 3.3.18.
 * Time: 13.05
 */

function interfaces_autloader($class) {
    include 'Classes/Interfaces/' . $class . '.php';
}

spl_autoload_register('interfaces_autloader');

spl_autoload_register(function ($class) {
    include 'Classes/' . $class . '.php';
});