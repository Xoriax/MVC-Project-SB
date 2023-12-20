<div id="hero-section">
    <?php if ($latestVelo): ?>
        <div class="hero-image" style="background-image: url('images/<?php echo $latestVelo['image']; ?>');">
            <div class="hero-overlay">
                <div class="hero-content">
                    <h2>
                        <?php echo $latestVelo['nom']; ?>
                    </h2>
                    <p>
                        <?php echo $latestVelo['description']; ?>
                    </p>
                    <p>Prix :
                        <?php echo $latestVelo['prix']; ?> €
                    </p>
                    <a href="?page=produit&velo=<?php echo $latestVelo['id']; ?>">Plus d'infos</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>Aucun vélo disponible pour le moment.</p>
    <?php endif; ?>
</div>