<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Righteous&display=swap"
        rel="stylesheet">

    @vite([('resources/js/app-styles.js')])

    <title>Central de suporte unificada</title>
</head>

<body class="">
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="logo" src="{{ @asset('./images/logo.png') }}" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="ms-auto navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Registar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre nós</a>
                        </li>
                        <li class="nav-item ms-4">
                            <button class="btn btn-primary">Entrar</button>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="bg-white">
        <section class="banner py-5 text-light">
            <div class="container h-100">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-6 d-flex align-items-center text-center text-md-start">
                        <section>
                            <h1 class="display-1">Bem-vindo a Central de suporte <span
                                    class="text-hightlight">unificada</span></h1>

                            <p class="lead my-4">
                                Adquira uma vasta gama de suporte na palma
                                da sua mão, ou preste suporte por meio de uma Central
                                de suporte unificada apartir de qualquel lugar!
                            </p>
                            <a href="#" class="btn btn-primary w-25">Entrar</a>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-3 container text-center ">
            <hr>
            <div class="row fs-3">
                <div class="col-4">
                    <div class="card bg_info">
                        <i class="bi bi-bezier"></i>
                        <h5 class="fs-6">Unificação</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg_info">
                        <i class="bi bi-body-text "></i>
                        <h5 class="fs-6">Padronização</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg_info">
                        <i class="bi bi-brightness-high-fill"></i>
                        <h5 class="fs-6">Clareza</h5>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-5">
                        <img class="img-thumbnail" src="{{ @asset('images/francis-odeyemi-u1QJm4o7cXk-unsplash.jpg') }}"
                            alt="francis-odeyemi-u1QJm4o7cXk">
                    </div>
                    <div class="col-7">
                        <h3 class="display-6">Deixe que os seus clientes saibam como usar os seus serviços!</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>