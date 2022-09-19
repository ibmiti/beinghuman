@extends ('layouts.app')
@section('title', 'Recommended Reads')
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
                            <h1>BeingHMN's Recommended Reading</h1>
                            <p>(A Human Company)</p>
                        </header>
                        <p>We love reading, and here's a curation of our fondest books and some we've authored ourselves!</p>
                        <ul class="actions">
                            <li><a href="#recommendedSection" class="button big">Learn More</a></li>
                        </ul>
                    </div>
                        <span class="image object">
                            <img src="https://images.unsplash.com/photo-1588666309990-d68f08e3d4a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzF8fHJlYWRpbmd8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="main image" />
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
                    <section id="recommendedSection">
                        <header class="major">
                            <h2>BeingHMN Reading Corner</h2>
                            <p>Check out the latest books being created & read by the staff.</p>
                        </header>
                        <div class="posts">
                            <article>
                                <a href="{{ url('children-books') }}" class="image"><img src="https://images.unsplash.com/photo-1608120663473-a4aa3472786b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Y2hpbGRyZW5zJTIwYm9va3xlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>Children's Books</h3>
                                <p>Fun and educational books for the little ones, we enjoy writing children's books and reading them to our young one. Here are some of our favorites</p>
                                <ul class="actions">
                                    <li><a href="{{ url('children-books') }}" class="button">More</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="/fiction" class="image"><img src="https://images.unsplash.com/photo-1585849837997-ac13cb616ff7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDd8fGZpY3Rpb24lMjBib29rfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>Fiction</h3>
                                <p>Stories that send us off into otherworlds, these are some of our favorite</p>
                                <ul class="actions">
                                    <li><a href="/fiction" class="button">More</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="{{ url('non-fiction') }}" class="image"><img src="https://images.unsplash.com/photo-1491841573634-28140fc7ced7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTI3fHxjaGlsZHJlbnMlMjBib29rfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>Non Fiction</h3>
                                <p>Being human means that sometimes we need to let off stress, and have a bit of function
                                    These articles go into all the ways toward a more joyful self.</p>
                                <ul class="actions">
                                    <li><a href="{{ url('non-fiction') }}" class="button">More</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="{{ url('stem') }}" class="image"><img src="https://images.unsplash.com/photo-1416816901131-9e5eab64c1c1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHNjaWVuY2V8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>STEM</h3>
                                <p>Our world runs on science and math's; from cars, to cellphones and everything else that propels or communicates. Here's our thoughts on these reads.</p>
                                <ul class="actions">
                                    <li><a href="/stem" class="button">More</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="{{ url('literature-and-arts') }}" class="image"><img src="https://images.unsplash.com/photo-1614843883368-eec0aab85dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTI1fHxhcnRzfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" /></a>
                                <h3>Literarture & Art's</h3>
                                <p>Our reviews on literature and art books.</p>
                                <ul class="actions">
                                    <li><a href="{{ url('literature-and-arts') }}" class="button">More</a></li>
                                </ul>
                            </article>
                            <!-- <article>
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
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href="/">Homepage</a></li>
                    <li><a href="/about">About BeingHMN</a></li>
                    <li><a href="/recommendedReads">Recommended Reads</a></li>
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

        <!-- Section -->
            <!-- <section>
                <header class="major">
                    <h2>Ante interdum</h2>
                </header>
                <div class="mini-posts">
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
                </ul>
            </section> -->

            <!-- Section -->
            <!-- <section>
                <header class="major">
                    <h2>Get in touch</h2>
                </header>
                <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                    Nashville, TN 00000-0000</li>
                </ul>
            </section> -->
        </div>
    </div>


</div>
        <section id="newsletter">

                <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7_dtp.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                <form action="/newsletter" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="" novalidate>
                    @csrf

                    <div id="mc_embed_signup_scroll">
                    <label for="mce-EMAIL">Subscribe</label>
                    <input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder="email address" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_616477adaf9929771eacca8db_9a965b44ed" tabindex="-1" value=""></div>
                        <div class="optionalParent">
                            <div class="clear foot">
                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

                            </div>
                        </div>
                    </div>
                </form>
                </div>
               <!--End mc_embed_signup-->

        </section>


<!-- <div class="container container-fluid slab mt-5">
    <div class="row text-center">
        <a class="twitter-timeline" href="https://twitter.com/theBassinet?ref_src=twsrc%5Etfw">Tweets by theBassinet</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div> -->
@endsection
