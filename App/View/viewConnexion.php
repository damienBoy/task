<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/main.css">
    <title>Connexion</title>
</head>
<body>
    <?php include "App/View/components/navbar.php"; ?>
    <form action="" method="post">
        <input type="email" name="email" placeholder="saisir le mail">
        <input type="password" name="password" placeholder="saisir le mot de passe">
        <input type="submit" value="connexion" name="submit">
    </form>
    <p><?= $message ?></p>
</body>
</html>
