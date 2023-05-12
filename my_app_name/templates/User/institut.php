<?php
include "webroot/css/normalize.min.css";
include "webroot/css/milligram.min.css";
include "webroot/css/cake.css";
include "webroot/css/home.css";
?>
<?= $this->Html->css(['cake.css']) ?>
<?= $this->fetch('css') ?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="webroot/css/normalize.min.css">
	    <link rel="stylesheet" href="webroot/css/milligram.min.css">
	    <link rel="stylesheet" href="webroot/css/cake.css">
	    <link rel="stylesheet" href="webroot/css/home.css">
        <meta charset="utf-8">
        <title>AI Institut</title>
    </head>
    <body>
        <header>
            <br>
            <h1 style="text-align:center;">{IA Institut by EPITA & ISG}</h1>
            <br>
        </header>
        <main class="main">
            <div class="box-wrapper">
                <div id="box1">
                    <h3>IA Institut :</h3>
	            </div>
	            <div id="box3">
                    <div class="content">
                        <p>
                            IA Institut by EPITA & ISG est une école à la formation pluridisciplinaire
                            qui se place résolument à la hauteur de leurs enjeux, techniques, éthiques et humains,
                            avec le choix entre une formation en 5 ou 6 ans,
                            sanctionnée par un double diplôme, et une formation diplômante en 3 ans.
                        </p> <br>
                        <p>
                            IA Institut,
                            en fédérant autour de lui deux Grandes Ecoles sur le sujet de l'IA et des Data,
                            prend en compte toute sa complexité
                            et réunit les meilleurs talents du monde académique et du monde professionnel.
                        </p> <br>
                        <p>Le Programme Grande École de l'IA Institut a été conçu pour les étudiants qui visent un diplôme d'ingénieur ou un Grade de Master d'une école de management mais qui veulent également faire de l'Intelligence Artificielle et de la Data.</p> <br>
                        <p>
                            Dès la 1re année,
                            l'étudiant est en immersion totale dans l'Intelligence Artificielle et la Data,
                            afin de devenir un expert de l'IA et du Data engineering.
                            En fin de 2e année, l'étudiant devra choisir s'il souhaite préparer une entrée à l'EPITA en vue d'un diplôme d'ingénieur ou une entrée à l'ISG pour un diplôme de manager.
                            La 3e année sera consacrée à la préparation à l'entrée à l'école choisie.
                            Le 2e semestre se déroule dans une université étrangère partenaire ou encore en stage.
                        </p><br><br>
                        <div class="wrapper_image">
                        <img src="https://newsroom.ionis-group.com/wp-content/uploads/2022/09/LOGO_IA_INSTITUT_RVB_BLANC.png" width="200"height="200">
                        <img src="data:image/png;base64,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" width="200" height="200">
                        </div>
                    </div>
	            </div>
	        </div>
            <br>
            <button type="button" id="btn" onclick="window.location.href='https://www.google.com/'"> <big><big>main menu</big></big></button>
        </main>
    </body>
</html>
