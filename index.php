<?php
/**
 * Created by PhpStorm.
 * User: savicdragan15
 * Date: 3.3.18.
 * Time: 13.04
 */

require_once 'autoload.php';

echo "<div style='border: 1px solid black;padding: 15px;margin-bottom: 15px;'>";

echo "<h2> Example 1 </h2>";

echo "<hr>";

// Example 1
$man = new Man('Dragan', 'Male', 24);

var_dump($man);

echo "<hr>";

var_dump('Name: ' . $man->getName());
var_dump('Gender: ' . $man->getGender());
var_dump('Years: ' . $man->getYear());

echo "<hr>";

var_dump($man->speak());
var_dump($man->standUp());
var_dump($man->walk());
var_dump($man->sitDown());
var_dump($man->stopSpeak());

echo "</div>";

echo "<div style='border: 1px solid black;padding: 15px;margin-bottom: 15px;'>";

echo "<h2> Example 2 </h2>";

echo "<hr>";

// Example 2
$woman = new Woman();
$woman->setName('Milica');
$woman->setGender('Female');
$woman->setYear(25);
$woman->setIsMarried(true);

var_dump($woman);

echo "<hr>";

var_dump('Name: ' . $woman->getName());
var_dump('Gender: ' . $woman->getGender());
var_dump('Years: ' . $woman->getYear());
var_dump('Is married: ' . $woman->getIsMarried() ? true : false);

echo "<hr>";

var_dump($woman->walk());
var_dump($woman->speak());
var_dump($woman->sitDown());
var_dump($woman->stopSpeak());
var_dump($woman->standUp());

echo "</div>";