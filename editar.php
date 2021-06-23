<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "sistemalogin";

    $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql2 = "SELECT * FROM sistemalogin WHERE id = '$id'";
        $result = mysqli_query($conn,$sql2);    
        $row = mysqli_fetch_array($result);
        if(isset($row[1]) && isset($row[2])){
            $emailusuario = $row[1];
            $senhausuario = $row[2];
        }else{
            $emailusuario = "";
            $senhausuario = "";
        }   
        
        
        if(isset($_POST['email']) && isset($_POST['senha'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            // echo $email;
            // echo $senha;
        
            $sql = "UPDATE sistemalogin SET email = '$email', senha = '$senha' WHERE id = $id";
            $result = mysqli_query($conn,$sql);
            print_r($result);
            if($result==1){
                echo"<script>alert('Usuário editado com sucesso!')</script>";
                echo"<script>location.replace('cadastros.php')</script>";
            }            

        }
    }

?>

    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Sistema Cadastros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
  
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <div class="menu">
      <nav class="navbar navbar-expand-lg navbar-dark bg-blue-400">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><h1>PcSpace</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre-nos.html">Sobre nós</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><p style="padding-left: 10px; padding-top:20px; margin-bottom:-1px; font-weight: 600;">Placas de vídeo</p></li>
                <li><a class="dropdown-item" href="#">Nvidia</a></li>
                <li><a class="dropdown-item" href="#">AMD</a></li>
                <li><p style="padding-left: 10px; padding-top:20px; margin-bottom:-1px; font-weight: 600;">Processadores</p></li>
                <li><a class="dropdown-item" href="#">Intel</a></li>
                <li><a class="dropdown-item" href="#">AMD</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Políticas</a></li>
              </ul>
              <li class="nav-item">
              <a class="nav-link" href="contato.html">Contato</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="carrinho.html"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg></a>              
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg> Entrar</a>              
              </li>
            </li>
            
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Produto" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
        </div>
      </div>
      </nav>
    </div>

    <h1 style="text-align: center; margin-top: 50px;">Editar usuário</h1>

    
    <div class="login">
      <div class="container">
      <div class="row">
        <div class="col" style="border-style: solid; border-color: #f0f0f0; padding: 20px; margin: 10px;">
          <form method="post" action="editar.php?id=<?php echo $id;?>">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $emailusuario;?>" required autofocus>
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $senhausuario;?>" required>
            </div>            
            <button type="submit" class="btn btn-success" name="editar">Editar</button>
          </form>
        </div>
    </div>
    </div>
    </div>

    



    <div class="footer">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h3 style="font-weight: 800; font-size: 20px;">Links Úteis</h3>
              <h6 style="font-weight: 300; font-size: 15px;"><a href="#" style="color:  white;">Home</a></h6>
              <h6 style="font-weight: 300; font-size: 15px;"><a href="#" style="color:  white;">Placas de vídeo</a></h6>
              <h6 style="font-weight: 300; font-size: 15px;"><a href="#" style="color:  white;">Processadores</a></h6>
              <h6 style="font-weight: 300; font-size: 15px;"><a href="#" style="color:  white;">Sobre nós</a></h6>
              <h6 style="font-weight: 300; font-size: 15px;"><a href="#" style="color:  white;">Contato</a></h6>
              <h6 style="font-weight: 300; font-size: 15px;"><a href="#" style="color:  white;">Políticas</a></h6>
            </div>
            <div class="col-sm">
              <h3 style="font-weight: 800; font-size: 20px;">Cadastro</h3>
              <h6 style="font-weight: 300; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in fermentum diam.</h6>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" style="font-size: 15px;"placeholder="E-mail">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-outline-light mb-3">Enviar</button>
              </div>
            </div>
            <div class="col-sm">
              <h3 style="font-weight: 800; font-size: 20px;">Redes Socias</h3>
              <h6 style="font-weight: 300; font-size: 15px;">Pellentesque sed enim molestie, aliquet neque sit amet, lacinia lorem.</h6>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>                
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>      
  
  </body>
</html>