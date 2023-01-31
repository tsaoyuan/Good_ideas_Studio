<?php require __DIR__.'/../partials/head.php'; ?>
<?php require __DIR__.'/../partials/nav.php'; ?>
<?php require __DIR__.'/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h2>

            <?= htmlspecialchars($post['Title']) ?>

        </h2>


        <span class="mt-10 inline-block">
            <a href="/posts" class="text-red-300">Go back Posts</a>
        </span>

        <form action="/post/update" method="POST">
            <input name="postId" value="<?= $_GET["id"]?>">
            <input class="text-blue-500 hover:underline" type="submit" value="Edit">
        </form>
    </div>
</main>

<?php require __DIR__.'/../partials/foot.php'; ?>