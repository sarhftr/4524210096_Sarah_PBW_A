<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Kontak - KatshuNyan</title>

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
        .contact-hero {
            text-align: center;
            padding: 80px 20px 50px;
        }

        .contact-label {
            color: rgb(80, 138, 168);
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .contact-hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: rgb(200, 224, 244);
        }

        .contact-hero h1 span {
            color: rgb(186, 18, 0);
        }

        .contact-hero p {
            max-width: 650px;
            margin: auto;
            color: rgb(157, 209, 241);
            font-size: 17px;
        }

        /* CONTACT SECTION */
        .contact-section {
            width: 84%;
            max-width: 1100px;
            margin: auto;
            padding: 30px 0 80px;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: 30px;
        }

        /* INFO */
        .contact-info {
            background-color: rgb(80, 138, 168);
            padding: 35px;
            border-radius: 15px;
        }

        .contact-info h2 {
            color: rgb(3, 25, 39);
            margin-bottom: 20px;
        }

        .contact-info p {
            color: rgb(3, 25, 39);
            margin-bottom: 25px;
        }

        .info-item {
            margin-bottom: 20px;
        }

        .info-item h3 {
            color: rgb(3, 25, 39);
            font-size: 16px;
            margin-bottom: 5px;
        }

        .info-item p {
            margin: 0;
        }

        /* FORM */
        .contact-form {
            background-color: rgb(200, 224, 244);
            padding: 35px;
            border-radius: 15px;
        }

        .contact-form h2 {
            color: rgb(3, 25, 39);
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            color: rgb(3, 25, 39);
            font-weight: bold;
            margin-bottom: 7px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid rgb(80, 138, 168);
            border-radius: 8px;
            background-color: white;
            color: rgb(3, 25, 39);
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .form-group textarea {
            height: 130px;
            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: rgb(186, 18, 0);
        }

        .submit-btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background-color: rgb(186, 18, 0);
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: rgb(3, 25, 39);
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
            .contact-hero h1 {
                font-size: 36px;
            }

            .contact-container {
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
    <section class="contact-hero">

        <div class="contact-label">GET IN TOUCH</div>

        <h1>
            Hubungi <span>Kami</span>
        </h1>

        <p>
            Punya pertanyaan, saran, atau ingin berbagi informasi
            mengenai manhwa? Jangan ragu untuk menghubungi kami.
        </p>

    </section>

    <!-- CONTACT -->
    <section class="contact-section">

        <div class="contact-container">

            <!-- CONTACT INFO -->
            <div class="contact-info">

                <h2>📬 Informasi Kontak</h2>

                <p>
                    Kami terbuka untuk menerima pertanyaan,
                    saran, maupun masukan dari para pembaca.
                </p>

                <div class="info-item">
                    <h3>📧 Email</h3>
                    <p>katshunyan@gmail.com</p>
                </div>

                <div class="info-item">
                    <h3>📱 Instagram</h3>
                    <p>@katshunyan</p>
                </div>

                <div class="info-item">
                    <h3>📍 Lokasi</h3>
                    <p>Jakarta, Indonesia</p>
                </div>

            </div>

            <!-- CONTACT FORM -->
            <div class="contact-form">

                <h2>Kirim Pesan</h2>

                <form action="#" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Masukkan nama kamu"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan email kamu"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea
                            id="message"
                            name="message"
                            placeholder="Tulis pesan kamu..."
                            required
                        ></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        Kirim Pesan
                    </button>

                </form>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer>
        © 2026 KatshuNyan. Manhwa Information Portal.
    </footer>

</body>
</html>

