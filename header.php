<header>
	<h1><a href='index.php'>Música</a></h1>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <h1><a class="navbar-brand" href="index.php">Música</a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item<?php if($_GET["sec"]==1){ echo " active";}?>">
              <a class="nav-link" href="index.php?sec=1">Listar discos</a>
            </li>
             <li class="nav-item<?php if($_GET["sec"]==2){ echo " active";}?>">
              <a class="nav-link" href="index.php?sec=2">Listar cantantes</a>
            </li>
          </ul>
          
        </div>
      </nav>
    </header>