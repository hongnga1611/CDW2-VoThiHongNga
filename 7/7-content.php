<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="logo-footer">
                    <img src="images/logo_footer.png" alt="">
                </div>
                <p class="content">
                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor. Cras
                    ultricies ligula sed magna dictum porta. Vivamus magna.
                </p>
                <button>
                    <span>READ MORE</span>
                </button>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="userfull">
                    <h5>
                        Useful Links
                    </h5>
                </div>
                <ul class="no-overflow p-0">
                    <li><a href="#" class="link">Nulla porttitor accumsan</a></li>
                    <li><a href="#" class="link">Sed porttitor lectus nibh</a></li>
                    <li><a href="#" class="link">Proin eget tortor risus</a></li>
                    <li><a href="#" class="link">Donec sollicitudin molestie</a></li>
                    <li><a href="#" class="link">Quisque velit nisi</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-xs-12 contact p-0">
                <h5>
                    Contact
                </h5>
                <p class="contact-content">
                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi vivamus suscipit.
                </p>
                <ul class="infor">
                    <li>
                        <span>
                            <i class="fas fa-envelope"></i>
                            <span> info@example.com</span>
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="fas fa-phone-alt"></i>
                            <span>+12 345 67 89</span>
                            <i class="fas fa-print"></i>
                            <span>+12 345 67 89</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 left-end text-md-left text-center">
                    Copyright &copy; Cognitio 2018. All rights reserved.
                </div>
                <div class="col-md-6 icon-md-7">
                    <div class="header-tools px-1 position-relative">
                        <ul class="list-unstyled m-0 d-flex justify-content-md-end justify-content-center">
                            <li class="mr-1 fb-icon position-relative">
                                <i class="fab fa-facebook-f px-2 py-1 icon-relative position-relative"></i>
                            </li>
                            <li class="mr-1 twit-icon position-relative">
                                <i class="fab fa-twitter icon_pad position-relative"></i>
                            </li>
                            <li class="mr-1 whats-icon position-relative">
                                <i class="fab fa-whatsapp icon_pad position-relative"></i>
                            </li>
                            <li class="vk-icon position-relative">
                                <i class="fab fa-vk icon_pad position-relative px-1 py-1"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>