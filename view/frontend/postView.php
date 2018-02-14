<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href= './public/css/style.css' rel="stylesheet" />
    </head>

    <body>
        <h1>Mon super blog !</h1>
        <p class="news"><a href='./index.php'>Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
            <em>le <?= $post['creation_date_fr'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
        </div>

        <h2 class="news">Commentaires</h2><br />

        <?php
        while ($comment = $comments->fetch())
        {
            ?>
            <p class="news">
                <strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?> (<a href="./form/postForm.php?author=<?= $comment['author'] ?> &amp;comment=<?= $comment['comment'] ?>&amp;id=<?= $comment['id'] ?>&amp;post_id=<?= $post['id'] ?>">modifier</a>)
            </p>
            <p class="news">
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
            </p>
            <br />
            <?php
        }
        ?>
        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div  class="news">
                <h4>Ajouter un commentaires:</h4>
                <div>
                    <label for="author"></label><br />
                    <input type="text" id="author" name="author" placeholder="Auteur"/>
                </div>
                <div>
                    <label for="comment"></label><br />
                    <textarea id="comment" name="comment" placeholder="Commentaire"></textarea>
                </div>
                <div>
                    <input type="submit" value="Ajouter"/>
                </div>
            </div>
        </form>
    </body>
</html>