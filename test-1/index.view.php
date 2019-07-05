<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP and HTML</title>
    <style>
        body {
            box-sizing: border-box;
            border: .25em solid green;
            margin: 2em auto;
            max-width: 100%;
            padding: 1em 2em;
            width: 30%;
        }
    </style>
</head>
<body>
    <h1>
        <?php
        echo $greeting;
        ?>
    </h1>

    <h3>First variation of simple array</h3>
    <ul>
        <?php
        foreach ($names as $name) {
            echo "<li>$name</li>";
        }
        ?>
    </ul>

    <h3>Second variation of simple array</h3>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>First variation of associative array</h3>
    <ul>
        <?php foreach ($person as $key => $value) : ?>
            <li><?= $key ?>: <?= $value ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>