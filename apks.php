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
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradiente d-inline">APKs</span></h1>
                </div>
                <!-- ========== Start Section ==========
                    Colocar aqui implementação para ler links de apk do banco de dados
                    ========== End Section ========== -->
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">BitLife BR MOD</h2>
                                        <p>Bit life brasil com mod</p>
                                    </div>
                                    <a href="https://drive.google.com/file/d/1DwTBNdzuea1SzGB5a1wfAF4Cl2MMMT89/view?usp=drive_link"
                                        target="_blank">
                                        <img class="img-fluid" src="assets/apksImg/bitlife.png" alt="..." />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 2-->
                        <div class="card overflow-hidden shadow rounded-4 border-0">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Score! Hero MOD</h2>
                                        <p>Score! Hero com MOD</p>
                                    </div>
                                    <a href="https://drive.google.com/file/d/1qnekSPIfYBMt8YjtKC224XQQkWOQ8WKp/view?usp=drive_link"
                                        target="_blank">
                                        <img class="img-fluid" src="assets/apksImg/scorehero.png" alt="..." />
                                    </a>
                                </div>
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