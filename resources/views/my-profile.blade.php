<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0
        }

        header {
            background-color: #0a0130;
            color: white;
            padding: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        header a {
            color: white
        }

        main {
            padding: 24px;
        }

        img {
            width: 120px;
        }
    </style>
</head>

<body>
    <header>
        <h1>
            {{ $nama }}
        </h1>

        <div>
            <a href="/">Home</a>
            <a href="">Profile</a>
            <a href="/contact">Contact</a>
        </div>
    </header>
    <main>
        <h2>Ini halaman profile</h2>
        <p>Halo nama saya adalah
            {{ $nama }} umur saya sekarang
            {{ $umur }} tahun dan hobi saya adalah
            {{ $hobi }}
        </p>

        <p>
            {{ $biografi }}
        </p>

        <p>
            {{ $umur > 18 ? "Dewasa" : "Remaja" }}
        </p>

        <img src="/profile.png" alt="ini gambar profile">
    </main>
</body>

</html>