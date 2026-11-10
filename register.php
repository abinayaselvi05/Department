
<?php
include 'db.php';

$message = "";
$status = "";

if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users (name, email, password)
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt, "sss",
        $name, $email, $password
    );

    if (mysqli_stmt_execute($stmt)) {
        $message = "Registration Successful!";
        $status = "success";
    } else {
        $message = "Email already exists!";
        $status = "error";
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Department Registration</title>

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

        /* Navigation */

        nav {
            width: 100%;
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0,0,0,0.25);
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
            color: #a5b4fc;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 15px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #c4b5fd;
        }

        /* Main section */

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 85vh;
            padding: 30px 15px;
        }

        .register-card {
            width: 420px;
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
            background: #8b5cf6;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            margin: auto;
        }

        h2 {
            text-align: center;
            margin-top: 18px;
            font-size: 28px;
        }

        .subtitle {
            text-align: center;
            color: #ddd6fe;
            font-size: 14px;
            margin: 10px 0 25px;
        }

        label {
            display: block;
            margin: 17px 0 8px;
            font-size: 14px;
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
            font-size: 14px;
        }

        input::placeholder {
            color: #d1d5db;
        }

        input:focus {
            border-color: #c4b5fd;
            box-shadow: 0 0 8px #8b5cf6;
        }

        .register-btn {
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

        .register-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(124,58,237,0.5);
        }

        .login-link {
            text-align: center;
            margin-top: 22px;
            font-size: 14px;
            color: #ddd6fe;
        }

        .login-link a {
            color: white;
            font-weight: bold;
            text-decoration: none;
        }

        .message {
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
        }

        .success {
            color: #86efac;
        }

        .error {
            color: #fca5a5;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #ddd6fe;
            font-size: 13px;
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

            .register-card {
                padding: 25px;
            }
        }

    </style>
</head>

<body>

<!-- Navigation -->

<nav>

    <div class="logo">
        🎓 CS Department
    </div>

    <div>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="about.php">About Us</a>
    </div>

</nav>

<!-- Registration Form -->

<div class="main">

    <div class="register-card">

        <div class="icon">👨‍🎓</div>

        <h2>Create Account</h2>

        <p class="subtitle">
            Join Our Department Community
        </p>

        <form method="POST"
              onsubmit="return validateForm()">

            <label>Full Name</label>

            <input type="text"
                   name="name"
                   placeholder="Enter your full name"
                   required>

            <label>Email Address</label>

            <input type="email"
                   name="email"
                   placeholder="Enter your email"
                   required>

            <label>Password</label>

            <input type="password"
                   name="password"
                   id="password"
                   placeholder="Create a password"
                   minlength="6"
                   required>

            <button type="submit"
                    name="register"
                    class="register-btn">

                Create Account →

            </button>

        </form>

        <?php if ($message != "") { ?>

            <p class="message <?php echo $status; ?>">
                <?php echo htmlspecialchars($message); ?>
            </p>

        <?php } ?>

        <div class="login-link">

            Already have an account?

            <a href="login.php">Login Here</a>

        </div>

    </div>

</div>

<footer>
    © 2026 Department of Computer Science.
    All Rights Reserved.
</footer>

<!-- JavaScript Validation -->

<script>

    function validateForm() {

        let password =
            document.getElementById("password").value;

        if (password.length < 6) {

            alert("Password must contain at least 6 characters!");

            return false;
        }

        return true;
    }

</script>

</body>
</html>
