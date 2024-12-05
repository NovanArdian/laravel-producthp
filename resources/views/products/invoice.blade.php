<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            padding-top: 150px; /* Menambahkan lebih banyak padding di atas */
        }
        .container {
            width: 90%;
            max-width: 500px; /* Meningkatkan ukuran maksimum kontainer */
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 30px; /* Meningkatkan padding internal kontainer */
            text-align: center;
            margin: auto;
            font-size: 1.1rem; /* Meningkatkan ukuran font umum */
        }
        h1 {
            font-size: 2rem; /* Meningkatkan ukuran font judul */
            color: #007bff;
            margin-bottom: 15px;
        }
        p {
            font-size: 1rem;
            color: #555;
            margin: 8px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px; /* Meningkatkan ukuran padding dalam sel tabel */
            text-align: left;
            font-size: 1rem;
        }
        th {
            background: #007bff;
            color: white;
        }
        td {
            background: #f9f9f9;
        }
        footer {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #777;
        }

        /* Media print styles */
        @media print {
            body {
                background: white;
                height: auto;
                padding: 0;
            }
            .container {
                box-shadow: none;
                margin: 0;
                padding: 0;
                width: 100%;
            }
            footer {
                display: none;
            }
            h1, p, table {
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Struk Pembelian</h1>
        <p>Tanggal: <strong>15 November 2024</strong></p>
        <p>Terima kasih telah berbelanja!</p>
        <table>
            <tr>
                <th>Nama Produk</th>
                <td>{{ $title }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>{{ $price }}</td>
            </tr>
            <tr>
                <th>Kode Produk</th>
                <td>{{ $product_code }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $description }}</td>
            </tr>
        </table>
        <footer>
            <p>Jika ada pertanyaan, hubungi kami di <a href="mailto:support@example.com">support@example.com</a>.</p>
            <p>&copy; 2024 Toko Kami. Semua hak dilindungi.</p>
        </footer>
    </div>
</body>
</html>
