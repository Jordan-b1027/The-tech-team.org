<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: rgba(17, 20, 71, 1);
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 40px;
            background: rgba(17, 20, 71, 1);
            color: white;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .support-portal {
            border: 2px solid white;
            border-radius: 5px;
            padding: 10px 15px;
        }

        /* Hamburger Menu */
        .menu-toggle {
            display: none;
            font-size: 28px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                background: rgba(17, 20, 71, 0.95);
                width: 100%;
                text-align: center;
                padding: 20px 0;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 10px 0;
            }

            .menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">The Tech Team</div>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="https://the-tech-team.org/polls/GMLSU">Mailing List Signup</a></li>
            <li><a href="sponsers.php">Sponsor Us</a></li>
            <li><a href="https://www.the-tech-team.org/hesk" class="support-portal">Support Portal</a></li>
        </ul>
    </nav>

    <script>
        function toggleMenu() {
            document.querySelector('.nav-links').classList.toggle('active');
        }
    </script>

</body>
</html>
