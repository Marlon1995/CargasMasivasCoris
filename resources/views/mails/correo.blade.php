<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>CARGA MASIVA- <?php echo $producto ?></title>
</head>
<style>
table {
   width: 50%;
   border: 2px solid #000;
}
th {
   width: auto;
   text-align: left;
   vertical-align: top;
  text-align:center;

   padding: 0.3em;
   caption-side: bottom;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
td {
  width: auto;
   text-align: left;
   vertical-align: top;
   text-align:center;


   padding: 0.3em;
   caption-side: bottom;
   
}
</style>
<body>
    <p>Hola! Estimado Operador/a se ha realizado la carga de la base correspondiente a <?php echo $producto ?></p>
    <p>Estos son los datos en los cuales se presentaron inconvenientes:</p>


    <table>
  <thead>
    <tr>
     <?php  
 
     $valores = array("CEDULA","NOMBRES","PLAN","ERROR"); 
     foreach ($valores as $row) {
       echo "<th><b>".$row."</b></th>";
     
     }
     ?>
   </tr>
 </thead>
 <tbody>
  <tr>
   <?php

     foreach ($errores as $row) {
  
    echo "<tr>";
    echo "<td>".$row['datos']['identificacion']."</td>";
    echo "<td>".$row['datos']['primernombre']." ".$row['datos']['primerapellido']."</td>";
    echo "<td>".$row['datos']['plancliente']."</td>";
    echo "<td>".$row['error']."</td>";
    echo "<tr>";

 
  }

  ?>
</tr>
 </tbody>
  </table>
</body>
</html>