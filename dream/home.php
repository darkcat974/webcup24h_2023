<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CakePHP: the rapid development PHP framework:</title>
        <link href="/favicon.ico" type="image/x-icon" rel="icon"><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	    <link rel="stylesheet" href="/css/normalize.min.css">
	    <link rel="stylesheet" href="/css/milligram.min.css">
	    <link rel="stylesheet" href="/css/cake.css">
	    <link rel="stylesheet" href="/css/home.css">
    </head>
    <body>
        <header>
            <div>
                <img  alt="Image" src="/img/butterfly.png" class="left" height="400" width="400">
                <h1 style="text-align:center;"><big><big><big>IA ONIRIX</h2>
                <h2 style="text-align:center;">Make your story in just few words</h2>
            </div>
            <ul>
            <li> <big><center> <a href="./the_ia.php">The IA</a>
            &emsp;<big> <a href="news.asp">The institute</a>
            </center>
            </ul>
        </header>
    </body>
</html>