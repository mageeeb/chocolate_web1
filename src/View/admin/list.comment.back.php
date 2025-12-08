<?php require_once PATH . "/src/View/admin/inc/header.back.php"; ?>

<div class="container">
    <h1>Gestion des Commentaires</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Contenu</th>
                <th>Utilisateur</th>
                <th>Recette</th>
                <th>Note</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($comments)): ?>
                <?php foreach ($comments as $commentData): ?>
                    <tr>
                        <td><?= $commentData['comment']->getId() ?></td>
                        <td><?= htmlspecialchars(substr($commentData['comment']->getContent(), 0, 50)) ?>...</td>
                        <td><?= htmlspecialchars($commentData['user']->getName()) ?></td>
                        <td><?= isset($commentData['recipe']) ? htmlspecialchars($commentData['recipe']->getTitle()) : 'N/A' ?></td>
                        <td><?= $commentData['comment']->getRating() ?? 'N/A' ?></td>
                        <td><?= $commentData['comment']->getCreatedAt() ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                            <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Aucun commentaire trouvé</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require_once PATH . "/src/View/admin/inc/footer.back.php"; ?>