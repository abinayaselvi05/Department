
<!DOCTYPE html>
<html>
<head>

    <title>About Our Department</title>

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
            font-size: 23px;
            font-weight: bold;
            color: #a78bfa;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 22px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #a78bfa;
        }

        /* Hero Section */

        .hero {
            padding: 90px 20px;
            text-align: center;
            background: linear-gradient(
                135deg,
                #312e81,
                #581c87,
                #0f172a
            );
        }

        .hero h1 {
            font-size: 45px;
            margin-bottom: 20px;
            color: #c4b5fd;
        }

        .hero p {
            max-width: 750px;
            margin: auto;
            color: #ddd6fe;
            line-height: 1.8;
            font-size: 17px;
        }

        /* Main Content */

        .section {
            padding: 65px 8%;
            text-align: center;
        }

        .section h2 {
            color: #c4b5fd;
            font-size: 32px;
            margin-bottom: 25px;
        }

        .section p {
            max-width: 850px;
            margin: auto;
            line-height: 1.9;
            color: #cbd5e1;
        }

        /* Cards */

        .cards {
            display: grid;
            grid-template-columns:
                repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        .card {
            padding: 35px 22px;
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: #a78bfa;
            box-shadow: 0 10px 25px rgba(124,58,237,0.2);
        }

        .card .icon {
            font-size: 42px;
            margin-bottom: 18px;
        }

        .card h3 {
            color: #c4b5fd;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 14px;
        }

        /* Mission Section */

        .mission {
            margin: 20px 8% 70px;
            padding: 45px;
            text-align: center;
            background: linear-gradient(
                135deg,
                #312e81,
                #581c87
            );
            border-radius: 18px;
        }

        .mission h2 {
            margin-bottom: 20px;
        }

        .mission p {
            color: #ede9fe;
            line-height: 1.8;
        }

        /* Footer */

        footer {
            background: #080d19;
            padding: 25px;
            text-align: center;
            color: #94a3b8;
        }

        @media(max-width: 700px) {

            nav {
                flex-direction: column;
                gap: 18px;
            }

            nav a {
                margin: 5px;
                font-size: 13px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 15px;
            }

            .mission {
                padding: 25px;
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

    <h1>About Our Department</h1>

    <p>
        Welcome to the Department of Computer Science.
        We believe in technology, creativity and innovation.
        Our department provides quality education and
        practical knowledge to prepare students for
        successful careers in the IT industry.
    </p>

</section>


<!-- About Section -->

<section class="section">

    <h2>Who We Are</h2>

    <p>
        The Department of Computer Science focuses on
        developing technical knowledge, programming
        skills and problem-solving abilities.
        We encourage students to explore new technologies,
        participate in projects and develop innovative ideas.
    </p>

</section>


<!-- Objectives -->

<section class="section">

    <h2>Our Objectives</h2>

    <div class="cards">

        <div class="card">

            <div class="icon">🎯</div>

            <h3>Our Vision</h3>

            <p>
                To become a centre of excellence in
                computer science education and technology.
            </p>

        </div>

        <div class="card">

            <div class="icon">🚀</div>

            <h3>Our Mission</h3>

            <p>
                To provide quality education and develop
                skilled professionals for the future.
            </p>

        </div>

        <div class="card">

            <div class="icon">💡</div>

            <h3>Innovation</h3>

            <p>
                Encourage creativity, research and
                innovative technology development.
            </p>

        </div>

        <div class="card">

            <div class="icon">🏆</div>

            <h3>Excellence</h3>

            <p>
                Improve technical knowledge and
                professional skills among students.
            </p>

        </div>

    </div>

</section>


<!-- Courses Section -->

<section class="section">

    <h2>Our Technical Areas</h2>

    <div class="cards">

        <div class="card">
            <div class="icon">💻</div>
            <h3>Programming</h3>
            <p>Learn C, C++, Java and Python.</p>
        </div>

        <div class="card">
            <div class="icon">🌐</div>
            <h3>Web Development</h3>
            <p>Learn HTML, CSS, JavaScript and PHP.</p>
        </div>

        <div class="card">
            <div class="icon">🤖</div>
            <h3>Artificial Intelligence</h3>
            <p>Explore AI, Machine Learning and Deep Learning.</p>
        </div>

    </div>

</section>


<!-- Mission -->

<div class="mission">

    <h2>Build Your Future With Technology</h2>

    <p>
        Learn, Explore, Innovate and Achieve.
        Join our Computer Science Department
        and become a part of the digital future.
    </p>

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
