<?php

    require('controller/frontend.php');
    try {
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "dashboard") {
                $template="view/dashboard.php";
                getBreeds($template);
            }
            else if ($_GET["action"] == "addDogBreed" && isset($_POST["nom"])) {
                addDogBreed($_POST);
            }
            else if ($_GET["action"] == "addCatBreed" && isset($_POST["nom"])) {
                addCatBreed($_POST);
            }
            else if ($_GET["action"] == "addOwner"  && isset($_POST["nom"]) && isset($_POST["prenom"])
                    && isset($_POST["rue"])  && isset($_POST["codePostal"])  && isset($_POST["ville"])
                    && isset($_POST["telephone"])  && isset($_POST["telephoneMobile"])) {
                addOwner($_POST);
            }
            else if ($_GET["action"] == "addDog") {
                addDog($_POST);
            }
            else if ($_GET["action"] == "listDogs") {
                showListDogs();
            }
            else if ($_GET["action"] == "addCat") {
                addCat($_POST);
            }
            else if ($_GET["action"] == "listCats") {
                showListCats();
            }
        }
        else {
            $template = "home.php";
            template($template);
        }
    }
    catch(Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
  