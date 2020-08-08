<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-28">
    <div class="top-header">
    </div>
    <div class="title">
        <div class="container">
            <a href="#" class="title-link">
                <h1 class="title-text text-white mb-0">Theme elements</h1>
            </a>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <ul class="bread pl-0">
                <li class="item-bread w-auto">
                    <a href="#" class="item pr-1">Home</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item p-1"> Courses</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item p-1">Theme</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item p-1">Theme elements</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item p-1">Element</a>
                </li>
                <li class="item-bread">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item p-1">Videos</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="content-video">
                <h2 class="video">
                    Videos
                </h2>
                <p class="description">
                    Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec
                    rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit
                    aliquet elit, eget tincidunt nibh pulvinar.
                </p>
            </div>
            <div class="content-box">
                <div class="no-overflow theme">
                    <div class="theme-boxes d-flex">
                        <div class="theme-box">
                            <div class="theme-boxicon">
                                <div class="theme-boxicon-icon">
                                    <i class="fa fa-info"></i>
                                </div>
                                <p class="theme-boxicon-content pt-2">
                                    To know how to use it <a href="#">check documentation.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-2 mt-4">
                    <div class="box2-content d-flex">
                        <i class="fas fa-code content-icon"></i>
                        <p class="content-box2">
                            Use code generator to insert it or
                            <a class="content-link" href="#">get full code from here.</a>
                            Mauris blandit aliquet elit, eget
                            tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus.
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="video">
                Videos with custom image
            </h2>
            <div class="content-video">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <iframe class="embed" src="https://www.youtube.com/embed/zKD91RTMwK0" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <iframe class="embed" src="https://www.youtube.com/embed/wop3FMhoLGs" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <p class="description">
                Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et
                ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                ligula. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt.
            </p>
            <h2 class="video">
                Normal videos
            </h2>
            <div class="content-video">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
			<iframe class="embed" src="https://www.youtube.com/embed/wop3FMhoLGs" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
				</iframe>
                        
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <iframe class="embed" src="https://www.youtube.com/embed/zKD91RTMwK0" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <p class="infor-day">
                Last modified: Thursday, 12 March 2020, 3:43 PM
            </p>
            <div class="module-bottom navigation-link activity-navigation activity-nav">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pull-left">
                            <a class="module-link" href="https://mb2themes.com/themes/cognitio/mod/page/view.php?id=82&amp;forceview=1"
                                title="Courses A-Z Index"><i class="fas fa-caret-left"></i> Slider</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mdl-align">
                            <div class="urlselect">
                                <form method="post" action="https://mb2themes.com/themes/cognitio/course/jumpto.php" class="form-inline" id="url_select_f5f246379c28148">
                                    <input type="hidden" name="sesskey" value="WRTF3SglPu" />
                                    <label for="jump-to-activity" class="sr-only">
                                        Jump to...
                                    </label>
                                    <select id="jump-to-activity" class="custom-select ml-5 urlselect" name="jump">
                                        <option value="" selected="">Jump to...</option>
                                        <option value="">Courses A-Z Index</option>
                                    </select>
                                    <noscript>
                                        <input type="submit" class="btn-secondary ml-1" value="Go" />
                                    </noscript>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pull-right">
                            <a class="module-link" href="https://mb2themes.com/themes/cognitio/mod/page/view.php?id=80&forceview=1"
                                title="Courses A-Z Index"> Feature <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>