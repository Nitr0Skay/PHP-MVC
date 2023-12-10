<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title> Products </title>
</head>

<body>
    <header class="header" id="header"> 
        <a href="#" title="Nagłówek Strony"> 
            <h1 class="page-title" id="page-title"> Products </h1>
        </a>
    </header>

    <?php foreach ($products as $product): ?>
        <h2> <?= htmlspecialchars($product["name"]) ?> </h2>
        <p> <?= htmlspecialchars($product["description"]) ?></p>
    <?php endforeach; ?>
</body>
</html>