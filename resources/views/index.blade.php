@include('templates.landing-page.header');
<body>

    <div class="overlay"></div>
    <div class="app">

        <!-- Navbar & Hero-->
        <section class="header" id="header">
            <nav class="navbar">
                <div class="navbar-brand">
                    <img src="assets/images/logo.png" class="img-logo" alt="">
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#header" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#topics" class="nav-link">Topics</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item btn">
                        <a href="/login" class="nav-link btn btn-primary">Login</a>
                    </li>
                </ul>
                <div class="toggle-bar"><i class="fas fa-fw fa-bars"></i>
                </div>
            </nav>
            <div class="hero">
                <div class="desc">
                    <h1 class="title">Yuk, Pelajari<br> Waste Management!</h1>
                    <p class="text"></p>
                    <a href="#about" class="btn btn-primary">Get Started</a>
                </div>
                <img src="assets/images/landing-page/img-hero.png" alt="">
                <div class="smi">
                    <a href="#"><i class="fab fa-fw fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-fw fa-instagram"></i></a>
                    <a href="#"><i class="fas fa-fw fa-globe"></i></a>
                </div>
            </div>
        </section>
        <!-- End Navbar & Hero-->

        <div class="ellipse">
            <img src="assets/images/landing-page/img-ellipse.png" alt="" srcset="">
        </div>

        <!-- About -->
        <section class="about" id="about">
            <img src="assets/images/landing-page/img-about.png" alt="">
            <div class="desc">
                <h1 class="title">About Us</h1>
                <hr>
                <p class="text">Platform Edukasi Lingkungan yang membantumu dapat ikut menjaga bumi menjadi lebih baik.
                    Kami mengajakmu dengan mulai mempelajari tentang waste management!
                </p>
                <a href="#" class="btn btn-primary"> <i class="fas fa-file-alt"></i> Materi</a>
                <a href="#" class="btn btn-primary"> <i class="fas fa-video"></i> Video</a>
            </div>
        </section>
        <!-- End About-->


        <!-- Topics -->
        <section class="topics" id="topics">
            <div class="desc-topics">
                <div class="title">
                    <h1>Topics</h1>
                    <hr>
                </div>
                <div class="list">
                    <p>01 Waste Management</p>
                    <hr>
                    <p>02 Jenis-Jenis Sampah</p>
                    <hr>
                    <p>03 Pengumpulan dan Pemilahan Sampah</p>
                    <hr>
                    <p>04 Pengelolahan Sampah dengan Teknik Kompos</p>
                    <hr>
                    <p>05 Pengelolahan Sampah dengan Teknik Anaerob</p>
                    <hr>
                    <p>06 Teknologi Pengelolahan Sampah Modern</p>
                    <hr>
                    <p>07 Pemulihan dan Pengelolahan Sampah</p>
                    <hr>
                </div>
            </div>
            <img src="assets/images/landing-page/img-topics.png" alt="">
        </section>
        <!-- End Topics -->

        <!-- Contact -->
        <section class="contact" id="contact">
            <div class="contact-bg">
                <div class="contact-content">
                    <h5 class="title">SUBSCRIBE TO OUR NEWS INFO!</h5>
                    <p class="text">Kami akan berikan update informasi terbaru terkait topik dan fitur baru dari kami.
                        Tunggu kami ya!</p>
                    <form class="contact-form">
                        <input type="text" placeholder="Your email address">
                        <button class="btn-subcribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact -->

@include('templates.landing-page.footer');