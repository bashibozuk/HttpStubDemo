<?php
/**
 * Created by PhpStorm.
 * User: vasil
 * Date: 28.01.16
 * Time: 18:42
 */
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL | E_STRICT);

require_once 'vendor/autoload.php';

\HttpStub\Settings::set(\HttpStub\Settings::PATH, realpath(__DIR__ . '/.data'));
\HttpStub\Server\Request\RequestHandler::init([
    'request_type' => \HttpStub\Server\Request\Request::TYPE_REST
]);
\HttpStub\Server\Request\RequestHandler::handleRequest();
