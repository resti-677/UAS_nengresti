<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'data_mahasiswa';

$conn = new mysqli($localhost, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function sanitize($data)
{
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_title = sanitize($_POST['title']);
    $new_author = sanitize($_POST['author']);
    $new_publish_year = sanitize($_POST['published_year']);
    $new_isbn = sanitize($_POST['isbn']);

    // Menggunakan prepared statement untuk mencegah SQL Injection
    $insert_query = $conn->prepare("INSERT INTO perpustakaan_resti (title, author, published_year, isbn) VALUES (?, ?, ?, ?)");
    $insert_query->bind_param("ssss", $new_title, $new_author, $new_publish_year, $new_isbn);

    if ($insert_query->execute()) {
        $insert_query->close();
        header("Location: lihat_database.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data - Perpustakaan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5e5ff; /* Light Purple Background */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
        }

        header {
            background-color: #8e44ad; /* Dark Purple Header */
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        nav {
            background-color: #9b59b6; /* Purple Navigation */
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #6c3483; /* Darker Purple on Hover */
            color: #000;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #d2b4de; /* Light Purple Section Background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #8e44ad; /* Dark Purple Button */
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #6c3483; /* Darker Purple on Hover */
        }
    </style>
</head>

<body>

    <header>
        <h1>PERPUSTAKAAN RESTI</h1>
    </header>

    <nav>
        <a href="lihat_database.php">Lihat Data Buku</a>
        <a href="tambah_database.php">Tambah Data Buku Baru</a>
    </nav>

    <section>
        <h2>Formulir Tambah Data Buku</h2>
        <form method="post" action="">
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title" required>

            <label for="author">Penulis:</label>
            <input type="text" id="author" name="author" required>

            <label for="published_year">Tahun Terbit:</label>
            <input type="text" id="published_year" name="published_year" required>

            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" required>

            <button type="submit">Tambah Data</button>
        </form>
    </section>

</body>

</html>

<?php
$conn->close();
?>
