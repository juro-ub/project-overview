<?php
require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">        
        <title>Projektübersicht – samy.uber.space</title>
        <meta name="description" content="Übersicht meiner Webprojekte.">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= assetUrl('css/main.css') ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= assetUrl('assets/favicon.png') ?>">
    </head>
    <body class="body-wrapper">

        <h1>Meine Webprojekte auf samy.uber.space</h1>

        <p>Hallo, ich bin Julian – Informatiker aus Tübingen mit einer Leidenschaft für Webentwicklung und kleine kreative Nebenprojekte. 
            Diese Seite gibt dir einen Überblick über meine aktuellen Webprojekte, die ich in meiner Freizeit entwickle und pflege.</p>

        <table class="project-table">
            <thead>
                <tr>
                    <th>Projekt</th>
                    <th>Beschreibung</th>
                </tr>
            </thead>
            <tbody>
                <!--
                <tr>
                    <td><a href="<?= getBaseUrl() ?>samy/">🐾 Samys Seite</a></td>
                    <td>Persönliche Homepage für meinen Kater Samy mit Tagebuch, Bildern und Videos.</td>
                </tr>
                -->
                <tr>
                    <td><a href="<?= getBaseUrl() ?>postkarten/">📬 Virtuelle Postkarten</a></td>
                    <td>Erstelle und teile frei gestaltbare Postkarten mit Emojis, Texten und Bildern.</td>
                </tr>
            </tbody>
        </table>

        <div class="link-wrapper">
            <h2>🔗 Weitere Links</h2>
            <p><a href="https://github.com/juro-ub" target="_blank">Mein GitHub-Profil ansehen</a></p>
        </div>

        <footer class="footer">
            <p><a href="impressum.php">Impressum</a> | <a href="datenschutz.php">Datenschutz</a></p>
        </footer>
    </body>
</html>