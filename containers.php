<?php
  $packWeight = 2.5;
  $packWeight1000 = $packWeight * 1000;
  $productionCapacity = 210000;
  $woodPaper = 15;
  $paperLeaf = 500;
  $woodLeaf = $woodPaper * $paperLeaf;
  $productionCapacityPaper = $productionCapacity / $packWeight1000;
  $treesDie = $productionCapacityPaper * 1000000 / $woodLeaf;
  $woodHectare = 400;
  $hectareDie = $treesDie / $woodHectare
 ?>
