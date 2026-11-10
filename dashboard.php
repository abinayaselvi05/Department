
<?php
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>

    <title>Student Dashboard</title>

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
            background: #0f172a;
            color: white;
        }

        /* Header */

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 6%;
            background: #111827;
            border-bottom: 1px solid #334155;
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
            color: #a78bfa;
        }

        .logout {
            padding: 11px 22px;
            background: #7c3aed;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            transition: 0.3s;
        }

        .logout:hover {
            background: #4f46e5;
        }

        /* Main Content */

        .main {
            padding: 45px 7%;
        }

        .welcome {
            padding: 40px;
            border-radius: 18px;
            background: linear-gradient(
                135deg,
                #312e81,
                #581c87
            );
            margin-bottom: 35px;
        }

        .welcome h1 {
            font-size: 34px;
            margin-bottom: 15px;
        }

        .welcome p {
            color: #ddd6fe;
            font-size: 16px;
        }

        /* Dashboard Cards */

        .section-title {
            font-size: 25px;
            color: #c4b5fd;
            margin-bottom: 25px;
        }

        .cards {
            display: grid;
            grid-template-columns:
                repeat(auto-fit, minmax(220px, 1fr));
            gap: 22px;
        }

        .card {
            padding: 28px;
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-7px);
            border-color: #a78bfa;
        }

        .icon {
            font-size: 38px;
            margin-bottom: 18px;
        }

        .card h3 {
            color: #c4b5fd;
            margin-bottom: 12px;
        }

        .card p {
            color: #cbd5e1;
            line-height: 1.6;
            font-size: 14px;
        }

        /* Quick Links */

        .quick-links {
            margin-top: 40px;
            padding: 30px;
            background: #1e293b;
            border-radius: 15px;
        }

        .quick-links h2 {
            color: #c4b5fd;
            margin-bottom: 22px;
        }

        .quick-links a {
            display: inline-block;
            padding: 13px 22px;
            margin: 7px;
            background: #312e81;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .quick-links a:hover {
            background: #7c3aed;
        }

        /* Footer */

        footer {
            margin-top: 50px;
            padding: 22px;
            text-align: center;
            background: #080d19;
            color: #94a3b8;
        }

        /* Mobile Responsive */

        @media(max-width: 600px) {

            header {
                padding: 18px;
                flex-wrap: wrap;
                gap: 15px;
            }

            .logo {
                font-size: 19px;
            }

            .main {
                padding: 25px 5%;
            }

            .welcome {
                padding: 25px;
            }

            .welcome h1 {
                font-size: 25px;
            }

        }

    </style>

</head>

<body>

<!-- Header -->

<header>

    <div class="logo">
        🎓 CS Department
    </div>

    <a href="logout.php" class="logout">
        Logout ↗
    </a>

</header>


<!-- Main Dashboard -->

<div class="main">

    <!-- Welcome Section -->

    <div class="welcome">

        <h1>
            Welcome, <?php
                echo htmlspecialchars($username);
            ?>! 👋
        </h1>

        <p>
            Welcome to your Computer Science
            Department Dashboard.
        </p>

        <p>
            Learn, Explore and Achieve Your Goals.
        </p>

    </div>


    <!-- Dashboard Cards -->

    <h2 class="section-title">
        Department Dashboard
    </h2>

    <div class="cards">

        <div class="card">

            <div class="icon">👨‍🎓</div>

            <h3>Student Profile</h3>

            <p>
                Welcome to your student account.
                Continue your learning journey.
            </p>

        </div>


        <div class="card">

            <div class="icon">💻</div>

            <h3>Programming</h3>

            <p>
                Improve your coding skills
                through practical programming.
            </p>

        </div>


        <div class="card">

            <div class="icon">🌐</div>

            <h3>Web Development</h3>

            <p>
                Learn HTML, CSS, JavaScript
                and PHP development.
            </p>

        </div>


        <div class="card">

            <div class="icon">🤖</div>

            <h3>Artificial Intelligence</h3>

            <p>
                Explore Machine Learning
                and modern AI technologies.
            </p>

        </div>

    </div>


    <!-- Quick Links -->

    <div class="quick-links">

        <h2>Quick Links</h2>

        <a href="index.php">Home Page</a>

        <a href="about.php">About Department</a>

        <a href="register.php">Registration</a>

        <a href="logout.php">Logout</a>

    </div>

</div>


<!-- Footer -->

<footer>

    <p>
        © 2026 Department of Computer Science.
        All Rights Reserved.
    </p>

</footer>

</body>
</html>
