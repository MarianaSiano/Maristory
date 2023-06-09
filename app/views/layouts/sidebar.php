<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/public/assets/Maristory - Navbar.png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Maristory</title>
</head>

<body>

    <nav class="sidebar close">

        <header>
            <!--Logo do site e botão para expandir a navbar.-->
            <div class="logo">

                <span class="img">
                    <a href="./"><img src="/public/assets/Maristory-Transparente2.png" alt="Logotipo do site"></a>
                </span>

            </div>

            <i class='bx bx-chevron-left bx-sm toggle'></i>

        </header>

        <div class="menu">
            <div class="itens">
                <ul class="links">
                    <li class="nav-link">
                        <a href="dashboard">
                            <i class='bx bxs-dashboard bx-sm icon'></i>
                            <span class="nav-text text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="listaDeUsuarios">
                            <i class='bx bx-user bx-sm icon'></i>
                            <span class="nav-text text">Gerenciar Usuários</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="listaPostAdm">
                            <i class='bx bx-note bx-sm icon'></i>
                            <span class="nav-text text">Gerenciar Posts</span>
                        </a>
                    </li>
                    
                </ul>
            </div>

            <div class="button-logout">
                <li class="">
                    <a href="login/logout">
                        <i class='bx bx-log-in bx-sm icon'></i>
                        <span class="nav-text text">Sair</span>
                    </a>
                </li>
            </div>

        </div>

    </nav>

    <script src="/public/js/sidebar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>