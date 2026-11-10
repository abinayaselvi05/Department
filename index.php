
<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>

    <title>Computer Science Department</title>

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

        /* Navigation */

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 7%;
            background: #111827;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #a78bfa;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 15px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #a78bfa;
        }

        /* Hero Section */

        .hero {
            min-height: 570px;
            display: flex;
            align-items: center;
            padding: 60px 8%;
            background:
                linear-gradient(
                    90deg,
                    rgba(15,23,42,0.96),
                    rgba(49,46,129,0.75)
                ),
                url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1600')
                center/cover;
        }

        .hero-content {
            max-width: 650px;
        }

        .hero h1 {
            font-size: 48px;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #a78bfa;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.8;
            color: #ddd6fe;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 14px 28px;
            background: #7c3aed;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-right: 12px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #4f46e5;
            transform: translateY(-3px);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #a78bfa;
        }

        /* About Section */

        .section {
            padding: 70px 8%;
            text-align: center;
        }

        .section h2 {
            font-size: 32px;
            color: #c4b5fd;
            margin-bottom: 20px;
        }

        .section p {
            color: #cbd5e1;
            line-height: 1.8;
            max-width: 800px;
            margin: auto;
        }

        /* Features */

        .features {
            display: grid;
            grid-template-columns:
                repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .card {
            padding: 30px 20px;
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: #a78bfa;
        }

        .card .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #c4b5fd;
            margin-bottom: 12px;
        }

        .card p {
            font-size: 14px;
        }

        /* Contact Section */

        .contact {
            background: linear-gradient(
                135deg,
                #312e81,
                #581c87
            );
            padding: 55px 20px;
            text-align: center;
        }

        .contact h2 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .contact p {
            color: #ddd6fe;
            margin-bottom: 25px;
        }

        /* Footer */

        footer {
            background: #080d19;
            padding: 25px;
            text-align: center;
            color: #94a3b8;
        }

        /* Responsive */

        @media(max-width: 700px) {

            nav {
                flex-direction: column;
                gap: 20px;
            }

            nav a {
                margin: 6px;
                font-size: 13px;
            }

            .hero {
                min-height: 480px;
                padding: 40px 7%;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 15px;
            }

        }

    </style>

</head>

<body>

<!-- Navigation Bar -->

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


<!-- Hero Section -->

<section class="hero">

    <div class="hero-content">

        <h1>
            Welcome to the
            <span>Department of Computer Science</span>
        </h1>

        <p>
            Explore the world of technology, innovation
            and creativity. Learn programming, Artificial
            Intelligence, Web Development and modern
            computing technologies with us.
        </p>

        <a href="register.php" class="btn">
            Join Our Department →
        </a>

        <a href="about.php"
           class="btn btn-outline">
            Explore More
        </a>

    </div>

</section>


<!-- About Section -->

<section class="section">

    <h2>About Our Department</h2>

    <p>
        The Department of Computer Science provides
        quality education and practical knowledge.
        Our goal is to develop skilled professionals
        with technical knowledge, creativity and
        problem-solving abilities.
    </p>

</section>


<!-- Department Features -->

<section class="section">

    <h2>What We Offer</h2>

    <div class="features">

        <div class="card">

            <div class="icon">💻</div>

            <h3>Programming</h3>

            <p>
                Learn C, C++, Java, Python and
                modern programming languages.
            </p>

        </div>

        <div class="card">

            <div class="icon">🌐</div>

            <h3>Web Development</h3>

            <p>
                Develop modern websites using
                HTML, CSS, JavaScript and PHP.
            </p>

        </div>

        <div class="card">

            <div class="icon">🤖</div>

            <h3>Artificial Intelligence</h3>

            <p>
                Explore Machine Learning,
                Deep Learning and AI technologies.
            </p>

        </div>

        <div class="card">

            <div class="icon">🔬</div>

            <h3>Research & Innovation</h3>

            <p>
                Improve technical skills through
                projects, research and innovation.
            </p>

        </div>

    </div>

</section>


<!-- Contact Section -->

<section class="contact">

    <h2>Start Your Learning Journey Today!</h2>

    <p>
        Become a part of our Computer Science Department.
    </p>

    <a href="register.php" class="btn">
        Register Now →
    </a>

</section>


<!-- Footer -->

<footer>

    <p>
        © 2026 Department of Computer Science.
        All Rights Reserved.
    </p>

</footer>

</body>
</html>
