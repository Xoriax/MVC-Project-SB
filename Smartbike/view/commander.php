<div id="content">
    <div class="commande-card">
        <h2>Commander</h2>
        <form action="?page=process_commande" method="post">
            <label for="velo">Sélectionnez un vélo :</label>
            <select name="velo" id="velo">
                <?php foreach ($allVelos as $velo): ?>
                    <option value="<?php echo $velo['id']; ?>">
                        <?php echo $velo['nom']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message :</label>
            <textarea name="message" id="message" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
            <a href="?page=velos" class="cancel-button">Annuler</a>
        </form>
    </div>
</div>