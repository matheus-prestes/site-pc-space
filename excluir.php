<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "sistemalogin";

    $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM sistemalogin WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        print_r($result);
        if($result==1){
            echo"<script>alert('Usuário excluido com sucesso!')</script>";
            echo"<script>location.replace('cadastros.php')</script>";
        } 
    }

 