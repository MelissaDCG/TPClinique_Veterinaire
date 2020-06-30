<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
  <a class="navbar-brand col-10 col-lg-3 p-0 m-0" href="index.php"><img src="public/images/logoClinique.png" alt="logo" class="w-75 p-0 m-0" ></a>
  <button class="navbar-toggler col-2 col-lg-9 " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blogClinique/">Blog</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Animal
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?action=listCats">Chat</a>
          <a class="dropdown-item" href="index.php?action=listDogs">Chien</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=dashboard">Tableau de bord</a>
      </li>
      
    </ul>
  </div>
</nav>