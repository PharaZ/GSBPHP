<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="styles/styles.css">

      <style>
      body {
        padding-top: 20px;
      }
      </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="cadre">
<div class="container">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="logo">
        <img src="/GSBPHP/vues/logo.jpg"/>
      </div>
    </div>

    <?php if(!empty($_SESSION['group_name'])){ ?>
    <?php if($_SESSION['group_id'] == 2){ ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
      <ul class="nav navbar-nav">
        <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'validFrais') ? '' : ''); ?><a href="index.php?uc=validFrais&action=validFrais" title="Fiche de frais">Valide fiche de frais</a></br>
        <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'gererFrais') ? '' : ''); ?><a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais">Saisie fiche de frais</a></br>
        <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'etatFrais') ? '' : ''); ?><a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a></br>
        <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a title="<?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?>"><strong><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?></strong> (<em><?php echo $_SESSION['group_name']; ?></em>)</a>
      </ul>
    </div><?php } ?>
    <?php if($_SESSION['group_id'] == 1){ ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
      <ul class="nav navbar-nav">
        <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'gererFrais') ? '' : ''); ?><a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais">Saisie fiche de frais</a></br>
        <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'etatFrais') ? '' : ''); ?><a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a></br>
        <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a title="<?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?>"><strong><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?></strong> (<em><?php echo $_SESSION['group_name']; ?></em>)</a>
      </ul>
    </div><?php } ?>
    <?php } ?>
  </div>
</nav>