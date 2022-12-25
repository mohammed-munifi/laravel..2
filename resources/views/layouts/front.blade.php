<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title','Home')|{{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script defer src="{{asset('js/fontawesome/all.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header
    ================================================== -->
    <header class="s-header">

        <div class="row">

            <div class="s-header__content column">
                <h1 class="s-header__logotext">
                    <a href="index.html" title="">Keep It Simple.</a>
                </h1>
                <p class="s-header__tagline">Put your awesome tagline here.</p>
            </div>

        </div> <!-- end row -->

       <nav class="s-header__nav-wrap">

           <div class="row">

                <ul class="s-header__nav">
                    <li><a href="index.html">Home</a></li>
                    <li class="has-children"><a href="#0">Dropdown</a>
                        <ul>
                            <li><a href="#0">Submenu 01</a></li>
                            <li><a href="#0">Submenu 02</a></li>
                            <li><a href="#0">Submenu 03</a></li>
                        </ul>
                    </li>
                    <li><a href="demo.html">Demo</a></li>	
                    <li class="current"><a href="archives.html">Archives</a></li>
                    <li class="has-children"><a href="#0">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog Entries</a></li>
                            <li><a href="single.html">Single Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="page.html">Page</a></li>
                </ul> <!-- end #nav -->

           </div> 

        </nav> <!-- end #nav-wrap -->

        <a class="header-menu-toggle" href="#0" title="Menu"><span>Menu</span></a>

    </header> <!-- Header End -->



   @yield('content')
    <!-- Footer
    ================================================== -->
    <footer class="s-footer">

        <div class="row s-footer__top">
            <div class="column">
                <ul class="s-footer__social">
                    <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-vimeo-v" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-skype" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div> <!-- end footer__top -->

        <div class="row s-footer__bottom">

            <div class="large-6 tab-full column s-footer__info">
                <h3 class="h6">About Keep It Simple</h3>

                <p>
                Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor 
                aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur 
                sint cillum sint consectetur voluptate adipisicing Duis
                </p>

                <p>
                Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint 
                sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.
                </p>
            </div>

            <div class="large-6 tab-full column">
                <div class="row">
                    <div class="large-8 tab-full column">

                        <h3 class="h6">Photostream</h3>
                        
                        <ul class="photostream group">
                            <li><a href="#0"><img alt="thumbnail" src="{{asset('images/thumb.jpg')}}"></a></li>
                            <li><a href="#0"><img alt="thumbnail" src="{{asset('images/thumb.jpg')}}"></a></li>
                            <li><a href="#0"><img alt="thumbnail" src="{{asset('images/thumb.jpg')}}"></a></li>
                            <li><a href="#0"><img alt="thumbnail" src="{{asset('images/thumb.jpg')}}"></a></li>
                            <li><a href="#0"><img alt="thumbnail" src="{{asset('images/thumb.jpg')}}"></a></li>
                            <li><a href="#0"><img alt="thumbnail" src="{{asset('images/thumb.jpg')}}"></a></li>
                            <li><a href="#0"><img alt="thumbnail" src="{{asset('images/thumb.jpg')}}"></a></li>
                            <li><a href="#0"><img alt="thumbnail" src="{{asset('images/thumb.jpg')}}"></a></li>
                        </ul>
        
                    </div>
        
                    <div class="large-4 tab-full column">
                        <h3  class="h6">Navigate</h3>
        
                        <ul class="s-footer__list s-footer-list--nav group">
                            <li><a href="#0">Home</a></li>
                            <li><a href="#0">Blog</a></li>
                            <li><a href="#0">Demo</a></li>
                            <li><a href="#0">Archives</a></li>
                            <li><a href="#0">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ss-copyright">
                <span>© Copyright Keep It Simple 2019</span> 
                <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
            </div>

        </div> <!-- end footer__bottom -->


        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0l8 9h-6v15h-4v-15h-6z"/></svg>
            </a>
        </div> <!-- end ss-go-top -->

    </footer> <!-- end Footer-->


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>