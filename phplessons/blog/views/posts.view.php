<?php require '/var/www/html/phplessons/blog/views/partials/head.php'; ?>
<?php require '/var/www/html/phplessons/blog/views/partials/nav.php'; ?>
<?php require '/var/www/html/phplessons/blog/views/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach($posts as $post) : ?>
        <li><?= $post['Title']?></li>
        <?php endforeach; ?>
    </div>
</main>

<?php require '/var/www/html/phplessons/blog/views/partials/foot.php'; ?>