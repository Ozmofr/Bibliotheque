<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="./style.css">
  </head>
<body style="height:100vh">
<nav class="navbar navbar-expand-lg" style="background-color: grey;">
  <div class="container-fluid">
    <a class="navbar-brand" href="">BIBI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <?php
        if(isset($_SESSION['client'])){ ?>
        <li class="nav-item dropdown">
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Utilisateurs
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./index.php?page=ListeU">Liste utilisateurs</a></li>
          </ul>
        </li>
        <?php
        }
        ?>
      </ul>
      <?php
      if(!isset($_SESSION['client'])){
        ?>
          <div class="nav-item m-2">
              <a class="nav-link active" aria-current="page" href="./index.php?page=inscr">Inscription / Connexion</a>
          </div>
        <?php
      }
      else{
        ?>
          <div class="nav-item m-2">
            <a class="nav-link active" aria-current="page" href="./index.php?page=TraitementU&TraitementP=logout">Déconnexion</a>
          </div>
        <?php
      }
       ?>
        
    </div>
  </div>
</nav>