<!DOCTYPE html>
<html>
<head>
<title>Script en PHP</title>
</head>
<body>

       <?php

            $nombre=$_POST['txtNombre'];
            echo "El nombre es ";
            echo $nombre;



            $apellido=$_POST['txtApellido'];
            echo "El apellido es ";
            echo $apellido;

           ?>

</body>
</html>