<aside class="hidden lg:block w-70 pl-6 bg-gradient-to-b from-light/30 to-light-tp/30 outline-2 select-none">
    <ul class="h-screen py-8 pr-4 overflow-y-auto space-y-6 justify-start uk-link-reset">
        <?php
        for ($i = 0; $i < count($features_multi_array); $i++) {
        ?>
            <li>
                <a href="features.php?index=<?= $i ?>" <?php if ($activePage == $i) { ?> class="flex items-center gap-4 bg-light/60 pl-2 pr-6 py-2 rounded transition" <?php } ?> class="flex items-center gap-4 hover:bg-light/60 active:bg-light/60 pl-2 pr-6 py-2 rounded transition">
                    <i class="fa-<?= $features_icon_style[$i] ?> fa-<?= $features_array_icon[$i][1] ?> fa-fw fa-lg text-dark"></i>
                    <span class="font-lexend text-dark"><?= $features_multi_array[$i][0] ?></span>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
</aside>