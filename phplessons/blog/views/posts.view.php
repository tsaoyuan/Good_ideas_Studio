<?php require __DIR__.'/partials/head.php'; ?>
<?php require __DIR__.'/partials/nav.php'; ?>
<?php require __DIR__.'/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach($posts as $post) : ?>
            <li>
                <a class="hover:text-orange-400 hover:underline" href="/posts?id=1"><?= $post['Title']?></a>
            </li>
        

        <?php endforeach; ?>
    </div>
</main>

<?php require __DIR__.'/partials/foot.php'; ?>