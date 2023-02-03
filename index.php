<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çarkı Felek</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <style>
        .rounded {
            width: 500px;
            height: 500px;
            border-radius: 50%;
            position: relative;
            background: url("carlifelek.png") center center no-repeat;
            background-size: cover;
            transition: 3000ms cubic-bezier(.34, .62, 1, .73);

        }

        .felek {
            position: relative;
            width: 500px;
            height: 500px;
        }

        .felek .arraw {
            position: absolute;
            right: -60px;
        }

        .felek img.arraw {
            width: 100px;
            z-index: 99;

            top: 50%;
            transform: translate(0, -50%);
        }
    </style>
</head>

<body>

    <?php

    # Çark Verilerini Diziye Ekliyoruz bu sayede Rastgele veri çek komutu yapıyoruz.
    $content = [
        "100 GB Kazandın",
        "200 GB Kazandın",
        "300 GB Kazandın",
        "400 GB Kazandın",
        "500 GB Kazandın",
        "6000 GB Kazandın",
        "700 GB Kazandın",
        "800 GB Kazandın",
        "900 GB Kazandın",
        "1100 GB Kazandın",
        "1200 GB Kazandın",
        "1300 GB Kazandın"
    ];

    # Dizideki Çart Verilerini Rastgele Çekmek için Kullanıyoruz.
    $rand = $content[array_rand($content)];

    echo $rand;

    # Çark değerince Ekli Olan Rotate Değerini Ekrana Yansıtıyor
    switch ($rand) {
        case '100 GB Kazandın':
            echo '
            <script>
                $(document).ready(function() {
                    $(".rounded").css("transform", "rotate(600deg)");
                });
            </script>';
            break;

        case '200 GB Kazandın':
            echo '
            <script>
                $(document).ready(function() {
                    $(".rounded").css("transform", "rotate(1020deg)");
                });
            </script>';
            break;

        case '300 GB Kazandın':
            echo '
            <script>
                $(document).ready(function() {
                    $(".rounded").css("transform", "rotate(210deg)");
                });
            </script>';
            break;

        case '400 GB Kazandın':
            echo '
                <script>
                    $(document).ready(function() {
                        $(".rounded").css("transform", "rotate(10deg)");
                    });
                </script>';
            break;

        case '500 GB Kazandın':
            echo '
                <script>
                    $(document).ready(function() {
                        $(".rounded").css("transform", "rotate(600deg)");
                    });
                </script>';
            break;

        case '600 GB Kazandın':
            echo '
                <script>
                    $(document).ready(function() {
                        $(".rounded").css("transform", "rotate(1020deg)");
                    });
                </script>';
            break;

        case '700 GB Kazandın':
            echo '
                <script>
                    $(document).ready(function() {
                        $(".rounded").css("transform", "rotate(210deg)");
                    });
                </script>';
            break;

        case '800 GB Kazandın':
            echo '
                    <script>
                        $(document).ready(function() {
                            $(".rounded").css("transform", "rotate(10deg)");
                        });
                    </script>';
            break;


        case '900 GB Kazandın':
            echo '
                    <script>
                        $(document).ready(function() {
                            $(".rounded").css("transform", "rotate(1020deg)");
                        });
                    </script>';
            break;

        case '1000 GB Kazandın':
            echo '
                    <script>
                        $(document).ready(function() {
                            $(".rounded").css("transform", "rotate(210deg)");
                        });
                    </script>';
            break;

        case '1100 GB Kazandın':
            echo '
                        <script>
                            $(document).ready(function() {
                                $(".rounded").css("transform", "rotate(10deg)");
                            });
                        </script>';
            break;



        case '1200 GB Kazandın':
            echo '
                        <script>
                            $(document).ready(function() {
                                $(".rounded").css("transform", "rotate(210deg)");
                            });
                        </script>';
            break;

        case '1300 GB Kazandın':
            echo '
                            <script>
                                $(document).ready(function() {
                                    $(".rounded").css("transform", "rotate(10deg)");
                                });
                            </script>';
            break;




        case 'İFLAS':
            echo '
                    <script>
                        $(document).ready(function() {
                            $(".rounded").css("transform", "rotate(290deg)");
                        });
                    </script>';
            break;

        default:
            break;
    }

    ?>


    <div class="felek">
        <div class="rounded">
        </div>

        <img src="arrow.png" alt="" class="arraw">
    </div>

    <?php
    if ($_POST) {
        echo "Post var";
    } else {
        echo "Post yok";
    }
    ?>

    <form action="index.php" method="POST">
        <input type="text" name="adi">
        <button>Çarkı Çevir</button>
    </form>
</body>

</html>