<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    
        body{
         margin: 0;
            font-family: Arial, sans-serif;
            background: rgba(17, 20, 71, 1); /* Corrected background color */
            }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 40px; /* Increased padding for a larger navbar */
            margin: 0;
            font-family: Arial, sans-serif;
            background: rgba(17, 20, 71, 1); /* Corrected background color */
        }

        .logo {
            color: white;
            font-size: 36px; /* Adjusted font size for logo text */
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
            margin-left: 30px; /* Increased margin between links */
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 15px 20px; /* Increased padding for links */
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: rgba(85, 85, 85, 0.5); /* Transparent hover effect */
        }

        .support-portal {
            border: 2px solid white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            The Tech Team
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="https://the-tech-team.org/polls/GMLSU">Mailing List Signup</a></li>
            <li><a href="sponsers.php">Sponsor Us</a></li>
            <li><a href="https://www.the-tech-team.org/hesk" class="support-portal">Support Portal</a></li>
        </ul>
    </nav>
</body>
</html>
