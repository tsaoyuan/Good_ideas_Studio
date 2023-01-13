<?php require __DIR__ . '/partials/head.php'; ?>
<?php require __DIR__ . '/partials/nav.php'; ?>
<?php require __DIR__ . '/partials/banner.php'; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>This is SignUp page.</p>
        <form mathod="POST">
            <ul>
                
                <li class="mt-3"><label for="uid" class="block">Uid:</label><input id="uid" type="text" name="uid" placeholder="User Name"><?= $_POST['uid'] ?? ""?></li>

                
                <li class="mt-3"><label for="pwd" class="block">Password:</label><input id="pwd" type="password" name="pwd" placeholder="password"><?= $_POST['pwd'] ?? ""?></li>
            </ul>
            <button type="submit" class="block mt-3 hover:underline">Sign up</button>
        </form>
    </div>
</main>

<?php require __DIR__ . '/partials/foot.php'; ?>