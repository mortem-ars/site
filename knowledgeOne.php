
<?php include 'containers.php'; ?>
<div class="container card mb-3">
  <h3 class="text-center card-header">Скиллы работы с PHP</h3>
  <div class="card-body">
    <h5 class="card-title">Барегите природу - Мать вашу!</h5>
    <h6 class="card-subtitle text-muted">Скажите, Вы когда-нибудь
      задумывались, какой ущерб природе приносит целлюлозно-бумажное
      производство ежемесячно?<br><br>
      Скорее всего, эта нетривиальная мысль никому из нас не приходила
      в голову. Но давайте попробуем кратко посчитать какое количество
      деревьев уничтожается, чтобы обеспечить канцелярией людей. <br><br>
      Давайте начнем с того, что посчитаем сколько бумаги в среднем
      получается из одного дерева. В основном для изготовления бумаги
      используются такие породы дервьев как:
      <ol>
        <li>Береза;</li>
        <li>Дуб;</li>
        <li>Ель.</li>
      </ol>

      <ul class="list-group list-group-flush">
        <li class="text-center list-group-item"></li>
        <li class="text-center list-group-item">
          В одном дереве в среднем
          <?php echo $woodPaper; ?>
          пачек бумаги.<br>
          В одной пачке
          <?php echo $paperLeaf; ?>
          листов.<br>
          Соответственно, в одном дереве
          <?php echo $woodLeaf; ?>
          листов бумаги.
        </li>
        </li>
        <li class="text-center list-group-item"></li>
      </ul>
  </h6>

  </div>
    <img src="img/123.jpg" alt="Ooops" class="img-thumbnail">
    <rect width="100%" height="100%" fill="#868e96"></rect>
  <div class="card-body">

    <p class="card-text">Хоть цифры и больше, но дальнейшие расчеты
    будут еще интереснее</p>
    <h6 class="card-subtitle text-muted">Мощности РФ по производству бумаги
      <?php echo $productionCapacity;?>
      тонн в месяц!<br>
      А в одной пачке бумаги
      <?php echo $packWeight; ?>
      килограм веса.<br>
      Вот на основе этих данных давайте посчитаем:
      <ol>
        <li>Какова производственная мощность РФ в пачках</li>
        <li>Сколько деревьев уничтожается ежемесячно</li>
        <li>Сколько гектаров деревьев уничтожается ежемесячно</li>
      </ol>



  </div>

  <ul class="list-group list-group-flush">
    <li class="text-center list-group-item">Производственная мощность =
    <?php echo $productionCapacityPaper; ?>
     млн. пачек бумаги.
    </li>
    <li class="text-center list-group-item">Уничтожается деревьев =
    <?php echo $treesDie; ?>
    /месяц.
    </li>
    <li class="text-center list-group-item">В одном гектаре леса в среднем
    <?php echo $woodHectare; ?>
    деревьев.<br>
    На производство уничтожается =
    <?php echo $hectareDie; ?>
    гектаров/месяц.
    </li>
  </ul>
