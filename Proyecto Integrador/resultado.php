<?php
						  $_POST['Pregunta1']='f';
                          $_POST['Pregunta2']='f';
                          $_POST['Pregunta3']='f';
                          $_POST['Pregunta4']='f';
                          
                          

                          $pregunta1=$_POST['Pregunta1'];
                          $pregunta2=$_POST['Pregunta2'];
                          $pregunta3=$_POST['Pregunta3'];
                          $pregunta4=$_POST['Pregunta4'];

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


                          if ($puntos < 6){
                            $mensaje=" Necesitas repasar";
                          }
                          if ($puntos == 6){
                            $mensaje =" Aprobaste pero te falta seguir estudiando";
                          }
                          if ($puntos == 8){
                            $mensaje =" Aprobaste pero te falta seguir estudiando";
                          }
                          if ($puntos == 10){
                            $mensaje =" Excelente Trabajo";
                          }

                          echo (" $puntos "); 

                          echo (" $mensaje ");

                          include ("correo.php");



?>