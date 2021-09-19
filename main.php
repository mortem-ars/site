<!DOCTYPE html>

<html lang="en, ru">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"/>
    <title>Сайт-визитка на PHP</title>

</head>



<body>

<?php include 'menu.inc.php'; ?>

<figure class="text-center">
    <blockquote class="blockquote">
        <h1 class="mb-0">
          <?php echo $p; ?>
        </h1>
        <p class="mb-0">Привет, меня зовут
          <?php echo $name; ?>!</p>
        <p class="mb-0">Мне 24 года, живу в
          <?php echo $city; ?>
         и обучаюсь программированию в школе
          <?php echo $school; ?>.</p>
        <p class="mb-0">Этот сайт-визитку я делаю уже 4-й день.</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        <cite title="Source Title">И можете мне поверить, я заколебался :)<br><br></cite>
    </figcaption>
</figure>

<?php include 'logo.inc.php'; ?>

<figure class="text-center">
    <blockquote class="blockquote">
        <h1 class="mb-0">PHP</h1>
    </blockquote>
</figure>

  <?php include 'knowledgeOne.php';?>
    <?php include 'knowledgeTwo.php';?>
      <?php include 'end.php'; ?>

</div>

<?php include 'footer.inc.php'; ?>

</body>

</html>
