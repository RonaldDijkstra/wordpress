<?php 
    $items = get_kvk_data();
?>

<?php get_header(); ?>
<main>
  <h1 class="text-4xl">
    <?= the_title(); ?>
  </h1>
  <br><br>
  <?php foreach($items->resultaten as $item): ?>
    <?php $kvkNummer = $item->kvkNummer; ?>
    <div>
        <h3>
            <strong><?= $item->handelsnaam; ?></strong>
        </h3>
        <div>
            Type: <?= $item->type; ?>
        </div>
        <div>
            KVK-nummer: <?= $kvkNummer; ?>
        </div>
        <div>
            Straat: <?= $item->straatnaam; ?>
        </div>
        <div>
            Plaats: <?= $item->plaats; ?>
        </div>
        <div>
            Soort adres: <?= $item->adresType; ?>
        </div>
        <br>
        <?php
        
        $owner = get_kvk_owner($kvkNummer); 
        $rsin = isset($owner->rsin) ? $owner->rsin : null;
        
        ?>
        <div>
            Rechtsvorm: <?= $owner->rechtsvorm; ?>
        </div>
        <?php if($rsin): ?>
            <div>
                RSIN: <?= $rsin; ?>
            </div>
        <?php endif; ?>
        <br><br>
    </div>
    <hr><br>
  <?php endforeach; ?>
</main>
<?php get_footer(); ?>


