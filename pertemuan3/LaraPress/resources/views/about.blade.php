<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Tentang Kami - KatshuNyan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            background-color: rgb(3, 25, 39);
            color: rgb(200, 224, 244);
            line-height: 1.6;
        }

        /* NAVBAR */
        nav {
            background-color: rgb(3, 25, 39);
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgb(80, 138, 168);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: rgb(157, 209, 241);
        }

        .logo span {
            color: rgb(186, 18, 0);
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: rgb(200, 224, 244);
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: rgb(186, 18, 0);
        }

        /* HERO */
        .about-hero {
            text-align: center;
            padding: 90px 20px 70px;
        }

        .about-label {
            color: rgb(80, 138, 168);
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .about-hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: rgb(200, 224, 244);
        }

        .about-hero h1 span {
            color: rgb(186, 18, 0);
        }

        .about-hero p {
            max-width: 700px;
            margin: auto;
            color: rgb(157, 209, 241);
            font-size: 17px;
        }

        /* CONTENT */
        .about-content {
            width: 84%;
            max-width: 1100px;
            margin: auto;
            padding-bottom: 80px;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .about-card {
            background-color: rgb(80, 138, 168);
            padding: 35px;
            border-radius: 15px;
            border: 1px solid rgb(157, 209, 241);
        }

        .about-card h2 {
            color: rgb(3, 25, 39);
            margin-bottom: 15px;
        }

        .about-card p {
            color: rgb(3, 25, 39);
        }

        /* VISI MISI */
        .vision-mission {
            margin-top: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .vm-card {
            background-color: rgb(200, 224, 244);
            padding: 30px;
            border-radius: 15px;
        }

        .vm-card h2 {
            color: rgb(186, 18, 0);
            margin-bottom: 15px;
        }

        .vm-card p {
            color: rgb(3, 25, 39);
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 25px;
            border-top: 1px solid rgb(80, 138, 168);
            color: rgb(157, 209, 241);
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {
            .about-hero h1 {
                font-size: 36px;
            }

            .about-grid,
            .vision-mission {
                grid-template-columns: 1fr;
            }

            .nav-links {
                gap: 15px;
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
            <a href="/">Home</a>
            <a href="/tentang-kami">About</a>
            <a href="/kontak">Contact</a>
        </div>
    </nav>

    <!-- HERO -->
    <section class="about-hero">
        <div class="about-label">ABOUT KATSHUNYAN</div>

        <h1>
            Tentang <span>Kami</span>
        </h1>

        <p>
            KatshuNyan adalah portal informasi manhwa yang dibuat
            untuk membantu pembaca menemukan berbagai informasi,
            update, dan rekomendasi manhwa favorit mereka.
        </p>
    </section>

    <!-- CONTENT -->
    <section class="about-content">

        <div class="about-grid">

            <div class="about-card">
                <h2>📖 Tentang KatshuNyan</h2>

                <p>
                    KatshuNyan merupakan website yang menyediakan
                    informasi seputar manhwa, mulai dari chapter terbaru,
                    berita adaptasi, hingga rekomendasi judul yang
                    menarik untuk dibaca.
                </p>
            </div>

            <div class="about-card">
                <h2>🎯 Tujuan Kami</h2>

                <p>
                    Website ini bertujuan untuk menjadi tempat sederhana
                    bagi para penggemar manhwa dalam menemukan informasi
                    terbaru dan menemukan judul baru yang sesuai dengan
                    minat mereka.
                </p>
            </div>

        </div>

        <!-- VISI MISI -->
        <div class="vision-mission">

            <div class="vm-card">
                <h2>Visi</h2>

                <p>
                    Menjadi portal informasi manhwa yang mudah digunakan,
                    informatif, dan menarik bagi para pembaca.
                </p>
            </div>

            <div class="vm-card">
                <h2>Misi</h2>

                <p>
                    Menyediakan informasi manhwa yang ringkas dan mudah
                    dipahami serta membantu pembaca menemukan rekomendasi
                    manhwa yang menarik.
                </p>
            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer>
        © 2026 KatshuNyan. Manhwa Information Portal.
    </footer>

</body>
</html>
```
