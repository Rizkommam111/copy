<?php
include('connection.php');
$query = "SELECT * FROM tb_produk";
$result = $koneksi->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>

    <body>

        <h2>HTML Table</h2>

        <table>
            <tr>
                <th>Id</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <tbody>
                <?php while ($row1 = mysqli_fetch_array($result)) :; ?>
                    <tr>
                        <td><?php echo $row1['id']; ?></td>
                        <td><?php echo $row1['nama_produk']; ?></td>
                        <td><?php echo $row1['harga']; ?></td>
                        <td><?php echo $row1['stok']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </body>

    </html>


</body>

</html>