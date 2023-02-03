<?php require __DIR__ . '/../partials/head.php'; ?>
<?php require __DIR__ . '/../partials/nav.php'; ?>
<?php require __DIR__ . '/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- 
            <li>
                <?php if ($user["Uid"] === $_SESSION["uid"]) : ?>
                    <a class="underline hover:text-orange-400" href="/post?id=<?= $user['Id'] ?>">
                        <?php endif ?> 
                        
                    </a> 
                </li>
         -->
        <table class="table-auto">
            <tr>
                <thead>
                    <!-- <th class="w-2/10">Uid</th>
                    <th class="w-4/10">Email</th>
                    <th class="w-1/10">Role</th>
                    <th class="w-3/10">Function</th> -->

                    <th>Uid</th>
                    <th></th>
                    <th>Email</th>
                    <th></th>
                    <th>Role</th>
                    <th></th>
                    <th>Function</th>
                    <th></th>
                </thead>
            </tr>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td>
                            <!-- <td class="w-2/10"> -->
                            <?= htmlspecialchars($user['Uid']) ?>
                        </td>
                        <td></td>

                        <!-- <td class="w-4/10"> -->
                        <td>
                            <?= htmlspecialchars($user['email']) ?>
                        </td>
                        <td></td>
                        <!-- <td class="w-1/10"> -->
                        <td>
                            <?= htmlspecialchars($user['Role']) ?>
                        </td>
                        <td></td>

                        <!-- <td class="w-3/10"> -->
                        <td>
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

        <!--
        <section class="btn">
            <span class="mt-5 p-4 inline-block hover:underline">
                <a href="/" class="text-red-500">Go back Home</a>
            </span>

            <span class="mt-5 p-5 inline-block hover:underline">
                <a href="/posts/create" class="text-blue-700">Create Post</a>
            </span>
        </section>
    -->
    </div>
</main>
<?php require __DIR__ . '/../partials/foot.php'; ?>