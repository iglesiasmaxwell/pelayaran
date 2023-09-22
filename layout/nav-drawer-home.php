<!-- Desktop & Tablet navigation bar -->
<nav class="pt-6 px-10 flex items-center justify-between 2xl:justify-around hidden md:flex uk-link-reset select-none">
    <div class="flex items-center gap-8">
        <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <svg class="block lg:hidden !fill-dark hover:!fill-dark-tp transition ease-in duration-150 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
            </svg>
        </button>
        <h1 class="uppercase text-2xl font-montserrat font-semibold text-dark select-none"><?= $brand ?></h1>
    </div>
    <div class="flex font-lexend uppercase text-[12px] text-dark/80 lg:block hidden">
        <a href="index.php#overview" class="mx-5 font-medium hover:!text-dark transition ease-in duration-150"><?= $nav_menu_multi_array[0][0] ?></a>
        <a href="index.php#services" class="mx-5 font-medium hover:!text-dark transition ease-in duration-150"><?= $nav_menu_multi_array[1][0] ?></a>
        <a href="index.php#profiles" class="mx-5 font-medium hover:!text-dark transition ease-in duration-150"><?= $nav_menu_multi_array[2][0] ?></a>
        <a href="layout/features.php?index=0" class="mx-5 font-medium hover:!text-dark transition ease-in duration-150"><?= $nav_menu_multi_array[3][0] ?></a>
    </div>
    <div class="flex items-center grid-cols-2 gap-14">
        <div class="flex items-center">
            <div class="bg-dark p-[6.5px] pl-3 pr-7 rounded-full">
                <span class="uppercase font-space-grotesk text-light flex justify-center items-center font-medium"><i class="fa-<?= $nav_link_icon_style ?> fa-<?= $nav_link_icon_array[1] ?> fa-fw fa-1x text-light mr-2"></i><?= $nav_link_array[0] ?></span>
            </div>
            <a href="<?= $nav_link_array[1] ?>" target="_blank" class="bg-dark hover:bg-dark-tp transition ease-in duration-150 rounded-full w-10.5 h-10.5 flex grid justify-items-center ml-[-20px] outline outline-2 outline-light !fill-light hover:!fill-white">
                <svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 18 17">
                    <path d="M1.11612 14.7583C0.627961 15.2464 0.627961 16.0379 1.11612 16.526C1.60427 17.0142 2.39573 17.0142 2.88388 16.526L1.11612 14.7583ZM17.3921 1.50001C17.3921 0.80966 16.8325 0.250016 16.1421 0.250015L4.89214 0.250016C4.20178 0.250016 3.64214 0.80966 3.64214 1.50002C3.64214 2.19037 4.20178 2.75002 4.89214 2.75002H14.8921V12.75C14.8921 13.4404 15.4518 14 16.1421 14C16.8325 14 17.3921 13.4404 17.3921 12.75L17.3921 1.50001ZM2.88388 16.526L17.026 2.3839L15.2583 0.616132L1.11612 14.7583L2.88388 16.526Z" />
                </svg>
            </a>
        </div>
        <a href="#footer" class="group bg-dark hover:bg-dark-tp transition ease-in duration-150 px-5 py-2 rounded-md">
            <span class="uppercase font-space-grotesk font-medium text-light group-hover:text-white"><?= $nav_btn_array[0] ?></span>
        </a>
    </div>
</nav>

<!-- Mobile navigation bar -->
<nav class="pt-6 px-8 flex items-center justify-between 2xl:justify-around md:hidden">
    <h1 class="uppercase text-2xl font-montserrat font-semibold text-dark select-none"><?= $brand ?></h1>
    <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
        <svg class="!fill-dark hover:!fill-dark-tp transition ease-in duration-150 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>
    </button>
</nav>

<!-- Drawer navigation -->
<div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-light w-70 uk-link-reset" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="font-semibold text-dark uppercase font-montserrat tracking-wide"><?= $brand ?></h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-dark bg-transparent hover:bg-dark/10 rounded-full text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-8 overflow-y-auto">
        <ul class="space-y-2 text-dark">
            <li>
                <span class="px-2 uppercase font-medium font-lexend text-dark-tp">Pages</span>
            </li>
            <li>
                <a href="#overview" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100 ">
                    <i class="fa-<?= $nav_menu_icon_style[0] ?> fa-<?= $nav_menu_array_icon[0][1] ?> fa-fw fa-sm text-dark"></i>
                    <span class="ml-5 font-montserrat tracking font-semibold"><?= $nav_menu_multi_array[0][0] ?></span>
                </a>
            </li>
            <li>
                <a href="layout/features.php?index=0" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100 ">
                    <i class="fa-<?= $nav_menu_icon_style[3] ?> fa-<?= $nav_menu_array_icon[3][1] ?> fa-fw fa-sm text-dark"></i>
                    <span class="ml-5 font-montserrat tracking font-semibold"><?= $nav_menu_multi_array[3][0] ?></span>
                </a>
            </li>
            <ul class="pt-6 space-y-2 text-dark">
                <li>
                    <span class="px-2 uppercase font-medium font-lexend text-dark-tp"><?= $nav_menu_multi_array[0][0] ?></span>
                </li>
                <li>
                    <a href="#services" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100 ">
                        <i class="fa-<?= $nav_menu_icon_style[1] ?> fa-<?= $nav_menu_array_icon[1][1] ?> fa-fw fa-sm text-dark"></i>
                        <span class="ml-5 font-montserrat tracking font-semibold"><?= $nav_menu_multi_array[1][0] ?></span>
                    </a>
                </li>
                <li>
                    <a href="#profiles" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100 ">
                        <i class="fa-<?= $nav_menu_icon_style[2] ?> fa-<?= $nav_menu_array_icon[2][1] ?> fa-fw fa-sm text-dark"></i>
                        <span class="ml-5 font-montserrat tracking font-semibold"><?= $nav_menu_multi_array[2][0] ?></span>
                    </a>
                </li>
            </ul>
            <ul class="pt-6 space-y-2 block md:hidden text-light">
                <li>
                    <span class="px-2 uppercase font-medium font-lexend text-dark-tp">Others</span>
                </li>
                <li>
                    <a href="<?= $nav_link_array[1] ?>" target="_blank" class="flex items-center p-2 text-light hover:!text-dark rounded-md bg-dark hover:bg-light-tp/40 transition duration-100">
                        <i class="fa-<?= $nav_link_icon_style ?> fa-<?= $nav_link_icon_array[1] ?> fa-fw fa-sm"></i>
                        <span class="ml-5 font-space-grotesk tracking font-semibold uppercase"><?= $nav_link_array[0] ?></span>
                    </a>
                </li>
                <li>
                    <a href="#footer" class="flex items-center p-2 text-light hover:!text-dark rounded-md bg-dark hover:bg-light-tp/40 transition duration-100">
                        <i class="fa-<?= $nav_btn_icon_style ?> fa-<?= $nav_btn_icon_array[1] ?> fa-fw fa-sm"></i>
                        <span class="ml-5 font-space-grotesk tracking font-semibold uppercase"><?= $nav_btn_array[0] ?></span>
                    </a>
                </li>
            </ul>
        </ul>
    </div>
</div>