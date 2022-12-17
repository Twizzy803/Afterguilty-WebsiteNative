<?php 
include "db.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\landingpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>After Guilty.Store</title>
</head>

<body>

    <!-- menu login dan register -->
    <header id="rectangel">
        <div class="Tulisan1">
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            <p>Find A Store In Your Location</p>
        </div>
        <div class="Tulisan2">
            <p>Free Shipping For All Members. Create Your Account Now !</p>
        </div>
        <div id="Daftar">
            <nav>
                <ul>
                    <!-- <li>
                        <select name="Region" id="wilayah">
                            <option selected>Region</option>
                            <option value="indonesia">Indonesia</option>
                            <option value="english">English</option>
                        </select>
                    </li> -->
                    <li><a href="RegisterPage.php">Register</a>|</li>
                    <li><a href="LoginPage.php">Login</a></li>
                </ul>
            </nav>
            <div class="menu">
                <i class="ri-menu-3-fill"></i>
            </div>
        </div>
    </header>

    <!-- bagian logo,pencarian dan icon beli dan kawan-kawanya -->
    <div class="logo">
        <div class="nama1">
            <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine
                " data-aos-duration="2000">After Guilty</p>
        </div>
        <div class="nama2">
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Poiret+One&display=swap" rel="stylesheet">
            <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">Store
            </p>
        </div>
        <div class="btn-cari">
            <input class="boxs-pencarian" type="text" placeholder="What are you looking for?" required.>
            <div class="gm-cari">
                <img src="gambar\search-interface-symbol (1).png" alt="gambar">
            </div>
        </div>
        <div class="btn-kanan">
            <div class="btn-beli">
                <a href=""><img src="https://img.icons8.com/external-pixer-icons-pack-dmitry-mirolyubov/44/000000/external-cart-retail-pixer-icons-pack-dmitry-mirolyubov.png" /></a>
            </div>
            <div class="btn-favor">
                <a href=""><img src="gambar\favorit.png"></a>
            </div>
            <div class="btn-profil">
                <a href=""><img src="gambar\avatar.png"></a>
            </div>
        </div>
    </div>
    <!-- gambar katalog -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="top: 50px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="gambar\Poster1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="gambar\Coming Soon.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->
    <div class="katalog1">
        <img src="gambar\Poster1.png" data-aos="fade-right">
        <a href="">Shop Now </a>
    </div> <br><br>
    <!-- kategori new arrivals -->
    <div class="new" style="margin-bottom: 1.2vw;">
        <div class="teks1">
            <p>New Arrivals</p>
            <img src="gambar\Grid (1).png"">
    </div>
    <div class=" teks2">
            <p>View More</p>
        </div>
    </div>

    <!-- box1 item -->
    <div id="box1_item">
        <div class="box1">
            <div class="kotak1" style="position:absolute;width: 95%;height: 36vw; background: rgba(255, 255, 255, 0.505); border-radius: 15px;
        margin: 5px; left: 27px;top: 510px;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);" alt="kotak">
            </div>
            <!-- item 1 -->
            <div id="soldout" style="display: flex;">
                <div class="boxitem1" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 6%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                    <p style="position: relative;;font-family: Roboto;font-weight: bold;text-align: left;top: 78%;width: 17vw;left: 13px;
                font-weight: lighter;font-size: 1.3vw;">
                        After Guilty-Japanese Oversize Black</p>
                    <div class="harga1">
                        <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                            Rp.249.000</p>
                        <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter; ">
                            <s>Rp.299.000</s>
                        </p>
                    </div>

                </div>
                <div class="item1" style="display: block;position: absolute;left: 7%;top: 580px;margin: 0px;">
                    <img style="width: 16vw;" src="gambar\baju1.png">
                    <section style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                    top: -12px; left: 5px;margin: 0px;" class="bulat-1">
                        <a class="love1" href="">
                            <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                        </a>
                    </section>
                    <a href="" class="sale1" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
                </div>
            </div>

            <!-- item 2 -->
            <div class="boxitem2" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 28.5%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: bold;text-align: left;top: 78%;width: 18vw;left: 13px;
                font-weight: lighter;font-size: 1.3vw;">
                    After Guilty-Japanese Rose Urban Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.349.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.399.000</s>
                </p>
            </div>
            <div class="item2" style="display: block;position: absolute ;left: 29.7%;top: 580px;width: 0;margin: 0px;">
                <img class="baju2" style="width: 16vw;" src="gambar\baju2.png">
                <section class="bulat2" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love2" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale2" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
            <!-- item 3 -->
            <div class="boxitem3" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 51.4%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: lighter;text-align: left;top: 78%;width: 17vw;left: 13px;
                    font-size: 1.3vw;">
                    After Guilty-Japanese Oversize Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.149.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.199.000</s>
                </p>
            </div>
            <div class="item3" style="display: block;position: absolute ;left: 52.7%;top: 580px;width: 0;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju3.png">
                <section class="bulat3" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love3" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale3" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
            <!-- item 4 -->
            <div class="boxitem4" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 75%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: lighter;text-align: left;top: 78%;width: 17vw;left: 13px;font-size: 1.3vw;">
                    After Guilty - ACDC 1979 Tour Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.149.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.199.000</s>
                </p>
            </div>
            <div class="item4" style="display: block;position: absolute ;left: 76.3%;top: 580px;width: 0;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju4.png">
                <section class="bulat4" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love4" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale4" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
        </div>
        <!-- PANAH -->
        <div class="panah">
            <a href="" class="panah_kanan"><img src="gambar\panah_kanan.png"></a>
            <!-- <a href="" class="panah_kiri"><img src="gambar\panah_kiri.png"></a> -->
        </div>

    </div>

    </div>
    <!-- gambar comingsoon -->
    <div class="comingsoon">
        <p>Coming Soon</p>
        <img src="gambar\Coming Soon.png">
        <a href="">More Information &#8594;</a>
    </div>
    <!-- kategori Best sellers -->
    <div class="new2" style="margin-bottom: 1.2vw;">
        <div class="teks1">
            <p>Best Sellers</p>
            <img src="gambar\Grid (1).png">
        </div>
        <div class="teks2">
            <p>View More</p>
        </div>
    </div>


    <!-- box2 item -->
    <div id="box2_item">
        <div class="box2-1">
            <div class="kotak2-1" style="position: absolute;width: 95%;height: 36vw; background: rgba(255, 255, 255, 0.34); border-radius: 15px;
        margin: 5px; left: 27px;top: 510px;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);">
            </div>
            <!-- item 1 -->
            <div class="boxitem2-1" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 6%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: bold;text-align: left;top: 78%;width: 17vw;left: 13px;
                font-weight: lighter;font-size: 1.3vw;">
                    After Guilty-Japanese Oversize Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.249.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter; ">
                    <s>Rp.299.000</s>
                </p>
            </div>
            <div class="item2-1" style="display: block;position: absolute;left: 7%;top: 580px;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju1.png">

                <section class="bulat2-1" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love2-1" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale2-1" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
            <!-- item 2 -->
            <div class="boxitem2-2" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 28.5%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: bold;text-align: left;top: 78%;width: 18vw;left: 13px;
                font-weight: lighter;font-size: 1.3vw;">
                    After Guilty-Japanese Rose Urban Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.349.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.399.000</s>
                </p>
            </div>
            <div class="item2-2" style="display: block;position: absolute ;left: 29.7%;top: 580px;width: 0;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju2.png">
                <section class="bulat2-2" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love2-2" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale2-2" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
            <!-- item 3 -->
            <div class="boxitem2-3" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 51.4%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: lighter;text-align: left;top: 78%;width: 17vw;left: 13px;font-size: 1.3vw;">
                    After Guilty-Japanese Oversize Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.149.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.199.000</s>
                </p>
            </div>
            <div class="item2-3" style="display: block;position: absolute ;left: 52.7%;top: 580px;width: 0;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju3.png">
                <section class="bulat2-3" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love2-3" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale2-3" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
            <!-- item 4 -->
            <div class="boxitem2-4" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 75%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: lighter;text-align: left;top: 78%;width: 17vw;left: 13px;font-size: 1.3vw;">
                    After Guilty - ACDC 1979 Tour Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.149.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.199.000</s>
                </p>
            </div>
            <div class="item2-4" style="display: block;position: absolute ;left: 76.3%;top: 580px;width: 0;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju4.png">
                <section class="bulat2-4" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love2-4" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale2-4" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
        </div>
    </div>

    <!-- kategori All product -->
    <div class="new3" style="margin-bottom: 10px;">
        <div class="teks1">
            <p>All product</p>
            <img src="gambar\Grid (1).png">
        </div>
        <div class="teks2">
            <p>View More</p>
        </div>
    </div>

    <!-- box3 item -->
    <div id="box3_item">
        <div class="box3-1">
            <div class="kotak3-1" style="position: absolute;width: 95%;height: 70vw; background: rgba(255, 255, 255, 0.34); border-radius: 15px;
        margin: 5px; left: 27px;top: 510px;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);">
            </div>
            <!-- item 1 -->
            <div class="boxitem3-1" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 6%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: bold;text-align: left;top: 78%;width: 17vw;left: 13px;
                font-weight: lighter;font-size: 1.3vw;">
                    After Guilty-Japanese Oversize Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.249.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter; ">
                    <s>Rp.299.000</s>
                </p>
            </div>
            <div class="item3-1" style="display: block;position: absolute;left: 7%;top: 580px;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju1.png">

                <section class="bulat3-1" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love3-1" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale3-1" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
            <!-- item 2 -->
            <div class="boxitem3-2" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 28.5%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: bold;text-align: left;top: 78%;width: 18vw;left: 13px;
                font-weight: lighter;font-size: 1.3vw;">
                    After Guilty-Japanese Rose Urban Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.349.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.399.000</s>
                </p>
            </div>
            <div class="item3-2" style="display: block;position: absolute ;left: 29.7%;top: 580px;width: 0;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju2.png">
                <section class="bulat3-2" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love3-2" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale3-2" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
            <!-- item 3 -->
            <div class="boxitem3-3" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 51.4%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: lighter;text-align: left;top: 78%;width: 17vw;left: 13px;font-size: 1.3vw;">
                    After Guilty-Japanese Oversize Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.149.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.199.000</s>
                </p>
            </div>
            <div class="item3-3" style="display: block;position: absolute ;left: 52.7%;top: 580px;width: 0;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju3.png">
                <section class="bulat3-3" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love3-3" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale3-3" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
            <!-- item 4 -->
            <div class="boxitem3-4" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 75%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
                <p style="position: relative;;font-family: Roboto;font-weight: lighter;text-align: left;top: 78%;width: 17vw;left: 13px; font-size: 1.3vw;">
                    After Guilty - ACDC 1979 Tour Black</p>
                <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                    Rp.149.000</p>
                <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                    <s>Rp.199.000</s>
                </p>
            </div>
            <div class="item3-4" style="display: block;position: absolute ;left: 76.3%;top: 580px;width: 0;margin: 0px;">
                <img style="width: 16vw;" src="gambar\baju4.png">
                <section class="bulat3-4" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                    <a class="love3-4" href="">
                        <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                    </a>
                </section>
                <a href="" class="sale3-4" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
            </div>
        </div>
    </div>

    <!-- box4 item -->
    <div id="box4_item">
        <!-- item 1 -->
        <div class="boxitem4-1" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 6%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
            <p style="position: relative;;font-family: Roboto;font-weight: bold;text-align: left;top: 78%;width: 17vw;left: 13px;
                font-weight: lighter;font-size: 1.3vw;">
                After Guilty-Japanese Oversize Black</p>
            <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                Rp.249.000</p>
            <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter; ">
                <s>Rp.299.000</s>
            </p>
        </div>
        <div class="item4-1" style="display: block;position: absolute;left: 7%;top: 580px;margin: 0px;">
            <img style="width: 16vw;" src="gambar\baju4.png">

            <section class="bulat4-1" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                <a class="love4-1" href="">
                    <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                </a>
            </section>
            <a href="" class="sale4-1" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
        </div>
        <!-- item 2 -->
        <div class="boxitem4-2" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 28.5%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
            <p style="position: relative;;font-family: Roboto;font-weight: bold;text-align: left;top: 78%;width: 18vw;left: 13px;
                font-weight: lighter;font-size: 1.3vw;">
                After Guilty-Japanese Rose Urban Black</p>
            <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                Rp.349.000</p>
            <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                <s>Rp.399.000</s>
            </p>
        </div>
        <div class="item4-2" style="display: block;position: absolute ;left: 29.7%;top: 580px;width: 0;margin: 0px;">
            <img style="width: 16vw;" src="gambar\baju3.png">
            <section class="bulat4-2" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                <a class="love4-2" href="">
                    <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                </a>
            </section>
            <a href="" class="sale4-2" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
        </div>
        <!-- item 3 -->
        <div class="boxitem4-3" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 51.4%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
            <p style="position: relative;;font-family: Roboto;font-weight: lighter;text-align: left;top: 78%;width: 17vw;left: 13px;font-size: 1.3vw;">
                After Guilty-Japanese Oversize Black</p>
            <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                Rp.149.000</p>
            <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                <s>Rp.199.000</s>
            </p>
        </div>
        <div class="item4-3" style="display: block;position: absolute ;left: 52.7%;top: 580px;width: 0;margin: 0px;">
            <img style="width: 16vw;" src="gambar\baju2.png">
            <section class="bulat4-3" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                <a class="love4-3" href="">
                    <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                </a>
            </section>
            <a href="" class="sale4-3" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
        </div>
        <!-- item 4 -->
        <div class="boxitem4-4" style="position: absolute; width: 19%; height: 30vw; background: #ffffff; top: 560px; left: 75%;
            border-radius: 15px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);font-family: 'Roboto', sans-serif;">
            <p style="position: relative;;font-family: Roboto;font-weight: lighter;text-align: left;top: 78%;width: 17vw;left: 13px; font-size: 1.3vw;">
                After Guilty - ACDC 1979 Tour Black</p>
            <p style="position: relative;text-align: center;top: 83%;left: 20%;color: #FF3737;font-weight: bold;font-size: 1.5vw; font-weight: lighter;">
                Rp.149.000</p>
            <p style="position: relative; text-align: center;top: 77%;right: 18%;font-size: 1.2vw; font-weight: lighter;">
                <s>Rp.199.000</s>
            </p>
        </div>
        <div class="item4-4" style="display: block;position: absolute ;left: 76.3%;top: 580px;width: 0;margin: 0px;">
            <img style="width: 16vw;" src="gambar\baju1.png">
            <section class="bulat4-4" style="display: block;position: absolute;width: 2.1vw;height: 2.1vw;background: #e3e3e300;border-radius: 100%;
                top: -12px; left: 5px;margin: 0px;">
                <a class="love4-4" href="">
                    <img style="position: absolute;left: 3px;top: 5px;width: 1.7vw;" src="gambar\love1.png">
                </a>
            </section>
            <a href="" class="sale4-4" style="display: block;position: absolute;background: #FFCBA5;width: 2.5vw;height: 1.4vw;
                left: 14vw;top: -8px;text-decoration: none; text-align: center; font-family: 'IBM Plex Sans Thai Looped', sans-serif;
                color: #000000;font-size: 1.2vw;">Sale</a>
        </div>
    </div>
    </div>
    <!-- Footer -->
    <div class="container" style="position: relative; top: 170vw;">
        <footer class="py-5">
            <div class="row">
                <div class="list-1">
                    <h2>Help</h2> <br>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Exchange & Return</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Payment Information</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Track Yout Order</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    </ul>
                </div>

                <div class="list-2">
                    <h2>Bussiness</h2> <br>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pop Up Store</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Career</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">News </a></li>
                    </ul>
                </div>

                <div class="list-3">
                    <h2>Follow Us</h2> <br>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="ri-instagram-fill"></i>After Guilty</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="ri-facebook-box-fill"></i></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="ri-twitter-fill"></i></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="ri-youtube-fill"></i></a></li>
                    </ul>
                </div>

                <div class="list-4">
                    <h2>Download Mobile App</h2> <br>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="#" class="nav-link p-0 text-muted"><img src="gambar\Appstore.png" alt="AppStore"></a></li>
                        <li class="nav-item"><a href="#" class="nav-link p-0 text-muted"><img src="gambar\Goolgleplay.png" alt="PlayStore"></a></li>
                    </ul>
                </div>
            </div>
            <hr style="left: 9vw;position: relative;" class="gr-copyright">
            <p class="text-center text-muted" style="position: relative; left: 4vw;">©2022 AfterGuilty Store. All Right Reserved</p>
        </footer>
    </div>



    <!-- Option 1: Bootstrap Bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        src = "js\LandingPage.js"
    </script>
</body>

</html>