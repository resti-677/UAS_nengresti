<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'data_mahasiswa';

$conn = new mysqli($localhost, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$query = "SELECT id, title, author, published_year, isbn FROM perpustakaan_resti";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Neng Resti</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5e5ff; /* Light Purple Background */
            color: #333;
        }

        header {
            background-color: #8e44ad; /* Dark Purple Header */
            color: #fff;
            padding: 20px;
            text-align: center;
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
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #d2b4de; /* Light Purple Section Background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #b19cd9; /* Darker Purple Table Header */
        }

        .action-buttons {
            display: flex;
            gap: 5px;
        }

        .edit-button, .hapus-button, .detail-button {
            padding: 8px 16px;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s;
        }

        .edit-button {
            background-color: #8e44ad; /* Dark Purple Edit Button */
        }

        .hapus-button {
            background-color: #e74c3c; /* Red Delete Button */
        }

        .detail-button {
            background-color: #4caf50; /* Green Detail Button */
        }

        .edit-button:hover, .hapus-button:hover, .detail-button:hover {
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
        <h2>Data Buku</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>ISBN</th>
                <th>Aksi</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['author'] . "</td>";
                    echo "<td>" . $row['published_year'] . "</td>";
                    echo "<td>" . $row['isbn'] . "</td>";
                    echo "<td class='action-buttons'>";
                    echo "<a href='edit_data.php?id=" . $row['id'] . "' class='edit-button'>Edit</a>";
                    echo "<a href='hapus_data.php?id=" . $row['id'] . "' class='hapus-button'>Hapus</a>";
                    echo "<a href='detail_buku.php?id=" . $row['id'] . "' class='detail-button'>Detail</a>"; // Tambah tombol Detail
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
            }
            ?>
        </table>
    </section>

</body>

</html>

<?php
$conn->close();
?>
