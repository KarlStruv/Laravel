<?php
?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../css/hammer_and_sickle_icon.png">
    <link rel="stylesheet" href="/app.css">
    <title>TO-DO List</title>
</head>

Log in
<br>
<br>
<body>


<form action="/tasks" method="get" id="loginForm">
    <label for="email"> E-Mail:</label>
    <input type="email" name="email" id="email">

    <label for="password"> Password:</label>
    <input type="password" name="password" id="password">

    <button type="submit">Log in</button>

</form>

</body>
