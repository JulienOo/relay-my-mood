          
<?php ob_start(); ?> 

<article>
            <table class="enTetePublier">
            <tr>
                <td><p>Outil d'édition de publication</p></td>
            </tr>
            </table>
            <table class="corpsPublier">
                <tr>
                    <td><label for="title">Titre de la publication : </label>
    <input type="text" name="title"required></td>
</tr>
    <tr>
    <td>
                <label for="content">Contenu de la publication : </label>
            <input type="text" name="content" required>
            </td>
        </tr>            
        <tr>
            <td>
                <input type="button" value="Publier">
            </td>
        </tr>
    </table>
</article>

<?php $content = ob_get_clean(); ?>
