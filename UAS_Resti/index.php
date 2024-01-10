<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Rsti</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5e5ff; /* Light Purple Background */
            color: #fff; /* White Text Color */
        }

        header {
            background-color: #8e44ad; /* Dark Purple Header */
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #9b59b6; /* Purple Navigation */
            padding: 10px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #dcdcdc; /* Light Gray on Hover */
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #d2b4de; /* Light Purple Section Background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #8e44ad; /* Dark Purple Heading */
        }

        p {
            color: #6c3483; /* Darker Purple Text */
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <header>
        <h1>Perpustakaan Resti</h1>
    </header>

    <nav>
        <a href="lihat_database.php">Lihat Data Buku</a>
        <a href="tambah_database.php">Tambah Data Buku Baru</a>
    </nav>

    <section>
        <h2>Selamat datang di Perpustakaan Neng Resti</h2>
        <p>Silakan pilih menu di atas untuk melihat data buku atau menambahkan data buku baru.</p>
    </section>

</body>

</html>
