<?php

use Pimple\Container;

$container = new Container();

$container['conexao'] = function() {
    return new \Source\Conexao("mysql:dbname=prog;host=localhost", "root", "rancid");
};
$container['curso'] = function($c) {
    return new \Source\Curso($c['conexao']);
};