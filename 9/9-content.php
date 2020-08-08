<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-9">
    <div class="top-header">
    </div>
    <div class="title">
        <div class="container-fluid">
            <a href="#" class="title-link">
                <h1 class="title-text text-white pl-5 p-1 mb-0">Acropolis ligula sed magna</h1>
            </a>
        </div>
    </div>
    <div class="menu">
        <div class="container-fluid">
            <ul class="bread pl-5 mb-0">
                <li class="item-bread w-auto">
                    <a href="#" class="item">Home</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item"> Courses</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item">Theme</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item">Theme elements</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="notice ">
        <div class="container">
            <div class="notice-infor align-items-center d-flex justify-content-center ">
                <p class="notice-infor  m-0 py-2">
                    <b>Sample notice:</b>
                    This is example of notice created with notices plugin dedicated to this theme.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="no-overflow proin">
            <p class="content-overflow pt-5">
                Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
                quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                du orem ipsum dolor sit amet, consectetur adipiscing
                elit. Donec sollicitudin molestie malesuada.
            </p>
            <div class="theme-boxcontent mt-4">
                <div class="theme-boxcontent-content">
                    <i class="fa fa-comments theme-boxcontent-icon"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget
                    consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis.
                </div>
            </div>
        </div>
        <div class="forum">
            <a class="icon-forum" onclick="" href="#">
                <img src="https://mb2themes.com/themes/cognitio/theme/image.php/mb2cg/forum/1592766086/icon"
                    class="iconlarge" alt="" role="presentation" aria-hidden="true" />
                <span class="instancename pl-2">Announcements</span>
            </a>
        </div>
        <div class="right side">
            <img class="icon spacer" alt="" aria-hidden="true"
                src="https://mb2themes.com/themes/cognitio/theme/image.php/mb2cg/core/1592766086/spacer" />
        </div>
        <div class="content">
            <h3 class="sectionname">
                <span><a href="#" class="sectionname-custom">Custom image and tabs</a></span>
            </h3>
            <div class="no-overflow theme">
                <div class="theme-boxes d-flex">
                    <div class="theme-box">
                        <div class="theme-boxicon">
                            <div class="theme-boxicon-icon">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="theme-boxicon-content">Donec sollicitudin molestie malesuada. Curabitur non
                                nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis
                                porttitor volutpat.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="no-overflow menu-tabs">
            <img class="img-tab w-100 pb-5 " src="images/compressor.jpg" alt="">
            <div class="theme-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs list-nine" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active tab-link" data-toggle="tab" href="#home">Tab 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-link" data-toggle="tab" href="#menu1">Tab 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-link" data-toggle="tab" href="#menu2">Tab 3</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active tab-description"><br>
                        <p class="description">
                            Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum
                            ac diam sit amet quam vehicula elementum sed sit amet dui.
                            Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in,
                            elementum idenim. Donec sollicitudin molestie malesuada.
                        </p>
                        <a href="#" class="btn btn-success btn-icon-before"><span
                                class="btn-intext">Read more</span></a>
                    </div>
                    <div id="menu1" class="container tab-pane fade tab-description"><br>
                        <p class="description">
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies
                            ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <a href="#" class="btn btn-info btn-icon-before"><span
                                class="btn-intext">Read more</span></a>
                    </div>
                    <div id="menu2" class="container tab-pane fade tab-description"><br>
                        <p class="description">
                            Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac
                            lectus. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget
                            consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis
                            quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                        </p>
                        <a href="#" class="btn btn-warning btn-icon-before"><span
                                class="btn-intext">Read more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>