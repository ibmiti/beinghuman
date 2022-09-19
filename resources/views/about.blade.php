@extends ('layouts.app')
@section ('title', 'About BeingHMN')
@section ('content')
<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
                            <x-contact/>
							<!-- Content -->
								<section>
									<header class="main">
										<h1>What we're up to at BeingHMN</h1>
									</header>
									<span class="image main"><img src="images/pic11.jpg" alt="" /></span>

									<p>There are no border to the improving the human condition, lets improve it everywhere.</p> <br>
                                    <!-- <p>We will continue to fill this page out.</p> -->

									<hr class="major" />
                                    <!-- <h2>Latest Articles</h2>
                                    @if($articles)
                                        @foreach($articles as $article)
                                        <div class="row text-center mt-5">
                                            <div class="col-lg-6 col-sm-12">
                                                <h3 id="title">
                                                    <a href="/article/{{ $article->id ?? '' }}">
                                                        {{ $article->title ?? ''}}
                                                    </a>
                                                </h3>
                                                <p style="color: grey; font-size: 15px;">
                                                    {{ $article->excerpt }}
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 mb-3">
                                                <img src="{{ $article->image_name }}" alt="..." height="200px;" width="200px;">
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif -->
									<!-- <h2>Interdum sed dapibus</h2>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>

									<hr class="major" />

									<h2>Magna etiam veroeros</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
									<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>

									<hr class="major" />

									<h2>Lorem aliquam bibendum</h2>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p> -->

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
                            <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p> -->
                            <!-- <ul class="contact">
                                <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                                <li class="icon solid fa-phone">(000) 000-0000</li>
                                <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                                Nashville, TN 00000-0000</li>
                            </ul> -->
                        </section>
                     </div>
            </div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
@endsection
