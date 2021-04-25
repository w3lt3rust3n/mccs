<?php
// require_once("session.php");
session_start();
require_once("./inc/registerFn.php");
include("./inc/header.php");

?>
<div class="container card border-primary mb-3" style="max-width: 20rem;">">
    <div class="html-title no-gutters card-header">
        <h1 class="lang-title">HTML - HyperText Markup Language</h1>
        <hr>
        <div class="html-chapter no-gutters card-body">
            <h3 class="card-title">Liste des balises</h3>
        </div>
        <div class="html-container col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 no-gutters" id="html">
            <div class="content col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">

                <ol id="html-1">
                    Balises de premier niveau
                </ol>
                <ul>
                    <li><code>&lthtml&gt</code> Balise principale</li>
                    <li><code>&lthead&gt</code> En-tête de la page</li>
                    <li><code>&ltbody&gt</code> Corps de la page</li>
                </ul>

                <ol id="html-2">
                    Balises d'en-tête
                </ol>
                <ul>
                    <li><code>&ltlink&gt</code> Liaison d'une feuille de style</li>
                    <li><code>&ltmeta&gt</code> Métadonnées de la page web (charset, mots-clés, etc...)</li>
                    <li><code>&ltscript&gt</code> Code JavaScript</li>
                    <li><code>&ltstyle&gt</code> Code CSS</li>
                    <li><code>&lttitle&gt</code> Titre de la page</li>
                </ul>

                <ol id="html-3">
                    Balises de structuration du texte
                </ol>
                <ul>
                    <li><code>&ltabbr&gt</code> Abréviation</li>
                    <li><code>&ltblockquotea&gt</code> Citation (longue)</li>
                    <li><code>&ltcite&gt</code> Citation du titre d'une oeuvre ou d'un évènement</li>
                    <li><code>&ltq&gt</code> Citation (courte)</li>
                    <li><code>&ltsup&gt</code> Exposant</li>
                    <li><code>&ltsub&gt</code> Indice</li>
                    <li><code>&ltstrong&gt</code> Mise en valeur forte</li>
                    <li><code>&ltem&gt</code> Mise en valeur normale</li>
                    <li><code>&ltmark&gt</code> Mise en valeur visuelle</li>
                    <li><code>&lth1&gt</code> Titre de niveau 1</li>
                    <li><code>&lth2&gt</code> Titre de niveau 2</li>
                    <li><code>&lth3&gt</code> Titre de niveau 3</li>
                    <li><code>&lth4&gt</code> Titre de niveau 4</li>
                    <li><code>&lth5&gt</code> Titre de niveau 5</li>
                    <li><code>&lth6&gt</code> Titre de niveau 6</li>
                    <li><code>&ltimg&gt</code> Image</li>
                    <li><code>&ltfigure&gt</code> Figure (image, code, etc.)</li>
                    <li><code>&ltfigcaption&gt</code> Description de la figure</li>
                    <li><code>&ltaudio&gt</code> Son</li>
                    <li><code>&ltvideo&gt</code> Vidéo</li>
                    <li><code>&ltsource&gt</code> Format pour les balises &ltaudio&gt et &ltvideo&gt</li>
                    <li><code>&lta&gt</code> Lien hypertexte</li>
                    <li><code>&ltbr&gt</code> Retour à la ligne</li>
                    <li><code>&ltaddress&gt</code> Adresse de contact</li>
                    <li><code>&ltdel&gt</code> Texte supprimé</li>
                    <li><code>&ltins&gt</code> Texte inséré</li>
                    <li><code>&ltdfn&gt</code> Définition</li>
                    <li><code>&ltkbd&gt</code> Saisie clavier</li>
                    <li><code>&ltpre&gt</code> Affichage formaté (pour les codes sources)</li>
                    <li><code>&ltprogress&gt</code> Barre de progression</li>
                    <li><code>&lttime&gt</code> Date ou heure</li>
                </ul>

                <ol id="html-4">
                    Balises de liste
                </ol>
                <ul>
                    <li><code>&ltul&gt</code> Listes à puces, non numérotée</li>
                    <li><code>&ltol&gt</code> Liste numérotée</li>
                    <li><code>&ltli&gt</code> Eléments de la liste à puces</li>
                    <li><code>&ltdl&gt</code> Liste de définitions</li>
                    <li><code>&ltdt&gt</code> Terme à définir</li>
                    <li><code>&ltdd&gt</code> Définition du terme</li>
                </ul>

                <ol id="html-5">
                    Balises de tableau
                </ol>
                <ul>
                    <li><code>&lttable&gt</code> Tableau </li>
                    <li><code>&ltcaption&gt</code> Titre du tableau </li>
                    <li><code>&lttr&gt</code> Ligne de tableau </li>
                    <li><code>&ltth&gt</code> Cellule d'en-tête </li>
                    <li><code>&lttd&gt</code> Cellule </li>
                    <li><code>&ltthead&gt</code> Section de l'en-tête du tableau </li>
                    <li><code>&lttbody&gt</code> Section du corps du tableau </li>
                    <li><code>&lttfoot&gt</code> Section du pied du tableau </li>
                </ul>

                <ol id="html-6">
                    Balises de formulaire
                </ol>
                <ul>
                    <li><code>&ltform&gt</code> Formulaire </li>
                    <li><code>&ltfieldset&gt</code> Groupe de champs </li>
                    <li><code>&ltlegend&gt</code> Titre d'un groupe de champs </li>
                    <li><code>&ltlabel&gt</code> Libellé d'un champs </li>
                    <li><code>&ltinput&gt</code> Champ de formulaire (texte, mot de passe, etc) </li>
                    <li><code>&lttextarea&gt</code> Zone de saisie multiligne </li>
                    <li><code>&ltselect&gt</code> Liste déroulante </li>
                    <li><code>&ltoption&gt</code> Elément d'une liste déroulante </li>
                    <li><code>&ltoptgroup&gt</code> Groupe d'éléments d'une liste déroulante </li>
                </ul>

                <ol id="html-7">
                    Balises sectionnantes
                </ol>
                <ul>
                    <li><code>&ltheader&gt</code> En-tête </li>
                    <li><code>&ltnav&gt</code> Liens principaux de navigation </li>
                    <li><code>&ltfooter&gt</code> Pied de page </li>
                    <li><code>&ltsection&gt</code> Section de page </li>
                    <li><code>&ltarticle&gt</code> Article (contenu autonome) </li>
                    <li><code>&ltaside&gt</code> Informations complémentaires </li>
                </ul>

                <ol id="html-8">
                    Balises génériques
                </ol>
                <ul>
                    <li><code>&ltspan&gt</code> Balise générique de type inline </li>
                    <li><code>&ltdiv&gt</code> Balise générique de type block </li>
                </ul>
            </div>

            <div class="index-container col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <p class="index-title">Index</p>
                <ol>
                    <li><a href="#html-1"> Balises de premier niveau </a></li>
                    <li><a href="#html-2"> Balises d'en-tête </a></li>
                    <li><a href="#html-3"> Balises de structuration du texte </a></li>
                    <li><a href="#html-4"> Balises de listes </a></li>
                    <li><a href="#html-5"> Balises de tableau </a></li>
                    <li><a href="#html-6"> Balises de formulaire </a></li>
                    <li><a href="#html-7"> Balises sectionnantes </a></li>
                    <li><a href="#html-8"> Balises génériques </a></li>
                </ol>
            </div>
        </div>
    </div>