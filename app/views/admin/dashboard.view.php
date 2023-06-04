<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/public/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="icon" type="image/png" href="/public/assets/Maristory-Navbar.png" sizes="32x32">

    <title>Maristory</title>
</head>
<body>
    <?php require('./app/views/layouts/sidebar.php'); ?>
    <div class="container">

        <div class="left-container">

            <img src="/public/assets/Maristory-Transparente2.png" alt="Maristory logo">

        </div>

        <div class="right-container">

            <button class="listPosts"><i class="fa-regular fa-note-sticky"></i><a href="#">Lista de Posts</a></button>
            <button class="formPosts"><i class="fa-regular fa-clipboard"></i></i><a href="#">Form de Posts</a></button>
            <button class="listUser"><i class="fa-regular fa-user"></i><a href="#">Lista de Usuários</a></button>
            <button class="formUser"><i class="fa-regular fa-id-badge"></i><a href="#">Form de Usuários</a></button>
            <button class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i><a href="#">Logout</a></button>

        </div>

    </div>

<body>
</html>