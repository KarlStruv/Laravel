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

<body>

Hello, User!
<br>
<br>

<body>

<form action="/tasks" method="get">

    <label for="title"> Title:</label>
    <input type="text" name="title" id="title">

    <label for="description"> Description:</label>
    <input type="text" name="description" id="description">

    <button type="submit">Create Task</button>

</form>

</body>
