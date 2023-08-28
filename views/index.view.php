<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Hello
            <?= $_SESSION['user']['email'] ?? 'Guest' ?>. This is the HOME view.
        </p>
    </div>
</main>

<?php require('partials/foot.php') ?>

