<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Examen</title>
</head>
<body>
<div class="jumbotron text-center bg-secondary">
    <h1>Welcome</h1>
    <p></p>
    </div>

    <div class="container">
        <h2>Ingrese sus datos</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" value="" name="d1"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" value="" name="d2"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Curp</label>
                <input type="text" class="form-control" value="" name="d3"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Clave de alumno</label>
                <input type="text" class="form-control" value="" name="d4"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Edad</label>
                <input type="text" class="form-control" value="" name="d5"/>
            </div>
            <label for="demo">Email</label>
            <br>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="" id="demo" name="d6">
                <div class="input-group-append">
                    <span class="input-group-text">
                    <select class="form-select" name="correro">
                    <option value="h">@hotmail.com</option>
                    <option value="g">@gmail.com</option>
                    <option value="y">@yahoo.com</option>
                    <option value="o">@outlook.com</option>
                </select>
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Direccion</label>
                <input type="text" class="form-control" value="" name="d7"/>
            </div>
            <div class="mb-3">
                <label class="form-check-label">Carrera</label>
                <select class="form-select" name="carrera">
                    <option value="Sistemas">Sistemas</option>
                    <option value="Administracion">Administracion</option>
                    <option value="Industrial">Industrial</option>
                    <option value="Electromecanica">Electromecanica</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Capturar datos"/>
        </form>
    </div>
    <br/>
    <div class="container">
    <?php
        if($_POST){
            //Registrar datos con $_REQUEST
            $d1 = $_REQUEST['d1'];
            $d2 = $_REQUEST['d2'];
            $d3 = $_REQUEST['d3'];
            $d4 = $_REQUEST['d4'];
            $d5 = $_REQUEST['d5'];
            $d6 = $_REQUEST['d6'];
            $d7 = $_REQUEST['d7'];
            $co = $_REQUEST['correro'];
            $ca = $_REQUEST['carrera'];

            //Usando solo $_POST
            $alternativa = $_POST["d1"];
            
            switch($ca){
                case 'Sistemas':
                    switch($co){
                        case 'h':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es el Ing. Jose Rulerito Escamilla, favor de presentarte con el para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@hotmail.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'g':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es el Ing. Jose Rulerito Escamilla, favor de presentarte con el para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@gmail.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'y':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es el Ing. Jose Rulerito Escamilla, favor de presentarte con el para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@yahoo.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'o':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es el Ing. Jose Rulerito Escamilla, favor de presentarte con el para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@outlook.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                    }
                break;
                case 'Administracion':
                    switch($co){
                        case 'h':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es el Lic. Roberto Hernandez Gonzales, favor de presentarte con el para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@hotmail.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'g':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es el Lic. Roberto Hernandez Gonzales, favor de presentarte con el para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@gmail.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'y':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es el Lic. Roberto Hernandez Gonzales, favor de presentarte con el para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@yahoo.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'o':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es el Lic. Roberto Hernandez Gonzales, favor de presentarte con el para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@outlook.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                    }
                break;
                case 'Industrial':
                    switch($co){
                        case 'h':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es la Ing. Marta Lucia de las Rosas, favor de presentarte con ella para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@hotmail.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'g':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es la Ing. Marta Lucia de las Rosas, favor de presentarte con ella para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@gmail.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'y':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es la Ing. Marta Lucia de las Rosas, favor de presentarte con ella para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@yahoo.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'o':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es la Ing. Marta Lucia de las Rosas, favor de presentarte con ella para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@outlook.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                    }
                break;
                case 'Electromecanica':
                    switch($co){
                        case 'h':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es la Mtra. Josefina Lopez, favor de presentarte con ella para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@hotmail.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'g':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es la Mtra. Josefina Lopez, favor de presentarte con ella para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@gmail.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'y':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es la Mtra. Josefina Lopez, favor de presentarte con ella para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@yahoo.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                        case 'o':
                            echo "<h3>Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera ".$ca." tu coordinador es la Mtra. Josefina Lopez, favor de presentarte con ella para mas datos."."</h3>";
                            echo "<br>";
                            echo "<h3>Tu credencial quedara de la siguiente manera:</h3>";
                            echo "<br>";
                            echo "<h4>Nombre completo: ".$d1." ".$d2."</h4>";
                            echo "<h4>Clave de alumno: ".$d4."</h4>";
                            echo "<h4>Email: ".$d6."@outlook.com"."</h4>";
                            echo "<h4>Email institucional: ".substr($d3,0,6)."@".$ca.".tecnm.mx"."</h4>";
                            echo "<h4>Edad: ".$d5." años"."</h4>";
                        break;
                    }
                break;
            }
        }
    ?>
    </div>
</body>
</html>