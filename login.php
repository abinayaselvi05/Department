
<?php
include 'db.php';

$message = "";

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {

        if (password_verify($password, $user['password'])) {

            $_SESSION['user'] = $user['name'];

            header("Location: dashboard.php");
            exit();

        } else {
            $message = "Invalid Password!";
        }

    } else {
        $message = "User Not Found!";
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Student Login</title>

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(
                135deg,
                #0f172a,
                #312e81,
                #581c87
            );
            color: white;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 7%;
            background: rgba(0,0,0,0.25);
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
            color: #a78bfa;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #c4b5fd;
        }

        .main {
            min-height: 85vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
        }

        .login-card {
            width: 400px;
            max-width: 100%;
            padding: 40px;
            background: rgba(255,255,255,0.10);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            animation: appear 0.8s ease;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .icon {
            width: 65px;
            height: 65px;
            margin: auto;
            border-radius: 50%;
            background: #8b5cf6;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            font-size: 28px;
        }

        .subtitle {
            text-align: center;
            color: #ddd6fe;
            margin: 12px 0 25px;
        }

        label {
            display: block;
            margin: 18px 0 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 9px;
            background: rgba(255,255,255,0.12);
            color: white;
            outline: none;
        }

        input::placeholder {
            color: #d1d5db;
        }

        input:focus {
            border-color: #c4b5fd;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 25px;
            border: none;
            border-radius: 9px;
            background: linear-gradient(
                90deg,
                #7c3aed,
                #4f46e5
            );
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px #4c1d95;
        }

        .message {
            text-align: center;
            color: #fca5a5;
            margin-top: 15px;
        }

        .register-link {
            text-align: center;
            margin-top: 22px;
            color: #ddd6fe;
            font-size: 14px;
        }

        .register-link a {
            color: white;
            font-weight: bold;
            text-decoration: none;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #ddd6fe;
        }

        @media(max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 5px;
                font-size: 13px;
            }

            .login-card {
                padding: 25px;
            }
        }

    </style>

</head>

<body>

<nav>

    <div class="logo">🎓 CS Department</div>

    <div>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="about.php">About Us</a>
    </div>

</nav>

<div class="main">

    <div class="login-card">

        <div class="icon">🔐</div>

        <h2>Welcome Back!</h2>

        <p class="subtitle">
            Login to Your Department Account
        </p>

        <form method="POST">

            <label>Email Address</label>

            <input type="email"
                   name="email"
                   placeholder="Enter your email"
                   required>

            <label>Password</label>

            <input type="password"
                   name="password"
                   placeholder="Enter your password"
                   required>

            <button type="submit" name="login">
                Login Now →
            </button>

        </form>

        <p class="message">
            <?php echo htmlspecialchars($message); ?>
        </p>

        <div class="register-link">
            Don't have an account?
            <a href="register.php">Register Here</a>
        </div>

    </div>

</div>

<footer>
    © 2026 Department of Computer Science.
    All Rights Reserved.
</footer>

</body>
</html>
