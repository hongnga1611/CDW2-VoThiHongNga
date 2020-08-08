<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-6">
    <div class="hinh-chu-nhat text-center text-white pt-4">
        Featured Courses
    </div>
    <div class="box mx-auto mb-2"></div>
    <div class="container h-100">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img">
                        <img class="img-fluid" src="images/anh.jpg" alt="" />
                        <div class="text2color w-100">
                            <div class="do bg-danger text-white py-1">
                                Organic chemistry
                            </div>
                            <div class="vang bg-warning">
                                <div class="py-1">
                                    Organic chemistry
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content p-3 border-bottom border-left border-right">
                        <div class="content-in">
                            <div class="text-overlow">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, ullam libero quia
                                tempore unde voluptas corporis ad aliquam est animi earum similique quibusdam
                                officiis tempora maxime amet delectus laborum sit.
                            </div>
                            <div class="button-red my-3">
                                <a class="btn btn-danger" href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img class="img-fluid" src="images/anh.jpg" alt="" />
                        <div class="text2color w-100">
                            <div class="do bg-danger text-white py-1">
                                Organic chemistry
                            </div>
                            <div class="vang bg-warning">
                                <div class="py-1">
                                    Organic chemistry
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content p-3 border-bottom border-left border-right">
                        <div class="content-in">
                            <div class="text-overlow">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, ullam libero quia
                                tempore unde voluptas corporis ad aliquam est animi earum similique quibusdam
                                officiis tempora maxime amet delectus laborum sit.
                            </div>
                            <div class="button-red my-3">
                                <a class="btn btn-danger" href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img class="img-fluid" src="images/anh.jpg" alt="" />
                        <div class="text2color w-100">
                            <div class="do bg-danger text-white py-1">
                                Organic chemistry
                            </div>
                            <div class="vang bg-warning">
                                <div class="py-1">
                                    Organic chemistry
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content p-3 border-bottom border-left border-right">
                        <div class="content-in">
                            <div class="text-overlow">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, ullam libero quia
                                tempore unde voluptas corporis ad aliquam est animi earum similique quibusdam
                                officiis tempora maxime amet delectus laborum sit.
                            </div>
                            <div class="button-red my-3">
                                <a class="btn btn-danger" href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img class="img-fluid" src="images/anh.jpg" alt="" />
                        <div class="text2color w-100">
                            <div class="do bg-danger text-white py-1">
                                Organic chemistry
                            </div>
                            <div class="vang bg-warning">
                                <div class="py-1">
                                    Organic chemistry
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content p-3 border-bottom border-left border-right">
                        <div class="content-in">
                            <div class="text-overlow">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, ullam libero quia
                                tempore unde voluptas corporis ad aliquam est animi earum similique quibusdam
                                officiis tempora maxime amet delectus laborum sit.
                            </div>
                            <div class="button-red my-3">
                                <a class="btn btn-danger" href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change swiper-button-next text-white">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="change swiper-button-prev text-white">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".swiper-container", {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
</div>