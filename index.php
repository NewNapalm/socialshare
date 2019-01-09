<?php
$url = "http://projet.team-spectre.fr/socialshare/index.php";
$type = "article";
$title = "Un titre concernant une actualité";
$description = "Les quinze ou vingt premiers mots de l'actualité puis trois petits points ... ";
$image = "http://projet.team-spectre.fr/socialshare/img1.jpg";

$site = "@XboxGamerNet";
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Facebook -->
    <meta property="og:url" content="<?php  echo $url; ?>" />
    <meta property="og:type" content="<?php  echo $type; ?>" />
    <meta property="og:title" content="<?php  echo $title; ?>" />
    <meta property="og:description" content="<?php  echo $description; ?>" />
    <meta property="og:image" content="<?php  echo $image; ?>" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?php echo $site; ?>">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:creator" content="XG">
    <meta name="twitter:image:src" content="<?php  echo $image; ?>">
    <title>Une page</title>
  </head>
  <body>

    <a rel="nofollow" title="Partager sur Facebook" href="http://www.facebook.com/sharer.php?u=http://projet.team-spectre.fr/socialshare/index.php" target="_blank">
      <img src="icone-facebook.gif">
    </a>
    <a rel="nofollow" title="Partager sur Twitter" href="https://twitter.com/intent/tweet?url=http://projet.team-spectre.fr/socialshare/index.php" target="_blank">
      <img src="icone-twitter.gif">
    </a>
  </body>
</html>
