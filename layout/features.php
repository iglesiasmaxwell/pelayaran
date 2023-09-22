<?php
include_once('header.php');
?>
<?php
$activePage = $_GET['index'];
$phonemockupimage = $features_multi_array[$_GET['index']][5];
$tabletmockupimage = $features_multi_array[$_GET['index']][4];
$laptopmockupimage = $features_multi_array[$_GET['index']][3];
?>

<body class="overflow-x-hidden bg-light/30" id="overview">
    <header class="bg-light h-max pb-6 lg:pb-6">
        <?php
        include_once('nav-drawer-feature.php');
        ?>
    </header>

    <section class="lg:mr-10 flex lg:gap-10">
        <?php
        include_once('sidebar.php');
        ?>
        <div class="h-full w-9/12 py-14 space-y-12 mx-auto">
            <h1 class="font-lexend font-bold text-2xl text-center uppercase"><?= $features_multi_array[$_GET['index']][1] ?></h1>
            <?php
            include_once('mockup.php');
            ?>
            <p class="font-lexend text-dark 2xl:text-center"><?= $features_multi_array[$_GET['index']][2] ?></p>
        </div>
    </section>

    <?php
    include_once('footer.php');
    ?>
</body>