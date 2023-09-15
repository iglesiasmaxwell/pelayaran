<?php
    include_once('../layout/header.php');
?>
<?php
    $activePage = "one";
    $phonemockupimage = "https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-1-light.png";
    $tabletmockupimage = "https://flowbite.s3.amazonaws.com/docs/device-mockups/tablet-mockup-image.png";
    $laptopmockupimage = "../image/mockup-img-dashboard.jpg";
?>
</head>
    <body class="overflow-x-hidden bg-light/30" id="overview">

        <header class="bg-light h-max pb-6 lg:pb-6">
            <?php
                include_once('../layout/nav-drawer-feature.php');
            ?>
        </header>

        <section class="lg:mr-10 flex lg:gap-10">
            <?php
                include_once('../layout/sidebar.php');
            ?>
            <div class="h-full w-9/12 py-14 space-y-12 mx-auto">
                <h1 class="font-lexend font-bold text-2xl text-center uppercase">Personnel Data Management</h1>
                    <?php
                        include_once('../layout/mockup.php');
                    ?>
                <p class="font-lexend font-light 2xl:text-center">Easily manage all of yours personnel data within one application.</p>
            </div>
        </section>
        
        <?php
            include_once('../layout/footer.php');
        ?>
</body>