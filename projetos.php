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
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">leomartins.psi</h2>
                                        <p>Site para psicologo</p>
                                    </div>
                                    <img class="img-fluid" src="assets/site1.png" alt="..." />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 2-->
                        <div class="card overflow-hidden shadow rounded-4 border-0">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Yuri Personal</h2>
                                        <p>Site para personal trainer</p>
                                    </div>
                                    <img class="img-fluid" src="assets/site2.png" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">Vamos criar algo juntos!</h2>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="https://wa.me/5531982136559?text=Oi%2C%20quero%20criar%20um%20projeto!">Whatsapp <i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </section>
    </main>
    <?php
    include("includes/footer.php");
    ?>