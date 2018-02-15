<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href='./../public/css/style.css' rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
</head>

<body>

    <p class=""><a href='./../'><i class="fa fa-arrow-left "></i> Retour à la liste des billets</a></p>
    <h4 class="news"><i class="fa fa-edit"></i> Modifier le commentaire</h4><br>

    <form action="./../index.php?action=modifyComment&amp;id=<?= $_GET['id'] ?>&amp;post_id=<?= $_GET['post_id'] ?>" method="post">
        <div  class="news">

            <div class="form-group">
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" placeholder="Auteur" value="<?= $_GET['author'] ?>" disabled/>
            </div>
            <div class="form-group">
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment" placeholder="Commentaire" rows="4"><?= $_GET['comment'] ?></textarea>
            </div>
            <div>
                <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-paper-plane"></i> Envoyer</button>
            </div>
        </div>
    </form>

</body>