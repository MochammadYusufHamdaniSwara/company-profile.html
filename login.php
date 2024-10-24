<?php
// Mulai sesi
session_start();

// Tentukan username dan password
$valid_username = "ucup";
$valid_password = "ucup";

// Cek jika form login disubmit
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi username dan password
    if ($username == $valid_username && $password == $valid_password) {
        // Jika benar, buat sesi login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect ke halaman yang dilindungi
        header("Location: protected_page.php");
        exit;
    } else {
        // Jika salah, tampilkan pesan error
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Styling umum untuk halaman */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #0800fb, #000000, #005eff);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Kotak form login */
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 350px;
            animation: fadeIn 2s;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #333;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 80%;
            padding: 15px;
            margin: 10px 0;
            border: 2px solid transparent;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.6);
            transition: border 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border: 2px solid #FC5C7D;
            outline: none;
        }

        button[type="submit"] {
            background: linear-gradient(to right, #0008ff, #ffffff);
            color: white;
            padding: 15px;
            border: none;
            border-radius: 50px;
            width: 100%;
            cursor: pointer;
            transition: transform 0.3s ease, background 0.3s ease;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background: linear-gradient(to right, #ffffff, #6A82FB);
            transform: scale(1.05);
        }

        /* Pesan error */
        .error {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
            font-weight: bold;
        }

        /* Responsive untuk perangkat mobile */
        @media (max-width: 768px) {
            .login-container {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required><br>

            <input type="password" name="password" placeholder="Password" required><br>

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>