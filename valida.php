<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "sistemalogin";

    $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
    // if($conn->connect_error){
    //     echo "ERROR 404";
    // }else {
    //     echo "CONECTOU";
    // }

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // echo $email;
    // echo $senha;

    $sql = "SELECT * FROM sistemalogin WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn,$sql);    
    $row = mysqli_fetch_array($result);
    if($email == "" && $senha == ""){
        header('location:login.php');
    }
    if($row['email'] == $email && $row['senha'] == $senha){
        echo"<script>alert('Bem-vindo! Login bem sucedido.')</script>";
        echo"<script>location.replace('cadastros.php')</script>";
    }else{
        echo"<script>alert('Verifique suas credenciais')</script>";
        echo"<script>location.replace('login.php')</script>";
    }