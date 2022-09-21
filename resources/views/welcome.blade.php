@extends ('layouts.app')
@section('title', 'Welcome Dashboard')
@section('content')
<div id="wrapper">
    <!-- Main -->
        <div id="main">
            <div class="inner">
                <!-- Header -->
                <x-contact/>
                <!-- Banner -->
                <section id="banner">
                    <div class="content">
                        <header>
                            <h1>Hello, we are BeingHMN.</h1>
                            <p>(A Human Company)</p>
                        </header>
                        <p>We here at BeingHMN try our best to offer clear and concise parenting advice, gathered through experience and much research, we also create and curate videos and upcoming games and stories related to being and living on our beautiful planet!</p>
                        <ul class="actions">
                            <li><a href="/about" class="button big">Learn More</a></li>
                        </ul>
                    </div>
                        <span class="image object">
                            <img src="https://images.unsplash.com/photo-1626510798071-8311b47f7e64?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDEwNnxfaGItZGw0US00VXx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="main image" />
                        </span>
                    </section>

                    <!-- Section -->
                    <!-- <section>
                        <header class="major">
                            <h2>Who Are We?</h2>
                        </header>
                        <div class="features">
                            <article>
                                <span class="icon fa-gem"></span>
                                <div class="content">
                                    <h3>Portitor ullamcorper</h3>
                                    <p>We are a parent led studio which produces smart content for the world of Humans everywhere.</p>
                                </div>
                            </article>
                            <article>
                                <span class="icon solid fa-paper-plane"></span>
                                <div class="content">
                                    <h3>Our Goal As A Company?</h3>
                                    <p>We here at BabysBassinet try our best to offer clear and concise parenting advice, gathered through experience and much research, we also create and curate videos and upcoming games and stories!</p>
                                </div>
                            </article>
                            <article>
                                <span class="icon solid fa-rocket"></span>
                                <div class="content">
                                    <h3>Quam lorem ipsum</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                </div>
                            </article>
                            <article>
                                <span class="icon solid fa-signal"></span>
                                <div class="content">
                                    <h3>Sed magna finibus</h3>
                                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                </div>
                            </article>
                        </div>
                    </section> -->

                    <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>The BeingHMN Blog</h2>
                            <p>Our blog discusses the human story, from cradle to parenthood.</p>
                        </header>
                        <div class="posts">
                            <article>
                                <a href="/babies" class="image"><img src="https://images.unsplash.com/photo-1485423036251-8b2a2909899f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGpveXxlbnwwfDJ8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>Being Baby</h3>
                                <p>We imagine being a baby isnt easy, nor is taking care and raising our little one, here are articles discussing all the ways we can make our life with baby happy and successful.</p>
                                <ul class="actions">
                                    <li><a href="/babies" class="button">More</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="/health" class="image"><img src="https://images.unsplash.com/photo-1583118289889-f9e5ee78c82a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzF8fGhlYWx0aHl8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>Being Healthy</h3>
                                <p>We discuss all the ways toward a more healthier self.</p>
                                <ul class="actions">
                                    <li><a href="/health" class="button">More</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="/joyful" class="image"><img src="https://images.unsplash.com/photo-1587822408999-79f2eaf381fc?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGpveXxlbnwwfDJ8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>Being Joyful</h3>
                                <p>Being human means that sometimes we need to let off stress, and have a bit of function
                                    These articles go into all the ways toward a more joyful self.</p>
                                <ul class="actions">
                                    <li><a href="/joyful" class="button">More</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="/human" class="image"><img src="https://images.unsplash.com/photo-1505995433366-e12047f3f144?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aHVtYW58ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>Being Human</h3>
                                <p>Our world needs a bit of help, Only we can do something about it.</p>
                                <ul class="actions">
                                    <li><a href="/human" class="button">More</a></li>
                                </ul>
                            </article>
                            <!-- <article>
                                <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                                <h3>Feugiat lorem aenean</h3>
                                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">More</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                                <h3>Amet varius aliquam</h3>
                                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">More</a></li>
                                </ul>
                            </article> -->
                        </div>
                    </section>
                </div>
            </div>

