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
                <img  alt="Image" src="../img/butterfly.png" class="center" height="400" width="400">
                </a>
                <h1 style="text-align:center;"><big><big><big>IA ONIRIX</h2>
                <h2 style="text-align:center;">Make your story in just few words</h2>
            </div>
            <ul>
            <li><a href="default.asp">Home</a> 
            <a href="news.asp">News</a> 
            <a href="contact.asp">Contact</a>
            <a href="about.asp">About</a></li>
            </ul>
        </header>
        <main class="main">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="column">
                            <div class="message default text-center">
                                <small>Please be aware that this page is for a fun event at EPITECH</small>
                            </div>
                            <div id="url-rewriting-warning" style="padding: 1rem; background: rgb(252, 235, 234); color: rgb(204, 31, 26); border-color: rgb(239, 87, 83); --darkreader-inline-bgimage: initial; --darkreader-inline-bgcolor: #390b08; --darkreader-inline-color: #e74843; --darkreader-inline-border-top: #91110d; --darkreader-inline-border-right: #91110d; --darkreader-inline-border-bottom: #91110d; --darkreader-inline-border-left: #91110d;" data-darkreader-inline-bgimage="" data-darkreader-inline-bgcolor="" data-darkreader-inline-color="" data-darkreader-inline-border-top="" data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom="" data-darkreader-inline-border-left="">
                                <ul>
                                    <li class="bullet problem">
                                        URL rewriting is not properly configured on your server.
                                    <br>
                                        <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/en/installation.html#url-rewriting">Help me configure it</a>
                                    <br>
                                        <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/en/development/configuration.html#general-configuration">I don't / can't use URL rewriting</a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="column">
                            <h3>Institue de l'IA</h3>
                            <p><small>Présentation de l'institue de l'IA</p>
                        </div>
                        <div class="column">
                            <h3>L'Avenir</h3>
                            <div>Présenation de l'avenir... blalbalbla... blalbalba</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column">
                            <h3>le générateur</h3>
                            <ul><li class="bullet problem">Dscription de se que sa fait/commant l'uttiliser!</li></ul>
                            <h1 class="titre1">test</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column links">
                            <h3>The Storry Teller (le nom du "générateur")</h3>
                            <a target="_blank" rel="noopener" href="https://openai.com/blog/chatgpt">le texte d'out come</a>
                            <a target="_blank" rel="noopener" href="https://chat.openai.com/auth/login"> texte to interpret here...</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="column links">
                            <h3>Crédits:</h3>
                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/nacaou%C3%A9l%C3%A9-romain-166165258//">Romain Nacaouélé</a>
                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/guillyann-ferrere-8aa31b22b/">Guillyann Ferrere</a>
                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/amdjad-ahmod-ali-92023b258/">Amdjad Ahlid-ali</a>
                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/florian-dajon-99a963231/">Florian Dajon</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script id="__debug_kit_script" data-id="95405a26-ae0c-4b70-a6a2-63b4e781cd8f" data-url="http://localhost:8765/" type="module" src="/debug_kit/js/inject-iframe.js?1674622148"></script>
        <iframe height="40" width="40" src="http://localhost:8765/debug-kit/toolbar/95405a26-ae0c-4b70-a6a2-63b4e781cd8f" style="position: fixed; bottom: 0px; right: 0px; border: 0px; outline: 0px; overflow: hidden; z-index: 99999; --darkreader-inline-border-top: initial; --darkreader-inline-border-right: initial; --darkreader-inline-border-bottom: initial; --darkreader-inline-border-left: initial; --darkreader-inline-outline: initial;" data-darkreader-inline-border-top="" data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom="" data-darkreader-inline-border-left="" data-darkreader-inline-outline=""></iframe>
    </body>
</html>
