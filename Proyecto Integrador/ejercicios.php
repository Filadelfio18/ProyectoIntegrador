<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="./css/estilos.css" />
    <title>Proyecto Integrador</title>
  </head>
  <body>
    <div class="contenedor">
      <header class="header">
        <div class="logo">
          <p class="iniciales-logo"><img src="img/logo.png" class="img-logo"></p>
          <h1>Programmed Physics</h1>
        </div>
        <span class="menu-icon">M E N U</span>
        <nav class="menu">
          
        <ul>
          <li><input type="text" name="" style="margin: 10px; display: block;">
          <li><a href="index.php">   Inicio   </a></li>
          <li><a href="#">   Temas</a></li>
          <li><a href="HookeEn.html">   Idioma: Inglés   </a></li>
          <li><a href="#">   Perfil   </a></li>
        </ul>
        </nav>
      </header>

      <article class="articulo destacado">
        <div class="contenedor-texto">
          <div>
            <h2 class="titulo">Ley de Hooke</a></h2>
            <p class="fecha">
              <time></time>
            </p> 
          </div>
          <p class="extracto" style="text-align: justify;">
            La Ley de elasticidad de Hooke, o simplemente Ley de Hooke, es el principio físico en torno a la conducta elástica de los solidos Fue formulada en 1660 por el científico británico Robert Hooke, contemporáneo del célebre Isaac Newton. <br>
            El precepto teórico de esta ley es que el desplazamiento o la deformación sufrida por un objeto sometido a una fuerza, será directamente proporcional a la fuerza deformante o a la carga. Es decir, a mayor fuerza, mayor deformación o desplazamiento, o como lo formuló en latín el propio Hooke: Ut tensio sic vis (“como la extensión, así la fuerza”).   
            <br>
          </p>
        </div>
        <div class="contenedor-thumbnail">
          <a href="#">
            <img src="./img/RobertHooke.jpg" alt="" style="border-radius: 40%; height: 250px; margin-top: 30px; margin-left: -25px; ; object-fit:scale-down;">
          </a>
        </div>
      </article>

      <main class="contenido">
        
        <article class="articulo">
                    <div class="contenedor-texto">
                        <div>
                            <h2 class="titulo">
                                <a id="ej">Ejercicios de la ley de hooke</a>
                            </h2>
                        </div>
                        <form action="ejercicios.php" method="POST">
                          <?php
                          $pregunta1="f";
                          $pregunta2="f";
                          $pregunta3="f";
                          $pregunta4="f";
                          $pregunta5="f";?>
                          
                          <label for="Primer Ejercicio">Cuando una masa de 500 gr cuelga de un resorte, este se alarga 3 cm ¿cuál es la constante elástica?</label><br>
                          <input type="radio" name="Pregunta1" value="f">K=150 N/m<br>
                          <input type="radio" name="Pregunta1" value="v">k=163.33N/m<br>
                          <input type="radio" name="Pregunta1" value="f">k=133.12 N/m<br>
                          <br><br>

                          <label for="Primer Ejercicio">La constante elástica de un resorte resultó ser de 3000 N/m ¿Qué fuerza se requiere para comprimir el resorte hasta una distancia de 5 cm?</label><br>
                          <input type="radio" name="Pregunta2" value="v">F=150N<br>
                          <input type="radio" name="Pregunta2" value="f">F=180N<br>
                          <input type="radio" name="Pregunta2" value="f">F=179N<br>
                          <br><br>

                          <label for="Primer Ejercicio">Una carga de 50 N unida a un resorte que cuelga verticalmente estira el resorte 5 cm. El resorte se coloca ahora horizontalmente sobre una mesa y se estira 11 cm. a) ¿Qué fuerza se requiere para estirar el resorte esta cantidad?</label><br>
                          <input type="radio" name="Pregunta3" value="v">F=110N<br> 
                          <input type="radio" name="Pregunta3" value="f">F=143N<br>
                          <input type="radio" name="Pregunta3" value="f">F=160N<br>
                          <br><br>

                          <label for="Primer Ejercicio">¿Cuál es la magnitud de la fuerza que comprime 75 cm a un resorte de constante 280 N/m ?</label><br>
                          <input type="radio" name="Pregunta4" value="f">F=200N<br>
                          <input type="radio" name="Pregunta4" value="f">F=310N<br>
                          <input type="radio" name="Pregunta4" value="v">F=210N<br>
                          <br><br>

                          <label for="Primer Ejercicio">Un resorte se elonga 15 cm cuando se le aplica una fuerza de 85 Newtons. Si el resorte recobra su longitud original y después se le aplica una fuerza de 125 Newtons. ¿Cuál es la nueva elongación del resorte, si el resorte no alcanza su límite elástico?</label><br>
                          <input type="radio" name="Pregunta5" value="f">K=0.32.2m<br>
                          <input type="radio" name="Pregunta5" value="v">k=0.24m<br>
                          <input type="radio" name="Pregunta5" value="f">k=0.26m<br>
                          <br><br>
                          <input type="submit" value="Resultado">
                        </form>
                        <?php
                          include ('con_db.php');
                          

                          $pregunta1=$_POST['Pregunta1'];
                          $pregunta2=$_POST['Pregunta2'];
                          $pregunta3=$_POST['Pregunta3'];
                          $pregunta4=$_POST['Pregunta4'];
                          $pregunta5=$_POST['Pregunta5'];

                          $puntos= 0;

                          $mensaje= "";

                          if($pregunta1 == "v")
                          {
                              $puntos= $puntos + 2;
                          }

                          if($pregunta2 == "v")
                          {
                              $puntos= $puntos + 2;
                          }

                          if($pregunta3 == "v")
                          {
                            $puntos= $puntos + 2; 
                          }


                          if($pregunta4 == "v")
                          {
                            $puntos= $puntos + 2;
                          }

                          if($pregunta5 == "v")
                          {
                            $puntos= $puntos + 2;
                          }

                          if ($puntos > 6){
                            $mensaje=" Necesitas repasar";
                          }
                          if ($puntos == 6){
                            $mensaje =" Aprobaste pero te falta seguir estudiando";
                          }
                          if ($puntos == 8){
                            $mensaje =" Aprobaste pero te falta seguir estudiando";
                          }
                          if ($puntos == 10){
                            $mensaje =" Exelente Trabajo";
                          }

                          echo (" $puntos "); 

                          echo (" $mensaje ");
                        ?> 
                   </div>
                </article>

      </main>

      <aside class="sidebar" style="width: 80%; justify-content: right;">
        <div class="acerca-de">
          <img src="./img/logo.png" class="img-perfil" alt="" style="background-color: #FEFEFE; object-fit:scale-down;">

          <div class="bio">
            <p class="titulo"> -- Programmed Physics -- </p>
            <p>
              Mas temas :
            </p>
          </div>
        </div>
        <nav class="menu">
          <a href="Hooke.html">Modelo de Hooke</a>
          <a href="#">Principio de Pascal</a>
          <a href="#">Torricelli</a>
          <a href="https://phet.colorado.edu/sims/html/hookes-law/latest/hookes-law_es.html" target="_blank" style="font-size: 28px;"> >> Da clic para acceder a un simulador << </a>
        </nav>
      </aside>

      <footer class="footer">
        
        <p style="font-weight: bold;">CBTIS 168<br>
          Programación, 5°L</p><br>
        <p style="font-weight: lighter;float: left; text-align: left;"><b>Proyecto Integrador de las materias de :</b><br><br>
          <b> - </b>Ingles V<b>,</b> Dr. José Antonio Saldivar Cervantes<br>
          <b> - </b>Fisica II<b>,</b> Dr. Octavio Hernández Castorena<br>
          <b> - </b>Aplicaciones web con BD<b>,</b> M.C. Manuel López Chávez<br>
        </p>
        <p></p>
        <p style="font-weight: lighter;float: right; text-align: left;"><b>Programmed Physics realizado por :</b><br><br>
          <b> - </b>NL 13<b>,</b> Estrada Marmolejo Leonardo<br>
          <b> - </b>NL 15<b>,</b> Flores Martinez Leonardo Israel<br>
          <b> - </b>NL 17<b>,</b> Gallegos Rangel Julio Alberto<br>
          <b> - </b>NL 18<b>,</b> Gomaez Valdes Diego Enrique<br>
          <b> - </b>NL 30<b>,</b> Mora Castañeda Luis Enrique<br>
          <br><br>
        </p>
        
      
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="menu.js"></script>
  </body>
</html>