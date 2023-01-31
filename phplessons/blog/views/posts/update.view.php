<?php require __DIR__.'/../partials/head.php'; ?>
<?php require __DIR__.'/../partials/nav.php'; ?>
<?php require __DIR__.'/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>Update a post</h1>

        <form method="POST">
            <label for="title" class="block">Title:</label>
            <textarea id="title" type="text" name="title" placeholder="Your Title"><?= $result['Title'] ?? "" ?></textarea>

            <?php if(isset($errors['title'])) : ?>
                <p class="text-red-500"><?= $errors['title'] ?></p>
            <?php endif; ?>

            <button type="submit" name="update" class="block mt-5 hover:underline">Update post</button>
        </form>
        <?= dumpDie($result) ?>
    </div>
</main>

<?php require __DIR__.'/../partials/foot.php'; ?>