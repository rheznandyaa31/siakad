<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Akademik')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
    background-image: url('gambar/o.jpeg'); /* Gambar latar belakang */
    background-size: cover; /* Menyesuaikan ukuran gambar agar memenuhi seluruh layar */
    background-position: center; /* Menempatkan gambar di tengah */
    font-family: 'Poppins', sans-serif; /* Font menggunakan Poppins */
    color: rgb(12, 12, 12); /* Warna teks supaya kontras dengan gambar */
    margin: 0;
    height: 100vh; /* Layar penuh */
}

.login-container {
    max-width: 400px;
    margin: 100px auto;
    padding: 40px;
    background-color: #3b2f81; /* Warna ungu yang lebih modern */
    border-radius: 15px; /* Sudut yang lebih melengkung */
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih dalam */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    color: #080808; /* Warna teks putih untuk kontras */
    font-family: 'Poppins', sans-serif; /* Font modern */
    text-align: center; /* Pusatkan teks */
}


        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-check-label {
            font-weight: 400;
        }
        footer {
            font-size: 0.9em;
            color: #000000;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @yield('content')

    

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>