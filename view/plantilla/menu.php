<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="xxxxx">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Inicio
      </a>

     

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Usuario
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Listar
          </a>
          
          <a class="navbar-item" href="<?php echo APP_URL; ?>usuario/crear">
            Crear
          </a>

        </div>
      </div>
    </div>
  </div>

    
</nav>
</body>
</html>