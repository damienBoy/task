<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/main.css">
    <title>Inscription</title>
</head>
<body>
    <?php include "App/View/components/navbar.php"; ?>
    <form action="" method="post">
        <input type="text" name="firstname" placeholder="saisir le prénom">
        <input type="text" name="lastname" placeholder="saisir le nom">
        <input type="email" name="email" placeholder="saisir le mail">
        <input type="password" name="password" placeholder="saisir le password">
        <input type="submit" value="inscription" name="submit">
    </form>
    <p><?= $message ?></p>
</body>
</html>
