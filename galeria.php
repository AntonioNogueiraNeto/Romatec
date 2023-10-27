<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <title>Document</title>

</head>
<style>
    .video-grid {
        border-radius: 20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
        margin-top: 100px;

    }



    .video-card {
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        width: 100%;
        height: auto;
        overflow: hidden;
    }

    .video-card video {
        width: 100%;
        height: auto;
    }

    @media screen and (max-width: 420px) {

        .video-grid {
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .video-card {
            width: 80%;
            height: auto;
        }
    }



    .galeria {
        margin-top: 50px;
    }
</style>

<body>

    <?php



    if (isset($_GET['texto'])) {
        $texto = $_GET['texto'];
        if ($texto === "Produtos") {
            $directory = 'assets/img/produtos';
            $titulo = 'Exemplos de Produtos Desenvolvidos';
        } elseif ($texto === "Equipamentos") {
            $directory = 'assets/img/galeria';
            $titulo = 'Equipamentos';
        } elseif ($texto === "Acao") {
            $directory = 'assets/img/acao';
            $titulo = 'Romatec em Ação';
        } else {
            echo "Valor do parâmetro inválido.";
        }
    } else {
        echo "Parâmetro 'texto' ausente na URL.";
    }


    $images = array();
    $videos = array();

    if (is_dir($directory)) {
        $files = scandir($directory);

        foreach ($files as $file) {
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            $fullPath = $directory . '/' . $file;

            if (in_array($ext, array('jpg', 'jpeg', 'png', 'gif'))) {
                $images[] = $fullPath;
            } elseif (in_array($ext, array('mp4', 'avi', 'mkv', 'mov'))) {
                $videos[] = $fullPath;
            }
        }
    }
    ?>


    <section class="galeria section-bg">


        <?php if ($texto === "Equipamentos") : ?>


            <!-- ======= More Services Section ======= -->
            <section id="galeria" class="more-services section-bg">


                <div class="section-title">
                    <h2>Maquinário</h2>

                </div>

                <div class="container">

                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="card">
                                <img src="assets/img//maquinario/madrilhadora.jpg" class="card-detalhes" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">USINAGEM CONVENCIONAL
                                    </h5>
                                    <p>01 Madrilhadora - Clever TPX 6113 <br> (curso: 2000 mm x 2000 mm x1800 mm)
                                    </p>
                                    <p>

                                        02 Fresadoras Ferramenteiras - Clever n° 03 <br>(curso: 940 mm x 420 mm x 400 mm)

                                    </p>
                                    <p>

                                        01 Fresadora Universal. - Clever - FH-3 <br> (curso: 750 mm x300 mm x300 mm)

                                    </p>
                                    <p>01 Tornos convencional - Clever - L - 2680 - A <br>(Ø 660 mm x2000 mm)
                                    </p>

                                    <p>
                                        01 Torno convencional - Imor - P 400 lI <br> (Ø 400 mm x 1000 mm)

                                    </p>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="card">
                                <img src="assets/img/maquinario/cnc.jpg" class="card-detalhes" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">USINAGEM CNC</h5>
                                    <p>
                                        01Torno CNC - ROMI - CENTUR - 30D <br> (Ø 200 mm x 1000 mm)

                                    </p>

                                    <p>01Torno CNC - TRAVIS - TR - 2 <br> (Ø 630 mm x 2000 mm)
                                    </p>

                                    <p>01Centro de usinagem - CNC - ROMI - D1250 <br> (curso - 1250 mm x610 mm x640 mm)
                                    </p>

                                    <p>01 Centro de usinagem - CNC - ROMI - D800 <br>
                                        (curso - 800 mm x 530 mm x 580 mm. equipado
                                        com o o 4° eixo - Alta performance)</p>


                                    <p>01 Fresadora CNC VEKER 2500 <br> (curso 800 x 800 x 2500)
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="card">
                                <img src="assets/img/maquinario/trilho.jpg" class="card-detalhes" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">EQUIPAMENTOS AUXILIARES
                                    </h5>

                                    <p>Solda MIG</p>
                                    <p>Solda MAG</p>
                                    <p>Solda TIG</p>
                                    <p>Serra Franho - FM - 500</p>
                                    <p>Ponte Rolante Capacidade 10 T</p>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <script>
                    const verMaisButtons = document.querySelectorAll('.ver-mais-btn');

                    verMaisButtons.forEach(button => {
                        button.addEventListener('click', function(event) {
                            event.preventDefault();
                            const buttonText = button.getAttribute('data-text');
                            window.location.href = `galeria.php?texto=${encodeURIComponent(buttonText)}`;
                        });
                    });
                </script>

            </section><!-- End More Services Section -->



        <?php endif; ?>



        <div class="section-title">
            <h2><?php echo $titulo ?></h2>

        </div>



        <?php if (!empty($videos)) : ?>
            <div class="video-grid">
                <?php foreach ($videos as $video) : ?>
                    <div class="video-card">
                        <video controls>
                            <source src="<?php echo $video; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>


        <style>
            .galeria-imagem {
                margin: auto;
                width: 80vw;
                column-count: 4;
                column-gap: 10px;
            }

            .container-fluid {
                padding: 10px;
                width: 100%;
            }


            .img-card-galeria {
                width: 100%;
                border-radius: 5px;
                margin-bottom: 10px;
            }


            @media screen and (max-width: 420px) {

                .galeria-imagem {
                    display: flex;
                    flex-direction: column;
                }
            }
        </style>
        <section class="galeria-imagem">
            <?php
            foreach ($images as $image) :
            ?>
                <a href="<?php echo $image; ?>" data-lightbox="models">
                    <img class="img-card-galeria" src="<?php echo $image; ?>" alt="">
                </a>
            <?php
            endforeach;
            ?>
        </section>
    </section>

</body>
<?php include("footer.php"); ?>

<script src="assets/js/lightbox-plus-jquery.js"></script>


<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</html>