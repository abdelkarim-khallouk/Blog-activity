<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 2/12/18
 * Time: 11:22 AM
 */

$title = 'Mon blog'; ?>

<?php ob_start(); ?>
    <h1>Mon super blog !</h1>
    <p class="news">Derniers billets du blog :</p>

<?php

while ($data = $posts->fetch())
{
    ?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a class="badge badge-warning" href='./index.php?action=post&amp;id=<?= $data['id'] ?>'><i class="fa fa-comments"></i> Commentaires.. </a></em>
        </p>
    </div>
    <?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>