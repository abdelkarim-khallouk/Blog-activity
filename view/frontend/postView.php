<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
        <link href= './public/css/style.css' rel="stylesheet" />
    </head>

    <body>
        <h1>Mon super blog !</h1>
        <p class="news"><a href='./index.php'><i class="fa fa-arrow-left "></i> Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
            <em>le <?= $post['creation_date_fr'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
        </div>

        <h2 class="news"><i class="fa fa-comments"></i> Commentaires</h2><br />

        <?php
        while ($comment = $comments->fetch())
        {
            ?>
            <p class="news">
                <strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?> (<a href="./form/postForm.php?author=<?= $comment['author'] ?> &amp;comment=<?= $comment['comment'] ?>&amp;id=<?= $comment['id'] ?>&amp;post_id=<?= $post['id'] ?>">modifier <i class="fa fa-edit"></i></a>)
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
                <h4><i class="fa fa-plus"></i> Ajouter un commentaires:</h4>
                <div class="form-group">
                    <label for="author"></label><br />
                    <input type="text" id="author" name="author" placeholder="Auteur"/>
                </div>
                <div class="form-group">
                    <label for="comment"></label><br />
                    <textarea id="comment" name="comment" placeholder="Commentaire" rows="4"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-paper-plane"></i> Envoyer</button>
                </div>
            </div>
        </form>
        <br />
    </body>
</html>