<!DOCTYPE html>
<html lang="en">




    <style>
        .clients {
            padding: 12px 0;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: space-between;

        }

        .clients img {
            max-width: 40%;
            transition: all 0.4s ease-in-out;
            padding: 15px 0;
            filter: grayscale(100);

        }

        .clients img:hover {
            filter: none;
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            .clients img {
                max-width: 40%;
            }
        }
    </style>



        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">
                <div class="section-title">
                    <h2 style="margin-top: 40px;">Alguns de nossos clientes</h2>
                
                </div>

                <div class="row" data-aos="zoom-in">

                    <?php
                    $directory = 'assets/img/parceiros';
                    $images = array();

                    if (is_dir($directory)) {
                        $files = scandir($directory);

                        foreach ($files as $file) {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            $fullPath = $directory . '/' . $file;

                            if (in_array($ext, array('jpg', 'jpeg', 'png', 'gif'))) {
                                $images[] = $fullPath;
                            }
                        }
                    }



                    ?>

                    <?php
                    foreach ($images as $image) :
                    ?>
                        <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?php echo $image; ?>" class="img-fluid" alt="">
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>

            </div>
        </section><!-- End Cliens Section -->



 <!-- End #main -->



    <!-- Vendor JS Files -->

    <!-- Template Main JS File -->


