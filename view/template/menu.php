<?php 

$url = explode("/", rawurldecode($_SERVER['REQUEST_URI']));



ob_start(); 
?>

    <section class="menu">

    <nav>
        <ul>
            <li class="ecartHautMenu <?= ($url[1] == 'accueil') ? 'pageActuelleMenu':'lien'; ?>"><a /href="accueil">Accueil</a></li>
            <?php
if ($_SESSION["log"] == true)
{
            ?>
            <li class="<?= ($url[1] == 'mon-profil') ? 'pageActuelleMenu':'lien'; ?>"><a href="/mon-profil">Mon profil</a></li>
            <li class="<?= ($url[1] == 'mes-publications') ? 'pageActuelleMenu':'lien'; ?>"><a href="/mes-publications">Mes publications</a></li>
            <li class="<?= ($url[1] == 'mes-enregistrements') ? 'pageActuelleMenu':'lien'; ?>"><a href="/mes-enregistrements">Mes enregistrements</a></li>
            <li class=" <?= ($url[1] == 'publier') ? 'pageActuelleMenu':'lien'; ?>"><a /href="publier">Publier</a></li>
<?php
}
else
{ ?>
            <li class="<?= ($url[1] == 'connexion') ? 'pageActuelleMenu':'lien'; ?>"><a href="/connexion">Connexion</a></li>
            <li class=" <?= ($url[1] == 'inscription') ? 'pageActuelleMenu':'lien'; ?>"><a /href="inscription">Inscription</a></li>
<?php } ?>
        </ul>
        <ul class="rangeeLogo">
            <li class="ecartLogo trierPar">Trier par :</li>
            <li class="ecartLogo"><img src="public/images/heureux.png" title="logo heureux" class="logo"/></li>
            <li class="ecartLogo"><img src="public/images/calme.png" title="logo calme" class="logo"/></li>
            <li class="ecartLogo"><img src="public/images/triste.png" title="logo triste" class="logo"/></li>
            <li class="ecartLogo"><img src="public/images/fatigué.png" title="logo calme" class="logo"/></li>
            <li class="ecartLogo"><img src="public/images/logoHorloge.png" title="logo horloge" class="logo"/></li>
        </ul>
    </nav>
    </section>

<?php $menu = ob_get_clean(); ?>


