<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">    
    <title>KatshuNyan - Manhwa Information</title>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            background-color: rgb(3, 25, 39);
            color: rgb(200, 224, 244);
        }

        /* NAVBAR */
        nav {
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
            background-color: rgb(3, 25, 39);
            border-bottom: 1px solid rgba(157, 209, 241, 0.2);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 24px;
            font-weight: bold;
            color: rgb(200, 224, 244);
        }

        .logo-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(186, 18, 0);
            border-radius: 8px;
            font-size: 20px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: rgb(157, 209, 241);
            font-size: 15px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: rgb(186, 18, 0);
        }

        /* HERO */
        .hero {
            min-height: 420px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 70px 10%;
            background: linear-gradient(
                135deg,
                rgb(3, 25, 39),
                rgb(10, 45, 62)
            );
        }

        .hero-label {
            color: rgb(186, 18, 0);
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .hero h1 {
            max-width: 750px;
            font-size: 52px;
            line-height: 1.1;
            color: rgb(200, 224, 244);
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: rgb(186, 18, 0);
        }

        .hero p {
            max-width: 650px;
            font-size: 18px;
            line-height: 1.7;
            color: rgb(157, 209, 241);
            margin-bottom: 30px;
        }

        .hero-button {
            display: inline-block;
            width: fit-content;
            padding: 13px 24px;
            background-color: rgb(186, 18, 0);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        .hero-button:hover {
            background-color: rgb(80, 138, 168);
        }

        /* UPDATE SECTION */
        .updates {
            padding: 60px 10%;
        }

        .section-title {
            margin-bottom: 30px;
        }

        .section-title h2 {
            font-size: 30px;
            color: rgb(200, 224, 244);
            margin-bottom: 8px;
        }

        .section-title p {
            color: rgb(157, 209, 241);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background-color: rgb(10, 42, 58);
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid rgba(157, 209, 241, 0.15);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: rgb(80, 138, 168);
        }

        .card-image {
            height: 190px;
            background-color: rgb(80, 138, 168);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(3, 25, 39);
            font-weight: bold;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
}

        .card-content {
            padding: 20px;
        }

        .category {
            font-size: 12px;
            color: rgb(186, 18, 0);
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .card h3 {
            color: rgb(200, 224, 244);
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            color: rgb(157, 209, 241);
            font-size: 14px;
            line-height: 1.6;
        }

        .read-more {
            display: inline-block;
            margin-top: 15px;
            color: rgb(186, 18, 0);
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 30px;
            border-top: 1px solid rgba(157, 209, 241, 0.2);
            color: rgb(80, 138, 168);
            font-size: 14px;
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {
            nav {
                padding: 0 25px;
            }

            .hero {
                padding: 60px 25px;
            }

            .hero h1 {
                font-size: 38px;
            }

            .updates {
                padding: 50px 25px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            KatshuNyan
        </div>

        <div class="nav-links">
            <a href="/">Dashboard</a>
            <a href="/tentang-kami">About</a>
            <a href="/kontak">Contact</a>
        </div>
    </nav>


    <!-- HERO -->
    <section class="hero">
        <div class="hero-label">MANHWA INFORMATION PORTAL</div>

        <h1>
            Discover Your Next
            <span>Favorite Manhwa.</span>
        </h1>

        <p>
            Temukan informasi terbaru seputar manhwa favoritmu,
            mulai dari update chapter, rekomendasi, hingga berita
            terbaru dari dunia manhwa.
        </p>

        <a href="#updates" class="hero-button">
            Explore Updates
        </a>
    </section>


    <!-- MANHWA UPDATES -->
    <section class="updates" id="updates">

        <div class="section-title">
            <h2>Latest Updates</h2>
            <p>Berita dan informasi manhwa terbaru.</p>
        </div>

        <div class="cards">

            <!-- CARD 1 -->
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/solev.jpg') }}" alt="Solo-Leveling">
                </div>

                <div class="card-content">
                    <div class="category">Chapter Update</div>

                    <h3>Solo Leveling: Ragnarok</h3>

                    <p>
                        Update chapter terbaru dan informasi
                        perkembangan cerita Solo Leveling: Ragnarok.
                    </p>

                    <a href="#" class="read-more">
                        Read More →
                    </a>
                </div>
            </div>


            <!-- CARD 2 -->
            <div class="card">
                <div class="card-image">
                   <img src="{{ asset('images/omniscient.jpg') }}" alt="ORV">
                </div>

                <div class="card-content">
                    <div class="category">News</div>

                    <h3>Omniscient Reader</h3>

                    <p>
                        Informasi terbaru mengenai adaptasi dan
                        perkembangan Omniscient Reader.
                    </p>

                    <a href="#" class="read-more">
                        Read More →
                    </a>
                </div>
            </div>


            <!-- CARD 3 -->
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/recomen.jpg') }}" alt="Recomendation">
                </div>

                <div class="card-content">
                    <div class="category">Recommendation</div>

                    <h3>Top Manhwa This Week</h3>

                    <p>
                        Rekomendasi manhwa yang sedang populer
                        dan menarik untuk dibaca minggu ini.
                    </p>

                    <a href="#" class="read-more">
                        Read More →
                    </a>
                </div>
            </div>

        </div>
    </section>


    <!-- FOOTER -->
    <footer>
        © 2026 LaraPress. Manhwa Information Portal.
    </footer>

</body>
</html>

