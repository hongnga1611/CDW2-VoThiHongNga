<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3">
    <div class="triangle text-center">
        <h3>
            Cognitio theme is a modern, professional and beautiful Moodle theme which provides many awesome features,
            options and clever solutions for Moodle websites.
        </h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center infor-icon">
                <div class="icon-description position-relative">
                    <i class="fas fa-paint-brush icon-name position-absolute"></i>
                </div>
                <div class="mb-2">
                    <a href="#" class="text-decoration-none title">Outstanding Design</a>
                </div>
                <p class="text-center content-icon">
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget
                    malesuada.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center infor-icon">
                <div class="icon-description position-relative">
                    <i class="fas fa-wrench icon-name position-absolute"></i>
                </div>
                <div class="mb-2">
                    <a href="#" class="text-decoration-none title">Creative Coding</a>
                </div>
                <p class="text-center content-icon">
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget
                    malesuada.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center infor-icon">
                <div class="icon-description position-relative">
                    <i class="fas fa-paint-brush icon-name position-absolute"></i>
                </div>
                <div class="mb-2">
                    <a href="#" class="text-decoration-none title">Detailed Documentation</a>
                </div>
                <p class="text-center content-icon">
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget
                    malesuada.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center infor-icon">
                <div class="icon-description position-relative">
                    <i class="fas fa-wrench icon-name position-absolute"></i>
                </div>
                <div class="mb-2">
                    <a href="#" class="text-decoration-none title">Best Support</a>
                </div>
                <p class="text-center content-icon">
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget
                    malesuada.
                </p>
            </div>
        </div>
    </div>
</div>