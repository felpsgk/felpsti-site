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
                <div class="col-md-11 col-lg-10 mx-auto"> <!-- Centralização e limite de largura -->
                    <div class="card card-geral-black mb-3 border-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-6 d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="card-body">
                                    <h2 class="fw-bolder">Score! Hero MOD</h2>
                                    <p>Score! Hero com MOD</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="https://drive.google.com/file/d/1qnekSPIfYBMt8YjtKC224XQQkWOQ8WKp/view?usp=drive_link"
                                    target="_blank">
                                    <img class="img-fluid" src="assets/apksImg/scorehero.png" alt="..." />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-11 col-lg-10 mx-auto"> <!-- Mesmo ajuste para o segundo card -->
                    <div class="card card-geral-black mb-3 border-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-6 d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="card-body">
                                    <h2 class="fw-bolder">BitLife BR MOD</h2>
                                    <p>Bit life brasil com mod</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="https://drive.google.com/file/d/1DwTBNdzuea1SzGB5a1wfAF4Cl2MMMT89/view?usp=drive_link"
                                    target="_blank">
                                    <img class="img-fluid" src="assets/apksImg/bitlife.png" alt="..." />
                                </a>
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
                    <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
                </div>
            </div>
        </section>
    </main>
    <?php
    include("includes/footer.php");
    ?>