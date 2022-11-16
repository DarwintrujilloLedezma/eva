<?php

    class consultasAdmin {
        public function registrarEmpleado($nombre,$cedula,$salario,$diurnas,$nocturnas,$festdiurna,$festnocturna){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();


            $sql = "SELECT * FROM users WHERE nombre=:nombre OR festnocturna=:festnocturna";
            $result = $conexion->prepare($sql);

            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":festnocturna", $festnocturna);

            $result->execute();

            $f = $result->fetch();

            if ($f) {
                echo '<script>alert("LOS DATOS A REGISTRAR YA EXISTEN EN EL SISTEMA")</script>';
                echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
            }else{
                    $sql ="INSERT INTO nomina (nombre, cedula, salario, diurnas, nocturnas, festdiurna, festnocturna) VALUES(:nombre,:cedula,:salario,:diurnas,:nocturnas,:festdiurna,:festnocturna)";
                
                $statament = $conexion->prepare($sql);

                $statament->bindParam(':nombre', $nombre);
                $statament->bindParam(':cedula', $tipoDoc);
                $statament->bindParam(':salario', $salario);
                $statament->bindParam(':diurnas', $diurnas);
                $statament->bindParam(':nocturnas', $nocturnas);
                $statament->bindParam(':festdiurna', $festdiurna);
                $statament->bindParam(':festnocturna', $festnocturna);
                $statament->bindParam(':clave', $passmd);
                $statament->bindParam(':rol', $rol);
                $statament->bindParam(':estado', $estado);

                if (!$statament) {
                    echo '<script>alert("ERROR EN EL SISTEMA")</script>';
                    echo "<script>location.href='../index.php'</script>";
                
                }else{
                    $statament->execute();
                    echo '<script>alert("REGISTRO EXITOSO")</script>';
                    echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
                }
            }