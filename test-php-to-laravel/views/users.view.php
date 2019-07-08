<?php require('partials/head.php'); ?>

<h1>All Users</h1>

<ul>
    <?php foreach($users as $user): ?>
    <li><?= $user->name ?></li>
    <?php endforeach; ?>
</ul>

<form method="POST" action="/users">
    <input name="name" />
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>