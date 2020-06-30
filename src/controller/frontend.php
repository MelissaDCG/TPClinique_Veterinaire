<?php

function loadClass($class)
    {
        require 'model/'. $class . '.php';
    }

spl_autoload_register('loadClass');


function template($view) {
    $template = $view;
    include("view/index.php");
}

function getBreeds($view) {
    $manager = new DogBreedsManager;
    $racesChiens = $manager->getRacesChiens();
    $manager = new CatBreedsManager;
    $racesChats = $manager->getRacesChats();
    $manager = new PropietairesManager;
    $propietaires = $manager->getPropietaires();
    $template = $view;
    include("view/index.php");
}

function addDogBreed(Array $raceChien) {
    $race = new RaceChien($raceChien);
    $manager = new DogBreedsManager;
    $affectedLines = $manager->add($race);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter la race !');
    } else {
        header('Location: index.php?action=dashboard');
    }
}

function addCatBreed(Array $raceChat) {
    $race = new RaceChat($raceChat);
    $manager = new CatBreedsManager;
    $affectedLines = $manager->add($race);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter la race !');
    } else {
        header('Location: index.php?action=dashboard');
    }
}

function addOwner(Array $owner) {
    $propietaire = new Propietaire($owner);
    $manager = new PropietairesManager;
    $affectedLines = $manager->add($propietaire);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le propietaire !');
    } else {
        header('Location: index.php?action=dashboard');
    }
}

function addDog(Array $dog) {
    $chien = new Chien($dog);
    $manager = new AnimalsManager;
    $affectedLines = $manager->add($chien);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter l\'animal !');
    } else {
        $manager = new DogsManager;
        $affectedLines = $manager->add($chien);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter l\'animal !');
        } else {
            header('Location: index.php?action=dashboard');
        }
    }
}

function showListDogs() {
    $manager = new DogsManager;
    $dogs = $manager->getDogs();
    $template = "view/listDogs.php";
    include("view/index.php");
}

function addCat(Array $cat) {
    $chat = new Chat($cat);
    $chat->getDateNaissance();
    $manager = new AnimalsManager;
    $affectedLines = $manager->add($chat);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter l\'animal !');
    } else {
        $manager = new CatsManager;
        $affectedLines = $manager->add($chat);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter l\'animal !');
        } else {
            header('Location: index.php?action=dashboard');
        }
    }
}

function showListCats() {
    $manager = new CatsManager;
    $cats = $manager->getCats();
    $template = "view/listCats.php";
    include("view/index.php");
}