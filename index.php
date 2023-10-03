<?php
    include_once('layout/header.php');
?>
</head>
<body class="overflow-x-hidden" id="overview">

    <header class="bg-light h-max pb-8 lg:pb-32">
        
        <?php
            include_once('layout/nav-drawer-home.php');
        ?>

        <section class="mt-28">
            <div class="flex justify-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center mx-5 lg:mx-20 gap-10 lg:gap-20">
                    <div class="2xl:flex 2xl:justify-end">
                        <div class="bg-gradient-to-b from-white to-whiteblue px-2.5 py-2.5 pb-8 max-w-fit rounded shadow-lg select-none">
                            <img class="h-250px w-800px brightness-75" src="Image/shipyard.jpg" alt="Galangan Kapal">
                        </div>
                    </div>
                    <div class="mx-auto">
                        <h1 class="uppercase font-merriweather text-4xl md:text-5xl lg:text-6xl 2xl:text-7xl text-dark font-light leading-snug lg:leading-normal 2xl:leading-normal inline-block text-center lg:text-left xl:mr-52"><span class="font-extrabold">Ship</span>your worries away</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-20 mx-10 lg:mx-52 2xl:mx-96">
            <p class="text-sm lg:text-base 2xl:text-lg font-space-grotesk hypens-manual text-darker">Lorem ipsum dolor sit amet, conse&shy;ctetur adipiscing elit. Aliquam ac lectus dui. Cras auctor ipsum sed accumsan com&shy;modo. Fusce solli&shy;citudin accumsan aliquam. Quisque feugiat laoreet nunc vitae gravida. Nullam magna felis, tristi&shy;que id scelerisque at, malesuada et metus. Donec blandit nibh eget libero vehi&shy;cula lacinia. Ut porta felis non tellus vulputate, id tincidunt enim tristique. Pellentesque blandit magna diam, at digni&shy;ssim ex rutrum ornare.</p>
            <div class="flex justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 25 40" fill="none">
                    <path d="M14.6733 28.3667L13.3333 28.6333V33.3333H15C19.6383 33.3333 23.1767 32.0483 25.515 29.5133C28.66 26.1 28.3433 21.7167 28.3333 21.6667V8.33332C28.3333 7.8913 28.1577 7.46737 27.8452 7.15481C27.5326 6.84225 27.1087 6.66666 26.6667 6.66666H15C13.1617 6.66666 11.6667 8.16166 11.6667 9.99999V21.6667C11.6667 22.1087 11.8423 22.5326 12.1548 22.8452C12.4674 23.1577 12.8913 23.3333 13.3333 23.3333H20.13C20.0948 24.1573 19.8486 24.9584 19.415 25.66C18.57 26.995 16.975 27.905 14.6733 28.3667Z" fill="#253235"/>
                </svg>
                <svg class="ml-[-5px]" xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 25 40" fill="none">
                    <path d="M14.6733 28.3667L13.3333 28.6333V33.3333H15C19.6383 33.3333 23.1767 32.0483 25.515 29.5133C28.66 26.1 28.3433 21.7167 28.3333 21.6667V8.33332C28.3333 7.8913 28.1577 7.46737 27.8452 7.15481C27.5326 6.84225 27.1087 6.66666 26.6667 6.66666H15C13.1617 6.66666 11.6667 8.16166 11.6667 9.99999V21.6667C11.6667 22.1087 11.8423 22.5326 12.1548 22.8452C12.4674 23.1577 12.8913 23.3333 13.3333 23.3333H20.13C20.0948 24.1573 19.8486 24.9584 19.415 25.66C18.57 26.995 16.975 27.905 14.6733 28.3667Z" fill="#253235"/>
                </svg>
            </div>
        </section>
    </header>

    <section id="services">
        <!-- Mobile, Tablet and 4K Desktop service section -->
        <section class="bg-dark text-light pb-10 block lg:hidden 2xl:block">
            <h1 class="uppercase pt-8 pb-10 text-center font-lexend font-medium text-2xl tracking-widest text-light">Services</h1>
            <div class="flex items-center gap-10">
                <div class="grid grid-cols-1 2xl:grid-cols-2 4xl:grid-cols-4 justify-center gap-4 2xl:gap-10 4xl:gap-8 mx-4 sm:mx-12 md:mx-24 2xl:mx-auto select-none">
                    <div class="group/gallery px-2.5 py-2.5 pb-2 sm:pb-8 bg-gradient-to-b from-white to-whiteblue w-1000px h-full md:h-200px sm:h-250px md:h-300px max-w-full 2xl:max-w-xl rounded shadow-lg">
                        <img class="max-h-full w-full brightness-75 2xl:group-hover/gallery:brightness-100 transition" src="Image/tugboat.jpg" alt="Tugboat">
                        <div class="group justify-center flex items-center">
                            <span class="text-dark group-hover:text-dark-tp group-active:text-dark-tp font-space-grotesk mt-1.5 2xl:mt-0.5 text-sm 2xl:text-lg 2xl:invisible 2xl:group-hover/gallery:visible uppercase">Tugboat</span>
                        </div>
                    </div>
                    <div class="group/gallery px-2.5 py-2.5 pb-2 sm:pb-8 bg-gradient-to-b from-white to-whiteblue w-1000px h-full md:h-200px sm:h-250px md:h-300px max-w-full 2xl:max-w-xl rounded shadow-lg">
                        <img class="max-h-full w-full brightness-75 2xl:group-hover/gallery:brightness-100 transition" src="Image/barge.png" alt="Barge">
                        <div class="group justify-center flex items-center">
                            <span class="text-dark group-hover:text-dark-tp group-active:text-dark-tp font-space-grotesk mt-1.5 2xl:mt-0.5 text-sm 2xl:text-lg 2xl:invisible 2xl:group-hover/gallery:visible uppercase">Tongkang</span>
                        </div>
                    </div>
                    <div class="group/gallery px-2.5 py-2.5 pb-2 sm:pb-8 bg-gradient-to-b from-white to-whiteblue w-1000px h-full md:h-200px sm:h-250px md:h-300px max-w-full 2xl:max-w-xl rounded shadow-lg">
                        <img class="max-h-full w-full brightness-75 2xl:group-hover/gallery:brightness-100 transition" src="Image/repair.jpg" alt="Repair">
                        <div class="group justify-center flex items-center">
                            <span class="text-dark group-hover:text-dark-tp group-active:text-dark-tp font-space-grotesk mt-1.5 2xl:mt-0.5 text-sm 2xl:text-lg 2xl:invisible 2xl:group-hover/gallery:visible uppercase">Perbaikan</span>
                        </div>
                    </div>
                    <div class="group/gallery px-2.5 py-2.5 pb-2 sm:pb-8 bg-gradient-to-b from-white to-whiteblue w-1000px h-full md:h-200px sm:h-250px md:h-300px max-w-full 2xl:max-w-xl rounded shadow-lg">
                        <img class="max-h-full w-full brightness-75 2xl:group-hover/gallery:brightness-100 transition" src="Image/production.jpg" alt="Production">
                        <div class="group justify-center flex items-center">
                            <span class="text-dark group-hover:text-dark-tp group-active:text-dark-tp font-space-grotesk mt-1.5 2xl:mt-0.5 text-sm 2xl:text-lg 2xl:invisible 2xl:group-hover/gallery:visible uppercase">Pembuatan</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Desktop service section -->
        <section class="bg-dark text-light pb-10 hidden lg:block 2xl:hidden">
            <h1 class="uppercase pt-8 pb-10 text-center font-lexend font-medium text-2xl tracking-widest text-light">Services</h1>
            <div class="relative flex items-center gap-10 py-24">
                <div id="carousel" data-carousel="slide">
                    <button class="bg-light hover:bg-light-tp py-14 rounded-r block !fill-dark/60 hover:!fill-dark-tp transition ease-in duration-400" data-carousel-next>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="55" viewBox="0 0 50 70">
                            <g clip-path="url(#clip0_48_157)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M32.7229 32.9379C33.1135 33.4848 33.3329 34.2266 33.3329 35C33.3329 35.7734 33.1135 36.5151 32.7229 37.0621L20.9375 53.5616C20.7453 53.8402 20.5154 54.0624 20.2613 54.2153C20.0071 54.3681 19.7337 54.4486 19.4571 54.452C19.1805 54.4553 18.9061 54.3815 18.6501 54.2349C18.3941 54.0882 18.1615 53.8716 17.9658 53.5978C17.7702 53.3239 17.6155 52.9983 17.5108 52.6398C17.406 52.2814 17.3533 51.8973 17.3557 51.5101C17.3581 51.1228 17.4156 50.7401 17.5248 50.3842C17.634 50.0284 17.7927 49.7065 17.9917 49.4375L28.3042 35L17.9917 20.5625C17.6122 20.0124 17.4022 19.2756 17.4069 18.5109C17.4117 17.7461 17.6308 17.0146 18.017 16.4738C18.4033 15.9331 18.9258 15.6263 19.4721 15.6197C20.0183 15.613 20.5446 15.907 20.9375 16.4383L32.7229 32.9379Z"/>
                            </g>
                        </svg>
                    </button>
                        <div class="absolute left-1/2 xl:left-[45%] bottom-full select-none">
                            <div class="group/gallery px-2.5 py-2.5 pb-8 bg-gradient-to-b from-white to-whiteblue w-1000px h-350px max-w-md xl:max-w-lg shadow-lg hidden duration-700 ease-in-out" data-carousel-item>
                                <img class="w-1000px h-full brightness-75 group-hover/gallery:brightness-100 transition" src="Image/tugboat.jpg" alt="Tugboat">
                                <div class="group/desc justify-center flex items-center invisible group-hover/gallery:visible">
                                    <p class="text-dark group-hover/desc:text-dark-tp font-space-grotesk mt-1 transition uppercase">Tugboat</p>
                                </div>
                            </div>
                            <div class="group/gallery px-2.5 py-2.5 pb-8 bg-gradient-to-b from-white to-whiteblue w-1000px h-350px max-w-md xl:max-w-lg shadow-lg hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img class="w-1000px h-full brightness-75 group-hover/gallery:brightness-100 transition" src="Image/barge.png" alt="Barge">
                                <div class="group/desc justify-center flex items-center invisible group-hover/gallery:visible">
                                    <p class="text-dark group-hover/desc:text-dark-tp font-space-grotesk mt-1 transition uppercase">Tongkang</p>
                                </div>
                            </div>
                            <div class="group/gallery px-2.5 py-2.5 pb-8 bg-gradient-to-b from-white to-whiteblue w-1000px h-350px max-w-md xl:max-w-lg shadow-lg hidden duration-700 ease-in-out" data-carousel-item>
                                <img class="w-1000px h-full brightness-75 group-hover/gallery:brightness-100 transition" src="Image/repair.jpg" alt="Repair">
                                <div class="group/desc justify-center flex items-center invisible group-hover/gallery:visible">
                                    <p class="text-dark group-hover/desc:text-dark-tp font-space-grotesk mt-1 transition uppercase">Perbaikan</p>
                                </div>
                            </div>
                            <div class="group/gallery px-2.5 py-2.5 pb-8 bg-gradient-to-b from-white to-whiteblue w-1000px h-350px max-w-md xl:max-w-lg shadow-lg hidden duration-700 ease-in-out" data-carousel-item>
                                <img class="w-1000px h-full brightness-75 group-hover/gallery:brightness-100 transition" src="Image/production.jpg" alt="Production">
                                <div class="group/desc justify-center flex items-center invisible group-hover/gallery:visible">
                                    <p class="text-dark group-hover/desc:text-dark-tp font-space-grotesk mt-1 transition uppercase">Pembuatan</p>
                                    <!-- <svg class="fill-dark group-hover/desc:fill-dark-tp group-hover/desc:translate-x-1 transition duration-400 ease-out mt-1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 50 70">
                                        <g clip-path="url(#clip0_48_157)">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M32.7229 32.9379C33.1135 33.4848 33.3329 34.2266 33.3329 35C33.3329 35.7734 33.1135 36.5151 32.7229 37.0621L20.9375 53.5616C20.7453 53.8402 20.5154 54.0624 20.2613 54.2153C20.0071 54.3681 19.7337 54.4486 19.4571 54.452C19.1805 54.4553 18.9061 54.3815 18.6501 54.2349C18.3941 54.0882 18.1615 53.8716 17.9658 53.5978C17.7702 53.3239 17.6155 52.9983 17.5108 52.6398C17.406 52.2814 17.3533 51.8973 17.3557 51.5101C17.3581 51.1228 17.4156 50.7401 17.5248 50.3842C17.634 50.0284 17.7927 49.7065 17.9917 49.4375L28.3042 35L17.9917 20.5625C17.6122 20.0124 17.4022 19.2756 17.4069 18.5109C17.4117 17.7461 17.6308 17.0146 18.017 16.4738C18.4033 15.9331 18.9258 15.6263 19.4721 15.6197C20.0183 15.613 20.5446 15.907 20.9375 16.4383L32.7229 32.9379Z"/>
                                        </g>
                                    </svg> -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </section>

    <section class="bg-light text-dark pb-10" id="profiles">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 lg:mx-20 pt-8">
            <div class="text-sm lg:text-base">
                <h1 class="uppercase text-center font-lexend font-medium text-2xl tracking-widest mb-10">About Us</h1>
                <p class="mx-8 lg:mx-12 2xl:mx-40 font-space-grotesk text-darker hypens-manual">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis sodales ex. Maecenas erat neque, aliquet quis nibh at, blandit condimentum sem. Donec vitae tincidunt diam. Morbi viverra ultrices tortor ac mattis. Ut tincidunt blandit lacinia. Quisque pretium facilisis ex, at luctus nunc mollis non. Suspendisse sem leo, finibus eu.</p>
            </div>
            <div>
                <h1 class="uppercase text-center font-lexend font-medium text-2xl tracking-widest mb-10">Achievement</h1>
                <ul class="mx-10 lg:mx-12 2xl:mx-40 list-disc text-sm lg:text-base">
                    <li class=" font-space-grotesk text-darker hypens-manual">Vivamus mi lorem, volutpat quis vehicula eget, finibus ac nulla.</li>
                    <li class="font-space-grotesk text-darker hypens-manual">Curabitur malesuada porttitor porttitor. Phasellus ut scelerisque quam, nec tincidunt.</li>
                    <li class="font-space-grotesk text-darker hypens-manual">Mauris eget felis ornare, eleifend ligula in, sagittis turpis. Duis.</li>
                    <li class="font-space-grotesk text-darker hypens-manual">Vivamus semper ultrices mi ut iaculis. Etiam ut sapien sit.</li>
                </ul>
            </div>
        </div>
    </section>

    <?php
        include_once('layout/footer.php');
    ?>
</body>
</html>