<nav class="main-nav" role="navigation">

  <!-- Mobile menu toggle button (hamburger/x icon) -->
  <input id="main-menu-state" type="checkbox" />


  <label class="main-menu-btn" for="main-menu-state" onclick="verModal();" >
    <span class="main-menu-btn-icon" id="label-burguer"></span>
  </label>






  <!-- Sample menu definition -->
  <ul id="main-menu" class="sm sm-simple">


    <li><a href="index">Inicio</a>
    </li>





    <li><a href="./nosotros">Nosotros</a>
    </li>





    <li class="lista-servicios">
      <a href="./servicios">Servicios</a>
      <ul class="services">
        <li><a href="">Alimentos</a></li>
        <li><a href="">Jueguetes</a></li>
        <li><a href="">Ropa y más</a></li>
      </ul>
    </li>



    <li><a href="./unete">Únete a Nosotros</a></li>
    <li><a href="./contactos">Contáctanos</a></li>
    <li><a href="">Innovaciones</a></li>

  </ul>

</nav>
<?php 
include "navegador-fix.php"
?>