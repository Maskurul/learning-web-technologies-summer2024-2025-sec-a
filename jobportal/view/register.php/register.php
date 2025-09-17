<?php

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login.css">

    <title>Register</title>

</head>

<body>

    <div id ="header">

    <h2>Register</h2>

    <form method="POST" action="/register">

        <label for="employername">Employer Name:</label>

        <input type="text" id="employername" name="employername" required><br><br>

        <label for="companyname">Company Name:</label>

        <input type="text" id="companyname" name="companyname" required><br><br>

        <label for="contactno">Contact No:</label>

        <input type="number" id="contactno" name="contactno" required><br><br>

        <label for="username">Username:</label>

        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>

        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Register</button>

    </form>

    </div>

</body>

</html>