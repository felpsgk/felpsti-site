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
                            <div class="badge bg-gradient-primary-to-secondario text-white mb-4">
                                <div class="text-uppercase">Tecnologia &middot; Desenvolvimento &middot; Apps &middot;
                                    Suporte</div>
                            </div>
                            <div class="fs-3 fw-light text-muted">FelpsTI auxiliando sua empresa!</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradiente d-inline">Entre em contato
                                    já!</span></h1>
                            <div
                                class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" id="userLogado"
                                    href="apks.php">APKs</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                    href="projetos.php">Projetos</a>
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
        <section class="bg-light py-1">
            <div class="container px-2">
                <div class="row gx-2 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-2">
                            <h2 class="display-5 fw-bolder">
                                <a class="text-gradiente d-inline" href="resumo.php">Sobre mim</a>
                            </h2>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradiente" href="https://wa.me/5531982136559?text=Oi%2C%20quero%20criar%20um%20projeto!"><i class="bi bi-whatsapp"></i></a>
                                <a class="text-gradiente" href="https://www.linkedin.com/in/felipe-p-machado/"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradiente" href="https://github.com/felpsgk"><i class="bi bi-github"></i></a>
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