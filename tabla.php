<!DOCTYPE html>
<html lang="en">

<head>
      <title>Document</title>
      <link rel="stylesheet" type="text/css" href="stilos.php">

</head>

<body>


       <section id= ""> <h1>Tabla Periodica de los Helementos </h1></section>
     
<?php



 function color($simbolo){
     

$color = array(

      'Colo1' => array('H','C','N','O','P','S','Se'),
      'Colo2' => array('Li', 'Na', 'K', 'Rb', 'Cs', 'FR'),
      'color3' => array('Be', 'Mg', 'Ca', 'Sr', 'Ba', 'Ra'),
      'color4' => array('Sc','Y', 'Ti', 'Zr', 'Hf', 'Rf', 'V', 'Nb', 'Ta', 'Db','Cr', 'Mo', 'W', 'Sg', 
      'Mn', 'Tc', 'Re', 'Bh','Fe', 'Ru', 'Os', 'Mt','Co', 'Rh', 'Ir', 'Mt' ,'Ni', 'Pd', 'Pt', 'Ds',
      'Cu', 'Ag', 'Au', 'Rg','Zn', 'Cd', 'Hg', 'Cn',),
      'color5' => array('LA-lu', 'Ac-Lr'),
      'color6' => array('Al', 'Ga', 'In', 'Tl','Sn', 'Pb', 'Fl','Bi','Lv'),
      'color7'=> array ('B','Si','Ge','Sb','Po','As','Te'),
      'color8'=> array ('F', 'Cl', 'Br', 'I', 'At','He', 'Ne', 'Ar', 'Kr', 'Xe', 'Rn'),
      'color9' => array('Uut', 'Uup','Uus','Uuo'),
      ); 
      $n = 0;
foreach ($color as $titulo => $dato) {
      $n+=1;
      foreach ($dato as $Lcolor => $valor) {
                 if(($n==1)&&($simbolo==$valor)) {return "background-color:#1B4F72;";}
                 if(($n==2)&&($simbolo==$valor)) {return "background-color:#AD4C1B;";}
                 if(($n==3)&&($simbolo==$valor)) {return "background-color:#5CCA19;";}
                 if(($n==4)&&($simbolo==$valor)) {return "background-color:#1987CA;";}
                 if(($n==5)&&($simbolo==$valor)) {return "background-color:#CA19BA;";}
                 if(($n==6)&&($simbolo==$valor)) {return "background-color:#AF293B;";}
                 if(($n==7)&&($simbolo==$valor)) {return "background-color:#E1C0C4;";}
                 if(($n==8)&&($simbolo==$valor)) {return "background-color:#D1DC64;";}
                 if(($n==9)&&($simbolo==$valor)) {return "background-color:#968486;";}
            } 
           

    }
  
  }


      function letras($Ps, $Nlinea,$Tlinea)
      {

            $simbolo = array(

                  1=> array('H','Li', 'Na', 'K', 'Rb', 'Cs', 'FR', 'n'),
                  2 => array('Be', 'Mg', 'Ca', 'Sr', 'Ba', 'Ra'),

                  3 => array('Sc', 'Y', 'LA-lu', 'Ac-Lr'),
                  4 => array('Ti', 'Zr', 'Hf', 'Rf',),
                  5 => array('V', 'Nb', 'Ta', 'Db'),
                  6 => array('Cr', 'Mo', 'W', 'Sg'),
                  7 => array('Mn', 'Tc', 'Re', 'Bh'),
                  8=> array('Fe', 'Ru', 'Os', 'Mt'),
                  9 => array('Co', 'Rh', 'Ir', 'Mt'),
                  10 => array('Ni', 'Pd', 'Pt', 'Ds'),
                  11 => array('Cu', 'Ag', 'Au', 'Rg'),
                  12 => array('Zn', 'Cd', 'Hg', 'Cn'),

                  13 => array('B', 'Al', 'Ga', 'In', 'Tl', 'Uut'),
                  14 => array('C', 'Si', 'Ge', 'Sn', 'Pb', 'Fl'),
                  15 => array('N', 'P', 'As', 'Sb', 'Bi', 'Uup'),
                  16 => array('O', 'S', 'Se', 'Te', 'Po', 'Lv'),
                  17 => array('F', 'Cl', 'Br', 'I', 'At', 'Uus'),
                  18 => array('He', 'Ne', 'Ar', 'Kr', 'Xe', 'Rn', 'Uuo')

            );
             
           $n = $simbolo[$Nlinea][$Ps];
           $C = color($n);
            return "<div id=\"top1\" style=position:absolute;top:$Tlinea;$C>
             $n
           </div>";

      }

      function cuadros($Ccuadros, $Nlinea)
      {

            $acumu = 0; //para acumular la cantidad de para definir el tamano
            $tamano = 51;
            for ($i = 0; $i <= $Ccuadros; $i++) {
                  $acumu  += $tamano; // da el tamana y la pocicion de los cuadros suamndole 51 a cada uno
                 $Tlinea = $acumu . "px"; // junta el valor en una cadena destexto para que lo pueda leer el
                  
                 $n = letras($i, $Nlinea,$Tlinea); // i viene ciendo la posicion de la letra
                                                  // Nlinea es el numero de linea 
                  

                  echo $n;  // la imprecion de los cuadros por pantalla

            }
      }


      for ($i = 0; $i <= 18; $i++) {

            if ($i == 1 || $i == 18) {
                  $n = "dir" . $i;
                  echo "<section id=\"$n\">  <h3>"; // es para darle la posicion  con el css 
                  cuadros(6, $i); // envia el numero de linea para las letras y me da la cantiedad de cuadros 
                  echo " </h1></section>";
            }

            if (($i >= 3) && ($i <= 12)) {
                  $n = "dir" . $i;
                  echo "<section id=\"$n\">  <h3> <center>"; 
                  cuadros(3, $i);
                  echo " </h3></section>";
            }
            if (($i == 2) || ($i > 12) && ($i <= 17)) {
                  $n = "dir" . $i;
                  echo "<section id=\"$n\"> <h3>"; 
                  cuadros(5, $i);

                  echo " </h3></section>";
            }
      }

      ?>




</body>

</html>