<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proba feladat</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<header>
    <div class="title">
        <h2>Próba Feladat - Szabó Roland</h2><br>
    </div>
    <nav>
        <a href="/Szabo_Roland_Feladat/" class="nav-button">Home</a>
        <a href="/Szabo_Roland_Feladat/views/users" class="nav-button">Users</a>
        <a href="/Szabo_Roland_Feladat/views/advertisements" class="nav-button">Advertisements</a>
    </nav>
</header>
<main>
    <section>
        <h2>Advertisements</h2>
        <table class="styled-table">
            <thead>
            <tr>
                <th>User</th>
                <th>ID</th>
                <th>Title</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($advertisements as $advertisement): ?>
                <tr>
                    <td><?php echo htmlspecialchars($advertisement->getUserName()); ?></td>
                    <td><?php echo htmlspecialchars($advertisement->getId()); ?>
                    <td><?php echo htmlspecialchars($advertisement->getTitle()); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>
<footer>
    <p>&copy; Szabó Roland - Próba feladata RabIT számára.</p>
</footer>
</body>
</html>