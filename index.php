<?php
include("includes/head.php");
?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <?php
        include("includes/navbar.php");
        ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                                <div class="text-uppercase">Tecnologia &middot; Desenvolvimento &middot; Apps &middot; Suporte</div>
                            </div>
                            <div class="fs-3 fw-light text-muted">FelpsTI auxiliando sua empresa!</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Entre em contato já!</span></h1>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="apps.php">Apps</a>
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" id="userLogado" href="apks.php">APKs</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projetos.php">Projetos</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    include("includes/dots.php");
                    ?>
                </div>
            </div>
        </header>
        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Sobre mim ,</span></h2>
                            <p class="lead fw-light mb-4">Mano felps!</p>
                            <p class="text-muted">Eu sou mano felps!</p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include("includes/footer.php");
    ?>