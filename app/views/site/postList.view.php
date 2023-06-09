<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/public/assets/Maristory-Navbar.png" sizes="32x32">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/postList.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Listagem de Posts</title>
</head>

<body>
    <?php require('./app/views/layouts/navbar.php'); ?>

    <div class="heading">
        <form action="buscar" class="formulario" method="GET">
            <div class="btnProcurar">
                <input name="search" type="search" class="procurar" placeholder="Digite o nome do post" />
            </div>

            <div class="btnBusca">
                <button type="submit" class="busca"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);">
                        <path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
    </div>

    <?php if (count($posts_pagination) != 0) : ?>
        <div class="row">
            <?php foreach ($posts_pagination as $post) : ?>
                <div class="col-md-4">

                    <div class="card">

                        <span class="badge rounded-pill text-bg-primary bg-purple"><?= $post->gender ?></span>

                        <div class="content-image">

                            <a href="/vpost2?id=<?php echo $post->id ?>"><img src="<?= $post->image ?? "/public/assets/Maristory-Navbar.png"?>" alt="Imagem ilustrativa"></a>

                        </div>

                        <div class="card-body">
                            <h5 class="card-title fifty-chars"><?= $post->title ?></h5>
                            <p class="card-text"><?= $post->synopsis ?></p>
                        </div>

                        <ul class="post-datas">
                            <li>Por <span><?= $post->author_post ?></span></li>
                            <br>
                            <?php if ($post->updated_at) : ?>
                                <small class="text-muted">Atualizado em <?= date('d/m/Y', strtotime(explode(' ', $post->updated_at)[0])) ?> às <?= explode(' ', date('Y-m-d H:i:s', strtotime($post->updated_at)))[1] ?></small>
                            <?php endif; ?>
                        </ul>

                        <a href="/vpost2?id=<?php echo $post->id ?>"><button class="button-card" role="button">Saber Mais</button></a>

                        <div class="card-footer">
                            <i class='bx bx-calendar'></i> Criado em <?= date('d/m/Y', strtotime(explode(' ', $post->created_at)[0])) ?>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <div class="error-search">
            <div _ngcontent-ng-c2168645827 class="error-emoji">(>_<)</div>
                    <div _ngcontent-ng-c2168645827 class="error-msg">Não foi possível encontrar o post com o título <span>"<?= $_GET['search'] ?></span>"</div>
            </div>
        </div>
    <?php endif; ?>
    </div>

    <?php require('./app/views/layouts/pagination.php'); ?>
    <?php require('./app/views/layouts/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script>
        const input = document.querySelector('.procurar');

        function changeContent() {
            const screenWidth = window.innerWidth;

            if (screenWidth >= 580 && screenWidth < 760) {
                input.placeholder = "Nome do post";
            } else if (screenWidth < 580) {
                input.placeholder = "Título post";
            } else {
                input.placeholder = "Digite o nome do post";
            }
        }

        changeContent();

        window.addEventListener('resize', changeContent);
    </script>
</body>

</html>