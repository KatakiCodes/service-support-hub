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

<body>
    <header class="container-fluid shadow-sm fixed-top">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand text-primary" href="#">Central de suporte unificada</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#registar-se">Registar-se</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#empresa">Empresa</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <div class="btn btn-primary">Entrar</div>
                    </span>
                </div>
            </div>
            </nav>
        </div>
    </header>
    <div class="py-5"></div>

    {{-- Section 1 --}}

    <section class="container pb-5" id="home">
        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6">
                <h1 class="display-2">Bem vindo a central de suporte unificada</h1>
                <p class="lead my-4">
                    Adquira uma vasta gama de suporte na palma
                    da sua mão, ou preste suporte por meio de uma Central
                    de suporte unificada apartir de qualquel lugar!
                </p>
                <a href="#" class="btn btn-primary w-50">Entrar</a>
            </div>
            <div class="col-md-6">
                <img src="{{ @asset("./images/ilust-help1.jpg") }}" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <div class="container-fluid bg-body-tertiary">
        <section class="container py-5">
            <div class="card-container row flex-column flex-md-row">
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <i class="bi bi-bezier fs-1 text_primary"></i>
                        <h4 class="my-2 text_primary lead fs-4">Unificação</h4>
                        <p class="text-muted">Nosso sistema reúne diferentes canais de atendimento devárias empresas em uma única plataforma. Isso facilita o acesso a informações,feedbacks e soluções, conectando consumidores e prestadores de serviço de formarápida, organizada e eficiente.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <i class="bi bi-body-text fs-1 text_primary"></i>
                        <h4 class="my-2 text_primary  lead fs-4">Padronização</h4>
                        <p class="text-muted">Criamos um formato único de exibição e interação com ossuportes, garantindo clareza, organização e uma experiência consistente paratodos os usuários, independentemente da empresa ou serviço acessado.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <i class="bi bi-brightness-high-fill fs-1 text_primary"></i>
                        <h4 class="my-2 text_primary  lead fs-4">Clareza</h4>
                        <p class="text-muted">Cada suporte é apresentado de forma objetiva, comlinguagem acessível e estrutura visual limpa, facilitando a compreensão rápidadas informações e agilizando a tomada de decisão pelo usuário.</p>
                    </div>
                </div>
            </div>
        </section>  
    </div>
    
    {{-- Section 3 --}}

    <section class="container py-5" id="registar-se">
        <div class="card-container row align-items-center">
            <div class="col-md-6">
                <img src="{{ @asset("./images/feedback.jpg") }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="display-4">Dá o seu feedback de forma interativa</h2>
                <p class="lead my-4">
                    Regista-te para poderes interagir e aumentar o grau proximidade com os prestadores dos serviços que consomes por meio de avaliações ou críticas sugerindo melhorias, ou reportando problemas ocorrentes.
                </p>
                <a href="#" class="btn btn-primary w-50">Registar-se</a>
            </div>
        </div>
    </section>

    {{-- Section 4 --}}
    <div class="container-fluid bg-body-tertiary">
        <section class="container py-5" id="empresa">
            <div class="card-container row flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-6">
                    <h2 class="display-4">Oriente seus Clientes com Facilidade</h2>
                    <p class="lead my-4">
                        Dúvidas são inevitáveis, mas a confusão não precisa ser. Com nossa central interativa, sua empresa pode guiar os consumidores com conteúdos organizados, respostas rápidas e suporte acessível.
                        Crie, tutoriais, canais de feedback e mais — tudo em um só lugar.
                        O cliente procura, encontra e resolve. Simples assim.
                        Personaliza o perfil da sua compania da melhor e torne o suporte dos seus serviços mais acessíveis
                    </p>
                    <a href="#" class="btn btn-primary w-50">Registar empresa</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ @asset("./images/guide.png") }}" alt="" class="img-fluid">
                </div>
            </div>
        </section>
    </div>

    {{-- Section 5 --}}

    <section class="container py-5" id="empresa">
        <div class="card-container row align-items-center">
            <div class="col-md-6">
                <img src="{{ @asset("./images/economic.png") }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="display-4">Economize+</h2>
                <p class="lead my-4">
                    Ao unificar os canais de suporte, sua empresa reduz o tempo gasto com atendimentos repetitivos, busca de informações e resolução de dúvidas comuns.
                    Com um ambiente centralizado e padronizado, os clientes encontram respostas com mais rapidez e a equipe de suporte atua de forma mais estratégica, focando no que realmente importa.
                    O resultado é uma operação mais ágil, produtiva e com menos interrupções— economizando horas valiosas todos os dias
                </p>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-light py-5" id="register">
        <small>
            <div class="container">
                <div class="row flex-column-reverse flex-md-row text-center text-md-start">
                    <div class="col-md-4 mt-5 mt-md-0">
                        <h5 class="lead">Menu de navegação</h5>
                        <hr class="w-75 mx-auto mx-md-0">
                        <ul class="ms-auto navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#registar-se">Registar-se</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#empresa">Empresa</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 mt-5 mt-md-0">
                        <h5 class="lead">Contactos</h5>
                        <hr class="w-75 mx-auto mx-md-0">
                        <ul class="ms-auto navbar-nav">
                            <li class="nav-item">
                                <i class="bi bi-whatsapp fs-5"></i><span> +244 999-999-999</span>
                            </li>
                            <li class="nav-item">
                               <i class="bi bi-github fs-5"></i> katakicodes
                            </li>
                            <li class="nav-item">
                                <i class="bi bi-linkedin fs-5"></i><span> Nelson Dos Santos</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h5 class="lead">Deixe a sua crítica</h5>
                        <hr class="w-75 mx-auto mx-md-0">
                        <form action="#">
                            <input type="text" name="email" id="email" class="form-control my-2" placeholder="example@gmail.com">
                            <textarea name="content" id="content" class="form-control" placeholder="Escreva aqui a sua critica"></textarea>
                            <button class="btn btn-primary form-control mt-2">Enviar</button>
                        </form>
                    </div>

                </div>
            </div>
            <p class="text-center mt-5">@Nelson Dos Santos - 2025</p>
        </small>
    </footer>
</body>
</html>