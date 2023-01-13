<?php require __DIR__ . '/partials/head.php'; ?>
<?php require __DIR__ . '/partials/nav.php'; ?>
<?php require __DIR__ . '/partials/banner.php'; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>This is SignUp page.</p>
        <form method="POST">
            <ul>
                <li class="mt-3"><label for="uid" class="block">Uid:</label><input id="uid" type="text" name="uid" placeholder="User Name"></li>


                <li class="mt-3"><label for="pwd" class="block">Password:</label><input id="pwd" type="password" name="pwd" placeholder="password"></li>
            </ul>

            <?php if (isset($errors['emptyInput'])) : ?>

                    <p class="text-red-500"><?= $errors['emptyInput'] ?></p>

            <?php endif; ?>

            <button type="submit" class="block mt-3 hover:underline">Sign up</button>
        </form>
    </div>
</main>

<?php require __DIR__ . '/partials/foot.php'; ?>