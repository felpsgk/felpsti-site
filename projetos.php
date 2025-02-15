<?php
include("includes/head.php");
?>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <?php
        include("includes/navbar.php");
        ?>
        <!-- Projects Section-->
        <section class="py-5">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8 mx-auto"> <!-- Centralização e limite de largura -->
                    <div class="card card-geral-black mb-3 border-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-7 d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="card-body">
                                    <h3 class="card-title">leomartins.psi</h3>
                                    <p class="card-text">
                                        Site para psicólogo
                                    </p>
                                </div>
                            </div>
                            <div class="col-5">
                                <img src="assets/site1.png" alt="site psicologo" class="card-img img-limited" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-9 col-lg-8 mx-auto"> <!-- Mesmo ajuste para o segundo card -->
                    <div class="card card-geral-black mb-3 border-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-7 d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="card-body">
                                    <h3 class="card-title">Yuri Personal</h3>
                                    <p class="card-text">
                                        Site para personal trainer
                                    </p>
                                </div>
                            </div>
                            <div class="col-5">
                                <img src="assets/site2.png" alt="site academia personal trainer"
                                    class="card-img img-limited" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to action section-->
        <section class="py-5 bg-gradient-primary-to-secondario text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">Vamos criar algo juntos!</h2>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder"
                    target="_blank"
                        href="https://wa.me/5531982136559?text=Oi%2C%20quero%20criar%20um%20projeto!">Whatsapp <i
                            class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </section>
    </main>
    <?php
    include("includes/footer.php");
    ?>