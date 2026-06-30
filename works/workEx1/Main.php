<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 30);
$subWeapon = new Gun("Mosin-Nagant", 5);

$mainWeapon->reload();
$subWeapon->reload();
// 現在の状態を表示
$mainWeapon->echoStatus();
$subWeapon->echoStatus();

$mainWeapon->fire();
$subWeapon->fire();
