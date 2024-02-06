<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>HW_PHP</title>
</head>

<body>
<nav>
    <div class="nav-wrapper darken-1">
      <a href="/" class="brand-logo">HW PHP</a>
      <ul id="nav-mobile" class="right">
        <?php foreach( ['/page1' => 'Друга сторінка', '/page2' => 'Регулярні вирази' ] as $href => $name ) : ?>
        <li <?= $uri==$href ? 'class="active"' : '' ?> ><a href=<?=$href?>><?=$name?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
</nav>
    <div class="container">
        <?php include $page_body ; ?>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>