<div id="content">
    <a href="?page=velos" class="back-button">Retour</a>
    <?php if ($veloDetails): ?>
        <div class="velo-details-card">
            <div class="velo-details-image">
                <img src="images/<?php echo $veloDetails['image']; ?>" alt="<?php echo $veloDetails['nom']; ?>">
            </div>
            <div class="velo-details-info">
                <h2>
                    <?php echo $veloDetails['nom']; ?>
                </h2>
                <p>
                    <?php echo $veloDetails['description']; ?>
                </p>
                <p>Prix :
                    <?php echo $veloDetails['prix']; ?> €
                </p>
                <a href="?page=commander">Commander</a>
            </div>
        </div>

        <h2 class="otherbike">Autres Vélos</h2>

        <div class="velo-cards">
            <?php
            foreach ($otherVelos as $otherVelo):
                ?>
                <div class="velo-card">
                    <img src="images/<?php echo $otherVelo['image']; ?>" alt="<?php echo $otherVelo['nom']; ?>">
                    <h3>
                        <?php echo $otherVelo['nom']; ?>
                    </h3>
                    <p>Prix :
                        <?php echo $otherVelo['prix']; ?> €
                    </p>
                    <a href="?page=produit&velo=<?php echo $otherVelo['id']; ?>">Plus d'infos</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Vélo non trouvé.</p>
    <?php endif; ?>
</div>