<?php
$cantidad=$_POST["cantidad"];
$tipo=$_POST["tipo"];
$chispas=$_POST["chispas"];
$lugar=$_POST["lugar"];
if ($cantidad <=0)
{
    print "ha digitado un valor incorrecto";
    exit;
}
//echo $tipo;
if($tipo ==2)
{
    $valor=6000;
    $subtotal=$valor*$cantidad;
  //  print $subtotal;
    if($chispas==1)
    {
        $cchispas=$cantidad*2000;
        $subtotal=$subtotal+$cchispas;
    } else{
        //print $subtotal;
    }
    if($lugar==2)
    {
        $pllevar=$cantidad*1000;
        $subtotal=$subtotal+$pllevar;
    }else{
        //print $subtotal;
    }

   // echo $subtotal;
    
}

if($tipo ==3)
{
    $valor=10000;
    $subtotal=$valor*$cantidad;
  //  print $subtotal;
    if($chispas==1)
    {
        $cchispas=$cantidad*2000;
        $subtotal=$subtotal+$cchispas;
    } else{
        //print $subtotal;
    }
    if($lugar==2)
    {
        $pllevar=$cantidad*1000;
        $subtotal=$subtotal+$pllevar;
    }else{
        //print $subtotal;
    }

   // echo $subtotal;
    
}

if($tipo ==5)
{
    $valor=20000;
    $subtotal=$valor*$cantidad;
  //  print $subtotal;
    if($chispas==1)
    {
        $cchispas=$cantidad*2000;
        $subtotal=$subtotal+$cchispas;
    } else{
        //print $subtotal;
    }
    if($lugar==2)
    {
        $pllevar=$cantidad*1000;
        $subtotal=$subtotal+$pllevar;
    }else{
        //print $subtotal;
    }

   
    
}
echo "El costo de tu postre personalizado es ".$subtotal;
?>
