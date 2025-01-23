<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombol Daftar Custom</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .custom-daftar-button {
            background-color: #FF5733; /* Warna oranye */
            color: white;
            padding: 15px 32px;
            font-size: 18px;
            border: none;
            border-radius: 25px; /* Sudut lebih melengkung */
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan */
        }

        .custom-daftar-button:hover {
            background-color: #E64A19; /* Warna oranye lebih gelap saat hover */
            transform: translateY(-2px); /* Efek naik sedikit */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15); /* Bayangan lebih besar saat hover */
        }
    </style>
</head>
<body>
    <div class="button-container">
        <!-- Tombol dengan Bootstrap class dan custom class -->
        <button class="btn custom-daftar-button">Daftar Sekarang</button>
    </div>

    <!-- Bootstrap JS (opsional, jika Anda membutuhkan komponen JS Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>