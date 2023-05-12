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
include "webroot/css/normalize.min.css";
include "webroot/css/milligram.min.css";
include "webroot/css/cake.css";
include "webroot/css/home.css";

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
        <meta charset="utf-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CakePHP: the rapid development PHP framework:</title>
        <link href="/favicon.ico" type="image/x-icon" rel="icon"><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	    <link rel="stylesheet" href="/css/normalize.min.css">
	    <link rel="stylesheet" href="/css/milligram.min.css">
	    <link rel="stylesheet" href="/css/cake.css">
	    <link rel="stylesheet" href="/css/home.css">
        <script>
        function search_animal() {
            var tab_phrase_avenir = [
        "Le soleil brille aujourd'hui.",
        "Je suis en train de manger un sandwich.",
        "La pluie tombe doucement sur le toit.",
        "La musique est une source d'inspiration pour moi.",
        "Il fait chaud et humide dehors.",
        "Les oiseaux chantent dans les arbres.",
        "Je suis fatigué après une longue journée de travail.",
        "Je suis en train de lire un livre passionnant.",
        "J'ai hâte de partir en vacances cet été.",
        "Le café est chaud et réconfortant.",
        "Je suis reconnaissant pour les amis et la famille dans ma vie.",
        "Le silence peut parfois être plus puissant que les mots.",
        "La mer est magnifique et apaisante.",
        "Je suis excité à l'idée de commencer un nouveau projet.",
        "La vie est un voyage et chaque jour est une nouvelle étape.",
        "Le rire est contagieux et peut égayer une journée sombre.",
        "Les arbres sont en train de bourgeonner et de fleurir.",
        "Il est important de prendre soin de soi et de sa santé mentale.",
        "La vie est courte, il faut en profiter au maximum.",
        "L'amour est la force la plus puissante du monde.",
        "Le ciel est bleu et dégagé aujourd'hui.",
        "Le temps passe rapidement, il est important de savourer chaque moment.",
        "Les erreurs sont des occasions d'apprendre et de grandir.",
        "La créativité est une source infinie d'inspiration et de joie.",
        "Le travail d'équipe est essentiel pour accomplir de grandes choses.",
        "Les petits gestes de gentillesse peuvent avoir un grand impact sur le monde.",
        "La vie est pleine de surprises, bonnes et mauvaises.",
        "L'espoir est un élément vital pour surmonter les moments difficiles.",
        "Les étoiles scintillent dans le ciel nocturne.",
        "Il est important de prendre des pauses régulières pour se reposer et se ressourcer.",
        "La beauté peut être trouvée dans les endroits les plus inattendus.",
        "La patience est une vertu qui peut être difficile à cultiver mais qui est précieuse.",
        "La nourriture est un moyen de connecter les gens et de célébrer la vie.",
        "Le respect et la compréhension mutuelle sont essentiels pour vivre en paix.",
        "Les souvenirs sont précieux et peuvent nous aider à traverser les moments difficiles.",
        "Le changement est inévitable, il faut l'accepter et s'adapter.",
        "Les animaux peuvent apporter de la joie et de la compagnie dans nos vies.",
        "La simplicité peut être un moyen puissant de trouver la paix intérieure.",
        "La connaissance est un cadeau qui peut être partagé avec les autres.",
        "La foi peut être une source de force et de réconfort dans les moments difficiles.",
        "La diversité est une richesse qui peut nous aider à grandir et à nous enrichir.",
        "La gratitude peut nous aider à voir la beauté dans les moments les plus sombres."
        ];
        var resultat = tab_phrase_avenir[Math.floor(Math.random() * (tab_phrase_avenir.length - 1))];
        alert(resultat);
        }
        </script>
    </head>
    <body>
        <header>
            <div>
                </a>
                <h1 style="text-align:center;"><big><big><big>IA ONIRIX</h2>
                <h2 style="text-align:center;">Your futur is on your hand</h2>
            </div>
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
                            <h3>L'Avenir</h3>
                            <input type="text" id="name" name="name" required
                                minlength="4" maxlength="1000" size="1000" value="Write your dream here">
                            <button onclick="search_animal()" class="launch_button" type="button"> OK</button>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <footer>
                       <small>
                            <h3>Crédits:</h3>
                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/nacaou%C3%A9l%C3%A9-romain-166165258//">Romain Nacaouélé</a>
                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/guillyann-ferrere-8aa31b22b/">Guillyann Ferrere</a>
                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/amdjad-ahmod-ali-92023b258/">Amdjad Ahlid-ali</a>
                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/in/florian-dajon-99a963231/">Florian Dajon</a>
                        </small>
                    </footer>
        </main>
    </body>
</html>