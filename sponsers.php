<?php
include('templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tech Team | Sponsor Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
           
        }

        /* Ensure navbar is not affected by body styles */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 40px;
            background: rgba(17,20,71,1);
            text-align: left;
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            display: inline-block;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            transition: background-color 0.3s;
            display: block;
        }

        .nav-links a:hover {
            background-color: rgba(85, 85, 85, 0.5);
        }

        .support-portal {
            border: 2px solid white;
            border-radius: 5px;
        }

        .pricing-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 50px;
            flex-wrap: wrap;
            text-align: center;
        }

        .pricing-card {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
            border: 2px solid #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 450px;
        }

        h3 {
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        h2 {
            font-size: 28px;
            color: #ccc;
        }

        ul {
            list-style: none;
            padding: 0;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        ul li {
            margin: 10px 0;
            font-size: 16px;
            color: #aaa;
        }

        .tier-description {
            font-size: 14px;
            color: #bbb;
            margin: 15px 0;
        }

        .notice {
            font-size: 14px;
            color: #ff5555;
            font-weight: bold;
            margin: 20px 0;
        }

        .order-button {
            background-color: #fff;
            color: black;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-top: auto;
        }

        .order-button:hover {
            background-color: #ccc;
            color: black;
        }
    </style>
</head>
<body>

    <div class="pricing-container">
        <div class="pricing-card">
            <h3>Silver Supporter</h3>
            <h2>$10.00/mo</h2>
            <p class="tier-description">This is the Silver Supporter plan, ideal for users who require minimal support and want access to the forum.</p>
            <ul>
                <li>Low Priority</li>
                <li>Access To Forum Page</li>
            </ul>
            <button class="order-button" onclick="location.href='https://www.the-tech-team.org/hesk/index.php?a=add&catid=5'">Order Now</button>
        </div>
        <div class="pricing-card">
            <h3>Gold Partner</h3>
            <h2>$15.00/mo</h2>
            <p class="tier-description">The Gold Partner tier provides a balanced approach, offering faster support and additional benefits.</p>
            <ul>
                <li>Medium Priority</li>
                <li>Access To Forum Page</li>
            </ul>
            <button class="order-button" onclick="location.href='https://www.the-tech-team.org/hesk/index.php?a=add&catid=6'">Order Now</button>
        </div>
        <div class="pricing-card">
            <h3>Platinum Elite</h3>
            <h2>$20.00/mo</h2>
            <p class="tier-description">The Platinum Elite tier is designed for users who require the highest level of support and priority access.</p>
            <ul>
                <li>High Priority</li>
                <li>Access To Forum Page</li>
                <li>Exclusive Content</li>
            </ul>
            <button class="order-button" onclick="location.href='https://www.the-tech-team.org/hesk/index.php?a=add&catid=7'">Order Now</button>
        </div>
    </div>
    
    <div class="notice">
        * NO REFUNDS * If you don't pay within 2 days of your monthly payment due date, you won't be a sponsor anymore.
    </div>

</body>
</html>
