<?php require('partials/head.php'); ?>

<h1>All Users</h1>

<!-- <form method="POST" action="/names">
    <input name="name" />
    <button type="submit">Submit</button>
</form> -->

<ul>
    <?php foreach($users as $user): ?>
    <li><?= $user->name ?></li>
    <?php endforeach; ?>
</ul>

<?php require('partials/footer.php'); ?>