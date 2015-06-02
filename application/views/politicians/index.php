
<h2><?php echo $title ?></h2>

<?php foreach ($politicians as $politician_item): ?>

        <h3><?php echo $politician_item['FirstName'] ?></h3>
        <div class="main">
                <?php echo $politician_item['LastName'] ?>
        </div>
        <p><a href="<?php echo $politician_item['PoliticianId'] ?>">View article</a></p>

<?php endforeach ?>