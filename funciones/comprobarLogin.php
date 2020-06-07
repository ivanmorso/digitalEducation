<?php
    /*----------ARCHIVOS EXTERNOS----------*/
    include './funcionesComprobacion.php';
    include './funcionesBusqueda.php';
    
    /*----------VARIABLES----------*/
    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
    }else{
        $usuario = "";
    }
    
    if(isset($_POST["contrasenya"])){
        $contrasenya = $_POST["contrasenya"];
    }else{
        $contrasenya = "";
    }
       
    if(existeUsuarioAdministrador($usuario, $contrasenya)){
        session_start();
        
        $_SESSION["idAdministrador"] = buscarIdAdministrador($usuario);
        
        $http = "Location: ../administrador.php";     
        
        header($http);
    }
    
    if(existeUsuarioProfesor($usuario, $contrasenya)){
        session_start();
        
        //Busca el dni del usuario y lo transfiere a la variable session dni
        $_SESSION["idProfesor"] = buscarIdProfesor($usuario);
        
        $http = "Location: ../profesor.php";
        
        header($http);
    }
    
    if(existeUsuarioAlumno($usuario, $contrasenya)){
        session_start();
        
        //Busca el dni del usuario y lo transfiere a la variable session dni
        $_SESSION["idAlumno"] = buscarIdAlumno($usuario);
        
        
        $http = "Location: ../alumno.php";
        
        header($http);
    }
    
    if(!existeUsuarioProfesor($usuario, $contrasenya) & !existeUsuarioAdministrador($usuario, $contrasenya) & !existeUsuarioAlumno($usuario, $contrasenya)){
        $http = "Location: ../index.php?";
        $http .= "mensaje=".urldecode("El usuario y/o contraseña no existen");
        
        header($http);
    }
    
    
    