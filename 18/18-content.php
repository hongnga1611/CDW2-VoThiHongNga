<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<section class="table-navigation-link type-18">
    <div class="menu">
        <div class="container-fluid">
            <ul class="bread mb-0 pl-0">
                <li class="item-bread w-auto">
                    <a href="#" class="item">Home</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item"> Site Pages</a>
                </li>
                <li class="item-bread w-auto">
                    <i class="icons fas fa-chevron-right"></i>
                    <a href="#" class="item">Site announcement</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="title-page pt-5">Site announcements</h2>
        <div class="content-page">
            General news and announcements
        </div>
        <div class="theme-table-wrap">
            <table class="forumheaderlist table table-striped">
                <thead class="text-left">
                    <tr>
                        <th class="header topic" scope="col">Discussion</th>
                        <th class="header author" scope="col">Started by</th>
                        <th class="header replies" scope="col">Replies</th>
                        <th class="header lastpost" scope="col">Last post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="discussion">
                        <td class="topic starter"><a class="module-link" href="#">Vestibulum ante ipsum primis in
                                faucibus orci</a></td>
                        <td class="author">
                            <div class="media">
                                <span class="pull-left">
                                    <a class="module-link" href="#">
                                        <img src="https://mb2themes.com/themes/cognitio/theme/image.php/mb2cg/core/1592766086/u/f2"
                                            class="userpicture defaultuserpic" width="35" height="35"
                                            alt="Picture of Admin User" title="Picture of Admin User" />
                                    </a>
                                </span>
                                <div class="media-body"><a class="module-link" href="#">Admin User</a></div>
                            </div>
                        </td>
                        <td class="replies pl-5">
                            <a class="module-link" href="#">0</a>
                        </td>
                        <td class="lastpost">
                            <a class="module-link" href="#">Admin User</a><br />
                            <a class="module-link" href="#"><time datetime="2018-11-12T17:49:55+01:00">Mon, 12 Nov 2018,
                                    5:49 PM</time></a>
                        </td>
                    </tr>

                    <tr class="discussion">
                        <td class="topic starter"><a class="module-link" href="#">Proin eget tortor risus ulla quis
                                lorem ut libero</a></td>
                        <td class="author">
                            <div class="media">
                                <span class="pull-left">
                                    <a class="module-link" href="#">
                                        <img src="https://mb2themes.com/themes/cognitio/theme/image.php/mb2cg/core/1592766086/u/f2"
                                            class="userpicture defaultuserpic" width="35" height="35"
                                            alt="Picture of Admin User" title="Picture of Admin User" />
                                    </a>
                                </span>
                                <div class="media-body"><a class="module-link" href="#">Admin User</a></div>
                            </div>
                        </td>
                        <td class="replies pl-5"><a class="module-link" href="#">0</a></td>
                        <td class="lastpost">
                            <a class="module-link" href="#">Admin User</a><br />
                            <a class="module-link" href="#"><time datetime="2018-11-12T16:47:47+01:00">Mon, 12 Nov 2018,
                                    4:47 PM</time></a>
                        </td>
                    </tr>

                    <tr class="discussion">
                        <td class="topic starter"><a class="module-link" href="#">Cras ultricies ligula sed magna dictum
                                porta porttitor
                                accumsan</a></td>
                        <td class="author">
                            <div class="media">
                                <span class="pull-left">
                                    <a class="module-link" href="#">
                                        <img src="https://mb2themes.com/themes/cognitio/theme/image.php/mb2cg/core/1592766086/u/f2"
                                            class="userpicture defaultuserpic" width="35" height="35"
                                            alt="Picture of Admin User" title="Picture of Admin User" />
                                    </a>
                                </span>
                                <div class="media-body"><a class="module-link" href="#">Admin User</a></div>
                            </div>
                        </td>
                        <td class="replies pl-5"><a class="module-link" href="#">0</a></td>
                        <td class="lastpost">
                            <a class="module-link" href="#">Admin User</a><br />
                            <a class="module-link" href="#"><time datetime="2018-11-12T16:46:09+01:00">Mon, 12 Nov 2018,
                                    4:46 PM</time></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="module-bottom navigation-link activity-navigation activity-nav">
            <div class="row">
                <div class="col-md-4">
                    <div class="pull-left">
                        <a class="module-link"
                            href="https://mb2themes.com/themes/cognitio/mod/page/view.php?id=82&amp;forceview=1"
                            id="prev-activity-link" title="Courses A-Z Index">◄ Courses A-Z
                            Index</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mdl-align">
                        <div class="urlselect">
                            <form method="post" action="https://mb2themes.com/themes/cognitio/course/jumpto.php"
                                class="form-inline" id="url_select_f5f246379c28148">
                                <input type="hidden" name="sesskey" value="WRTF3SglPu" />
                                <label for="jump-to-activity" class="sr-only">
                                    Jump to...
                                </label>
                                <select id="jump-to-activity" class="custom-select urlselect" name="jump">
                                    <option value="" selected="">Jump to...</option>
                                    <option value="">Courses A-Z Index</option>
                                </select>
                                <noscript>
                                    <input type="submit" class = "btn btn-secondary ml-1" value="Go" />
                                </noscript>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pull-right"></div>
                </div>
            </div>
        </div>
    </div>
</section>