<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">

        <!-- Search -->
            <!-- <section id="search" class="alt">
                <form method="post" action="#">
                    <input type="text" name="query" id="query" placeholder="Search" />
                </form>
            </section> -->

        <!-- Menu -->
        <!-- TODO: Turn this into a component, have it visible on every page -->
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                    @auth
                    <span style="padding: 3px 3px 3px 3px; margin-bottom: 10px;">Welcome, {{ strtoupper(auth()->user()->name) }}!</span>
                    @endauth
                </header>
                <ul>
                    @auth
                        <form method="POST" action="{{ url('logout') }}">
                        @csrf
                            <button class="btn btn-default btn-xs" type="submit">Logout</button>
                        </form>

                            @if(Auth::user()->role == 'guest-author')
                                <li class="btn btn-default btn-xs"><a href="{{ url('authoring-page') }}">Author Article</a></li>
                            @endif
                            @if(Auth::user()->role == 'admin' || 'author')
                                <li class="btn btn-default btn-xs"><a href="{{ url('dashboard') }}">Admin Dashboard</a></li>
                            @endif
                    @endauth
                    <!-- <li><a href="/">Dashboardpage</a></li> -->
                    <li><a href="/about">About BeingHMN</a></li>
                    <li><a href="{{ url('recommended-reads') }}">Recommended Reads</a></li>
                    @guest
                         <li><a href="{{ url('login') }}" class="logo"><strong>Login</strong></a></li>
                         <li><a href="{{ url('register') }}" class="logo"><strong>Register</strong></a></li>
                         <li><a href="#newsletter" class="logo"><strong>Subscribe</strong></a></li>
                    @endguest
                    <!-- <li>
                        <span class="opener">Submenu</span>
                        <ul>
                            <li><a href="#">Lorem Dolor</a></li>
                            <li><a href="#">Ipsum Adipiscing</a></li>
                            <li><a href="#">Tempus Magna</a></li>
                            <li><a href="#">Feugiat Veroeros</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Etiam Dolore</a></li>
                    <li><a href="#">Adipiscing</a></li>
                    <li>
                        <span class="opener">Another Submenu</span>
                        <ul>
                            <li><a href="#">Lorem Dolor</a></li>
                            <li><a href="#">Ipsum Adipiscing</a></li>
                            <li><a href="#">Tempus Magna</a></li>
                            <li><a href="#">Feugiat Veroeros</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Maximus Erat</a></li>
                    <li><a href="#">Sapien Mauris</a></li>
                    <li><a href="#">Amet Lacinia</a></li> -->
                </ul>
            </nav>


            <!-- TODO: Latest articles welcome page feature (( coming soon ))  -->
            <!-- <section>
                <header class="major">
                    <h2>Latest Articles</h2>
                </header> -->
                <!-- @if(isset($articles))
                    @foreach($articles as $article)
                        @switch($article->type)
                            @case ($article->type == 'Babies')
                                return $articleType = 'babyArticle';
                            @break;
                            @case ('Health')
                                    $articleType = 'healthArticle';
                            @break;
                            @case ('Joyful')
                                    $articleType = 'parentArticle';
                            @case ('Literature-And-Arts')
                                $articleType = 'literatureAndArtsArticle';
                            @case ('Stem')
                            @case ('Children-Books')
                            @case ('Human')
                            @case ('Fiction')
                            @case ('Non-Fiction')
                            @default '';
                        @endswitch -->
                        <div class="row text-center mt-5">
                            <div class="col-lg-6 col-sm-12">
                                <h3 id="title">
                                    <a href="/{{ $articleType }}/{{ $article->id }}">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p style="color: grey; font-size: 15px;">
                                    {{ $article->excerpt }}
                                </p>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <a href="/{{ $articleType }}/{{ $baby->id }}">
                                    <img src="{{ $baby->image_name }}" alt="main-article-image" height="95%;" width="85%;"/>
                                </a>
                            </div>
                        </div>
                        <hr style="color:grey;" width="100%">
                        <div class="row text-center mt-5">
                            <div class="col-lg-6 col-sm-12">
                                <h3 id="title">
                                    <a href="/{{ $articleType }}/{{ $article->id }}">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p style="color: grey; font-size: 15px;">
                                    {{ $article->excerpt }}
                                </p>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <a href="/{{ $articleType }}/{{ $baby->id }}">
                                    <img src="{{ $baby->image_name }}" alt="main-article-image" height="95%;" width="85%;"/>
                                </a>
                            </div>
                        </div>
                        <hr style="color:grey;" width="100%">
                        <div class="row text-center mt-5">
                            <div class="col-lg-6 col-sm-12">
                                <h3 id="title">
                                    <a href="/{{ $articleType }}/{{ $article->id }}">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p style="color: grey; font-size: 15px;">
                                    {{ $article->excerpt }}
                                </p>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <a href="/{{ $articleType }}/{{ $baby->id }}">
                                    <img src="{{ $baby->image_name }}" alt="main-article-image" height="95%;" width="85%;"/>
                                </a>
                            </div>
                        </div>
                        <hr style="color:grey;" width="100%">
                    @endforeach
                @else
                    <p class="text-center m-3 mb-5">Sorry, Articles Coming Soon!</p>
                @endif

                <!-- <div class="mini-posts">
                    <article>
                        <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                    </article>
                </div>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul> -->
            </section>

    <!-- START OF SHOPPING SECTION -->
            @auth
                @if(Auth::user()->role == 'admin')
                    <section>
                        <header class="majora">
                            <a href="{{ url('ecommerce/products') }}"><h2>Shop BeingHMN</h2></a>
                        </header>
                        <p>Every item sold helps someone, somewhere else. What does this mean? a portion of all proceeds will be donated toward a human focused cause. You can track donations via our twitter and a coming quarterly release here.</p>
                        <!-- <ul class="contact">
                            <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                            <li class="icon solid fa-phone">(000) 000-0000</li>
                            <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                            Nashville, TN 00000-0000</li>
                        </ul> -->
                    </section>

                @endif
            @endauth
    <!-- END OF SHOPPING SECTION -->
        </div>
    </div>
</div>
<section id="newsletter">
    <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7_dtp.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
    </style>
    <div id="mc_embed_signup">
        <form action="/newsletter" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="" novalidate>
            @csrf
            <div id="mc_embed_signup_scroll">
                <label for="mce-EMAIL">Subscribe</label>
                <input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text"  name="b_616477adaf9929771eacca8db_9a965b44ed" tabindex="-1" value="">
                    </div>
                <div class="optionalParent">
                    <div class="clear foot">
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="mt-2 button btn-lg">

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="container container-fluid slab mt-5">
    <div class="row text-center">
        <a class="twitter-timeline" href="https://twitter.com/BeinghmnH?ref_src=twsrc%5Etfw">Tweets by BeingHMN</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>
<!-- <div class="container container-fluid slab mt-5">
    <div class="row text-center">
        <a class="twitter-timeline" href="https://twitter.com/theBassinet?ref_src=twsrc%5Etfw">Tweets by theBassinet</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div> -->
@endsection
