<?php

include "../config/database.php";
include "../include/pages_header.php";
include "../include/pages_navbar.php";
?>

<main>
            <!-- breadcrumb start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="col">
                        <div class="row">
                            <div class="breadcrumb-index">
                                <!-- breadcrumb main-title start-->
                                <div class="breadcrumb-title">
                                    <h2>News</h2>
                                </div>
                                <!-- breadcrumb main-title end-->
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item-link">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item-link">
                                        <span>News</span>
                                    </li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            <!-- blog-content start -->
            <section class="blog-content-wrap section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="blog-grid-wrapper left-side">
                                <!-- blog sidebar start -->
                                <div class="blog-grid-wrap blog-sidebar">
                                    <div class="blog-sidebar-wrap">
                                        <!-- blog-sidebar search start -->
                                        <div class="blog-post-sidebar blog-search">
                                            <h6 class="blog-sidebar-title">Search</h6>
                                            <div class="search-post">
                                                <form method="get">
                                                    <input type="search" name="q" class="input-text" placeholder="Search blog" required autocomplete="off">
                                                    <a href="search-blog.html" class="btn-search"><i class="feather-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- blog-sidebar search end -->
                                        <!-- blog-sidebar recent-post start -->
                                        <div class="blog-post-sidebar blog-sidebar-recent-post">
                                            <h6 class="blog-sidebar-title">Recent post</h6>
                                            <div class="sidbar-inner sidbar-inner-wrap banner-hover">
                                                <div class="post-image">
                                                    <a href="blog-grid-right.html">
                                                        <img src="img/blog/article-01.jpg" class="img-fluid" alt="article-01">
                                                    </a>
                                                </div>
                                                <div class="recent-blog-content">
                                                    <h4><a href="blog-grid-right.html">Wel illum qui dolorem eum fugiat?</a></h4>
                                                    <span>May 06, 2024</span>
                                                </div>
                                            </div>
                                            <div class="sidbar-inner banner-hover">
                                                <div class="post-image">
                                                    <a href="blog-grid-right.html">
                                                        <img src="img/blog-page/blog-1.jpg" class="img-fluid" alt="blog-1">
                                                    </a>
                                                </div>
                                                <div class="recent-blog-content">
                                                    <h4>
                                                    <a href="blog-grid-right.html">Nisi ut aliquid ex ea commodi?</a>
                                                    </h4>
                                                    <span>May 06, 2024</span>
                                                </div>
                                            </div>
                                            <div class="sidbar-inner banner-hover">
                                                <div class="post-image">
                                                    <a href="blog-grid-right.html">
                                                        <img src="img/blog-page/blog-2.jpg" class="img-fluid" alt="blog-2">
                                                    </a>
                                                </div>
                                                <div class="recent-blog-content">
                                                    <h4>
                                                    <a href="blog-grid-right.html">Which of us ever undertakes?</a>
                                                    </h4>
                                                    <span>May 06, 2024</span>
                                                </div>
                                            </div>
                                            <div class="sidbar-inner banner-hover">
                                                <div class="post-image">
                                                    <a href="blog-grid-right.html">
                                                        <img src="img/blog-page/blog-3.jpg" class="img-fluid" alt="blog-3">
                                                    </a>
                                                </div>
                                                <div class="recent-blog-content">
                                                    <h4>
                                                    <a href="blog-grid-right.html">Where can i get some?</a>
                                                    </h4>
                                                    <span>May 06, 2024</span>
                                                </div>
                                            </div>
                                            <div class="sidbar-inner banner-hover">
                                                <div class="post-image">
                                                    <a href="blog-grid-right.html">
                                                        <img src="img/blog-page/blog-4.jpg" class="img-fluid" alt="blog-4">
                                                    </a>
                                                </div>
                                                <div class="recent-blog-content">
                                                    <h4>
                                                    <a href="blog-grid-right.html">Who avoids a pain that produces?</a>
                                                    </h4>
                                                    <span>May 06, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog-sidebar recent-post end -->
                                        <!-- blog-sidebar tag start -->
                                        <div class="blog-post-sidebar blog-tags">
                                            <h6 class="blog-sidebar-title">Tag</h6>
                                            <div class="sidebartag">
                                                <ul class="sidebar-tag">
                                                    <li><a href="blog-grid-right.html">Android</a></li>
                                                    <li><a href="blog-grid-right.html">Blog</a></li>
                                                    <li><a href="blog-grid-right.html">Device</a></li>
                                                    <li><a href="blog-grid-right.html">Engineer</a></li>
                                                    <li><a href="blog-grid-right.html">Gadget</a></li>
                                                    <li><a href="blog-grid-right.html">Mobile</a></li>
                                                    <li><a href="blog-grid-right.html">News</a></li>
                                                    <li><a href="blog-grid-right.html">Raspberrypi</a></li>
                                                    <li><a href="blog-grid-right.html">Robot</a></li>
                                                    <li><a href="blog-grid-right.html">Smartphone</a></li>
                                                    <li><a href="blog-grid-right.html">Techie</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- blog-sidebar tag end -->
                                    </div>
                                </div>
                                <!-- blog sidebar end -->
                                <!-- blog-grid wrap start -->
                                <div class="blog-grid-wrap blog-grid">
                                    <ul class="single-blog-area">
                                        <li class="blog-slider banner-hover">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post-without.html" class="blog-img">
                                                        <img src="img/blog/backery-blog-1-1.jpg" class="img-fluid" alt="backery-blog-1-1">
                                                        <span class="blog-icon"><i class="bi bi-link-45deg"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blog-tag">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-grid.html">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">cakestore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">chair</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="date-time">14 May, 2024</span>
                                                    <h6 class="blog-title">
                                                    <a href="article-post-without.html">Wel illum qui eum?</a>
                                                    </h6>
                                                    <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ...</p>
                                                    <a href="article-post-without.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="blog-slider banner-hover">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post-without.html" class="blog-img">
                                                        <img src="img/blog/backery-blog-1-2.jpg" class="img-fluid" alt="backery-blog-1-2">
                                                        <span class="blog-icon"><i class="bi bi-link-45deg"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blog-tag">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-grid.html">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">cakestore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">chair</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="date-time">18 July, 2024</span>
                                                    <h6 class="blog-title">
                                                    <a href="article-post-without.html">Nisi ut aliquid ex ea?</a>
                                                    </h6>
                                                    <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ...</p>
                                                    <a href="article-post-without.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="blog-slider banner-hover">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post-without.html" class="blog-img">
                                                        <img src="img/blog/backery-blog-1-3.jpg" class="img-fluid" alt="backery-blog-1-3">
                                                        <span class="blog-icon"><i class="bi bi-link-45deg"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blog-tag">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-grid.html">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">cakestore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">chair</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="date-time">22 August, 2024</span>
                                                    <h6 class="blog-title">
                                                    <a href="article-post-without.html">Why do we use it?</a>
                                                    </h6>
                                                    <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ...</p>
                                                    <a href="article-post-without.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="blog-slider banner-hover">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post-without.html" class="blog-img">
                                                        <img src="img/blog/backery-blog-1-4.jpg" class="img-fluid" alt="backery-blog-1-4">
                                                        <span class="blog-icon"><i class="bi bi-link-45deg"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blog-tag">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-grid.html">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">cakestore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">chair</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="date-time">26 November, 2024</span>
                                                    <h6 class="blog-title">
                                                    <a href="article-post-without.html">Who avoids a that?</a>
                                                    </h6>
                                                    <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ...</p>
                                                    <a href="article-post-without.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="blog-slider banner-hover">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post-without.html" class="blog-img">
                                                        <img src="img/blog/backery-blog-1-5.jpg" class="img-fluid" alt="backery-blog-1-5">
                                                        <span class="blog-icon"><i class="bi bi-link-45deg"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blog-tag">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-grid.html">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">cakestore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">chair</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="date-time">4 January, 2024</span>
                                                    <h6 class="blog-title">
                                                    <a href="article-post-without.html">Which of undertakes us ever?</a>
                                                    </h6>
                                                    <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ...</p>
                                                    <a href="article-post-without.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="blog-slider banner-hover">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post-without.html" class="blog-img">
                                                        <img src="img/blog/backery-blog-1-6.jpg" class="img-fluid" alt="backery-blog-1-6">
                                                        <span class="blog-icon"><i class="bi bi-link-45deg"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blog-tag">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-grid.html">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">cakestore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">chair</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="date-time">10 February, 2024</span>
                                                    <h6 class="blog-title">
                                                    <a href="article-post-without.html">Where does it from come?</a>
                                                    </h6>
                                                    <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ...</p>
                                                    <a href="article-post-without.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="blog-slider banner-hover">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post-without.html" class="blog-img">
                                                        <img src="img/blog/backery-blog-1-7.jpg" class="img-fluid" alt="backery-blog-1-7">
                                                        <span class="blog-icon"><i class="bi bi-link-45deg"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blog-tag">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-grid.html">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">cakestore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">chair</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="date-time">28 March, 2024</span>
                                                    <h6 class="blog-title">
                                                    <a href="article-post-without.html">Where can some I get?</a>
                                                    </h6>
                                                    <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ...</p>
                                                    <a href="article-post-without.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="blog-slider banner-hover">
                                            <div class="blog-post">
                                                <div class="blog-main-img">
                                                    <a href="article-post-without.html" class="blog-img">
                                                        <img src="img/blog/backery-blog-1-8.jpg" class="img-fluid" alt="backery-blog-1-8">
                                                        <span class="blog-icon"><i class="bi bi-link-45deg"></i></span>
                                                    </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <div class="blog-tag">
                                                        <ul>
                                                            <li>
                                                                <a href="blog-grid.html">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">cakestore</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">chair</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="date-time">14 May, 2024</span>
                                                    <h6 class="blog-title">
                                                    <a href="article-post-without.html">What is the Lorem ipsum?</a>
                                                    </h6>
                                                    <p class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ...</p>
                                                    <a href="article-post-without.html" class="read-btn btn btn-style2">
                                                        <span>Read more</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="paginatoin-area">
                                        <ul class="paginate">
                                            <li class="page-numerous">
                                                <p>Showing 1 - 6 of 8 result</p>
                                            </li>
                                            <li class="page-numerous">
                                                <ul class="pagination-box">
                                                    <li class="number active">
                                                        <a href="article-post-without.html">1</a>
                                                    </li>
                                                    <li class="number">
                                                        <a href="article-post-without.html">2</a>
                                                    </li>
                                                    <li class="next np-icon">
                                                        <a href="article-post-without.html" class="next" aria-label="Next">
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- blog-grid wrap start -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-content end -->
        </main>
        
        <?php
include "../include/pages_footer.php";

?>