<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href='./../public/css/style.css' rel="stylesheet" />
</head>

<body>

<form action="./../index.php?action=modifyComment&amp;id=<?= $_GET['id'] ?>&amp;post_id=<?= $_GET['post_id'] ?>" method="post">
    <div  class="news">
        <h4>Modifier le commentaire</h4>
        <div>
            <label for="author"></label><br />
            <input type="text" id="author" name="author" placeholder="Auteur" value="<?= $_GET['author'] ?>" disabled/>
        </div>
        <div>
            <label for="comment"></label><br />
            <textarea id="comment" name="comment" placeholder="Commentaire"><?= $_GET['comment'] ?></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyer"/>
        </div>
    </div>
</form>

</body>