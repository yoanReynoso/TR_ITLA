<?php
header("Content-Type:text/css; charset: UTF-8");

$n = 60;
for ($i=1; $i <= 18; $i++) {


  $n += 61;
  if ($i == 1 || $i ==18)
  {
    
    $left = $n . "px"; 
    echo"#dir$i
  {
    top:57px;
    position: absolute;
    left:$left;
    text-align:center;    
  }";   
  } 
  if( ($i==2)||($i>=13)&&($i<=17) )
  {
    $left = $n . "px"; 

    echo"#dir$i
    {
      top:109px;
      position: absolute;
      left:$left;
      text-align:center;
    }"; 
  }

  if (($i >= 3)&&($i<=12))
  {
    $left = $n . "px"; 

    echo"#dir$i
    {
      top:211px;
      position: absolute;
      left:$left;
      text-align:center;
    }";   
  }
          
}
  
echo"#top1{
  width:60px;
  height:50px;
  border-radius: 10px 10px 10px 10px;
  box-shadow:3px 3px 0px RGB(219, 219, 219 );
  background-color:#271F20;
}";
 
?>
#titulo{
  top:50px;
  position: absolute;
  left:450px;
}