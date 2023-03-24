<?php
    $conn = new mysqli("localhost","root","","bibliotheque");
    $req = "SELECT * FROM client";
    $LesClients= $conn->query($req);
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibi</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <style>

    </style>
<section class="wrapper">
        <div class="search">
            <input placeholder="Recherchez un livre" type="text" class="search-input">
            <button class="submit" type="submit">Go!</button>
            <button class="btn-list">Mes prefs</button>
            
        </div>
        <ul class="list"></ul>
    </section>
    <script src="./livre.js" defer></script>
</body>
</html>

