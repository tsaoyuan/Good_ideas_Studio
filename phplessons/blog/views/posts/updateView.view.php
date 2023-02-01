<?php require __DIR__ . '/../partials/head.php'; ?>
<?php require __DIR__ . '/../partials/nav.php'; ?>
<?php require __DIR__ . '/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>View Update Post</h1>

        <form action="/post/update" method="POST">
        <!-- <form method="POST"> -->
            <label for="title" class="block">Title:</label>
            <textarea id="title" type="text" name="title" placeholder="Your Title"><?= htmlspecialchars($result['Title']) ?? "" ?></textarea>

            <!-- <label for="postId" class="block">Post Id:</label> -->
            <input type="hidden" id="postId" name="postId" value="<?= $result["Id"]?>">
            <button type="submit" name="update" class="block mt-5 hover:underline">Save</button>
            <!-- <?= dumpDie($_POST) ?> -->
            <!-- <?= dumpDie($_SERVER) ?> -->
        </form>
    </div>
</main>

<?php require __DIR__ . '/../partials/foot.php'; ?>