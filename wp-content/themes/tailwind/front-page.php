<?php 
$items = get_kvk_data();
?>

<?php get_header(); ?>
<main>
  <h1 class="text-4xl">
    <?= the_title(); ?>
  </h1>
  <p>
    <?= the_content(); ?>
  </p>
  <?php foreach($items as $item): ?>
    <div>
        <h3>
            <strong><?= $item['handelsnaam']; ?></strong>
        </h3>
        <div>
            Type: <?= $item['type']; ?>
        </div>
        <div>
            KVK-nummer: <?= $item['kvkNummer']; ?>
        </div>
        <div>
            Straat: <?= $item['straatnaam']; ?>
        </div>
        <div>
            Plaats: <?= $item['plaats']; ?>
        </div>
        <div>
            Soort adres: <?= $item['adresType']; ?>
        </div>
        <br><br>
    </div>
    <hr><br><br>
  <?php endforeach; ?>
</main>
<?php get_footer(); ?>


