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
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm fixed-top bg-white">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="logo" src="{{ @asset('./images/logo.png') }}" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="ms-auto navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#register-company">Registar compania</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#register">Registar-se</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-primary ms-md-4">Entrar</button>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="py-2"></div>
    <main class="bg-white mt-5">
        <section class="banner py-5 text-light">
            <div class="container h-100">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-6 d-flex align-items-center text-center text-md-start">
                        <section>
                            <h1 class="display-1">Bem-vindo a Central de suporte unificada</h1>

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
        
        <section class="py-5">
            <h2 class="lead fs-2 text-center pt-2 pb-5 text_primary">Preste suporte de forma precisa</h2>
            <div class="container">
                <div class="row mx-auto gap-5 justify-content-center">
                    <div class="col-md-3
                     text-start shadown-bright p-2">
                        <div class="card-fill"></div>
                        <i class="bi bi-bezier fs-1 text_primary"></i>
                        <h4 class="my-2 text_primary lead fs-4">Unificação</h4>
                        <p class="text-muted">Nosso sistema reúne diferentes canais de atendimento de várias empresas em uma única plataforma. Isso facilita o acesso a informações, feedbacks e soluções, conectando consumidores e prestadores de serviço de forma rápida, organizada e eficiente.</p>
                    </div>
                    <div class="col-md-3 text-start shadown-bright p-2">
                        <i class="bi bi-body-text fs-1 text_primary"></i>
                        <h4 class="my-2 text_primary  lead fs-4">Padronização</h4>
                        <p class="text-muted">Criamos um formato único de exibição e interação com os suportes, garantindo clareza, organização e uma experiência consistente para todos os usuários, independentemente da empresa ou serviço acessado.</p>
                    </div>
                    <div class="col-md-3 text-start shadown-bright p-2">
                        <i class="bi bi-brightness-high-fill fs-1 text_primary"></i>
                        <h4 class="my-2 text_primary  lead fs-4">Clareza</h4>
                        <p class="text-muted">Cada suporte é apresentado de forma objetiva, com linguagem acessível e estrutura visual limpa, facilitando a compreensão rápida das informações e agilizando a tomada de decisão pelo usuário.</p>
                    </div>
                </div>
            </div>
        </section>
        <div id="register-company"></div>
        <section class="bg-dark text-light">
            <div class="container-fluid mt-5">
                <div class="row">
                <div class="col-6 d-none d-md-flex">
                    <img src="{{ @asset('./images/2149145057.jpg') }}" class="img-fluid" alt="" srcset="">
                </div>
                    <div class="col-md-6 py-4">
                        <article>
                            <h2 class="fs-2 lead">Oriente seus Clientes com Facilidade</h2>
                            <hr>
                            <p class="lead">
                                Dúvidas são inevitáveis, mas a confusão não precisa ser. Com nossa central interativa, sua empresa pode guiar os consumidores com conteúdos organizados, respostas rápidas e suporte acessível.
                                Crie, tutoriais, canais de feedback e mais — tudo em um só lugar.
                                O cliente procura, encontra e resolve. Simples assim. 
                            </p>
                            <a href="#" class="btn btn-primary">Registar compania</a>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <h2 class="fs-2 lead text_primary text-center py-5 mt-3">Economize +</h2>
            <div class="row">
                <div class="col-md-6">
                    <article>
                        <h3 class="fs-3 lead">Economize Tempo</h3>
                        <p>
                            Ao unificar os canais de suporte, sua empresa reduz o tempo gasto com atendimentos repetitivos, busca de informações e resolução de dúvidas comuns.
                            Com um ambiente centralizado e padronizado, os clientes encontram respostas com mais rapidez e a equipe de suporte atua de forma mais estratégica, focando no que realmente importa.
                            O resultado é uma operação mais ágil, produtiva e com menos interrupções — economizando horas valiosas todos os dias.
                        </p>
                    </article>
                    <hr>
                    <article class="mt-4">
                        <h3 class="fs-3 lead">Economize Recursos</h3>
                        <p>
                            Desenvolver e manter múltiplos canais de suporte consome tempo, dinheiro e mão de obra. Com nossa plataforma unificada, você reduz custos operacionais, evita retrabalhos e elimina a necessidade de investir em diversas ferramentas separadas.
                            Além disso, ao otimizar processos e concentrar esforços em um único sistema, sua equipe trabalha com mais eficiência e menos desperdício.
                            Menos gastos com infraestrutura, mais foco em resultados.
                        </p>
                    </article>
                </div>
                <div class="col-6 d-none d-md-flex">
                    <img src="{{ @asset('./images/2148803915.jpg') }}" alt="" class="img-thumbnail">
                </div>
            </div>
        </section>
        <footer class="bg-dark text-light py-5" id="register">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <h5 class="lead fs-5">Registar-se</h5>
                        <hr>
                        <small>
                            <p>Regista-se para poderes interagir com os prestadores dos serviços que consomes por meio de feedbacks
                            </p>
                            <form action="#">
                                <label for="email" class="label-control">E-mail</label>
                                <input type="text" name="email" id="email" placeholder="example@gmail.com" class="form-control form-control-sm">
                                <button class="btn btn-sm btn-primary mt-2 form-control">Registar-se</button>
                            </form>
                        </small>
                    </div>
                </div>
            </div>
            <address class="text-center mt-4">
                Developed by:
                <a style="text-decoration: none" href="#">Nelson Dos Santos - 2025</a>
            </address>
        </footer>
    </main>
</body>

</html>