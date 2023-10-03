<!-- Desktop & Tablet navigation bar -->
<nav class="pt-6 px-10 flex items-center justify-between 2xl:justify-around hidden md:flex uk-link-reset">
            <div class="flex items-center gap-8">
                <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                    <svg class="block lg:hidden !fill-dark hover:!fill-dark-tp transition ease-in duration-150 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"/></svg>
                </button>
                <h1 class="uppercase text-2xl font-montserrat font-semibold text-dark select-none">Pelayaran</h1>
            </div>
            <div class="flex font-lexend uppercase text-[12px] text-dark/80 lg:block hidden">
                <a href="../index.php" class="mx-5 font-medium hover:!text-dark transition ease-in duration-150">Home</a>
                <a href="one.php" class="mx-5 font-medium hover:!text-dark transition ease-in duration-150">Features</a>
            </div>
            <div class="flex items-center grid-cols-2 gap-14">
                <div class="flex items-center">
                    <div class="bg-dark p-[6.5px] pl-3 pr-7 rounded-full">
                        <span class="uppercase font-space-grotesk text-light flex justify-center items-center font-medium"><iconify-icon class="mr-2.5 text-light" icon="ri:admin-fill" width="16" height="16"></iconify-icon>Admin</span>
                    </div>
                    <a href="#" class="bg-dark hover:bg-dark-tp transition ease-in duration-150 rounded-full w-10.5 h-10.5 flex grid justify-items-center ml-[-20px] outline outline-2 outline-light !fill-light hover:!fill-white">
                        <svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 18 17">
                            <path d="M1.11612 14.7583C0.627961 15.2464 0.627961 16.0379 1.11612 16.526C1.60427 17.0142 2.39573 17.0142 2.88388 16.526L1.11612 14.7583ZM17.3921 1.50001C17.3921 0.80966 16.8325 0.250016 16.1421 0.250015L4.89214 0.250016C4.20178 0.250016 3.64214 0.80966 3.64214 1.50002C3.64214 2.19037 4.20178 2.75002 4.89214 2.75002H14.8921V12.75C14.8921 13.4404 15.4518 14 16.1421 14C16.8325 14 17.3921 13.4404 17.3921 12.75L17.3921 1.50001ZM2.88388 16.526L17.026 2.3839L15.2583 0.616132L1.11612 14.7583L2.88388 16.526Z"/>
                          </svg>
                    </a>
                </div>
                <a href="#footer" class="group bg-dark hover:bg-dark-tp transition ease-in duration-150 px-5 py-2 rounded-md">
                    <span class="uppercase font-space-grotesk font-medium text-light group-hover:text-white">Contact</span>
                </a>
            </div>
        </nav>
        <!-- Mobile navigation bar -->
        <nav class="pt-6 px-8 flex items-center justify-between 2xl:justify-around md:hidden">
            <h1 class="uppercase text-2xl font-montserrat font-semibold text-dark select-none">Pelayaran</h1>
            <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <svg class="!fill-dark hover:!fill-dark-tp transition ease-in duration-150 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"/></svg>
            </button>
        </nav>

        <!-- Drawer navigation -->
        <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-light w-70 uk-link-reset" tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label" class="font-semibold text-dark uppercase font-montserrat tracking-wide">Pelayaran</h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-dark bg-transparent hover:bg-dark/10 rounded-full text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
              <span class="sr-only">Close menu</span>
           </button>
          <div class="py-8 overflow-y-auto">
              <ul class="space-y-2 text-dark">
                <li>
                    <span class="px-2 uppercase font-medium font-lexend text-dark-tp">Pages</span>
                </li>
                <li>
                    <a href="../index.php" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100">
                        <iconify-icon icon="fluent:home-24-filled" width="25" height="22"></iconify-icon>
                       <span class="ml-5 font-montserrat tracking font-semibold">Home</span>
                    </a>
                 </li>
                <li>
                    <a href="one.php" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100">
                    <iconify-icon icon="mdi:feature-search" width="25" height="22"></iconify-icon>
                       <span class="ml-5 font-montserrat tracking font-semibold">Features</span>
                    </a>
                 </li>
                 <ul class="pt-6 space-y-2 text-dark">
                    <li>
                        <span class="px-2 uppercase font-medium font-lexend text-dark-tp">Features</span>
                    </li>
                    <li>
                        <a href="../feature/one.php" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100">
                            <iconify-icon class="text-dark" width="25" height="25" icon="mdi:person-box"></iconify-icon>
                            <span class="ml-5 font-montserrat tracking font-semibold">Personnel Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="../feature/two.php" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100">
                            <iconify-icon class="text-dark" width="25" height="19.5" icon="icon-park-solid:bookshelf"></iconify-icon>
                            <span class="ml-5 font-montserrat tracking font-semibold">Attendance Records</span>
                        </a>
                    </li>
                    <li>
                        <a href="../feature/three.php" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100">
                            <iconify-icon class="text-dark" width="25" height="19.5" icon="fluent:presence-away-24-filled"></iconify-icon>
                            <span class="ml-5 font-montserrat tracking font-semibold">Work Pattern</span>
                        </a>
                    </li>
                    <li>
                        <a href="../feature/four.php" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100">
                            <iconify-icon class="text-dark" width="25" height="25" icon="healthicons:money-bag"></iconify-icon>
                            <span class="ml-5 font-montserrat tracking font-semibold">Payroll</span>
                        </a>
                    </li>
                    <li>
                        <a href="../feature/five.php" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100">
                            <iconify-icon class="text-dark" width="25" height="25" icon="healthicons:health"></iconify-icon>
                            <span class="ml-5 font-montserrat tracking font-semibold">Sick & Permission</span>
                        </a>
                    </li>
                    <li>
                        <a href="../feature/six.php" class="flex items-center p-2 text-dark rounded-md hover:bg-dark-tp/10 transition duration-100">
                            <iconify-icon class="text-dark" width="25" height="25" icon="bxs:plane-alt"></iconify-icon>
                            <span class="ml-5 font-montserrat tracking font-semibold">Leave Management</span>
                        </a>
                    </li>
                 </ul>
                 <ul class="pt-6 space-y-2 block md:hidden text-light">
                    <li>
                        <span class="px-2 uppercase font-medium font-lexend text-dark-tp">Others</span>
                    </li>
                     <li>
                         <a href="#" class="flex items-center p-2 text-light hover:!text-dark rounded-md bg-dark hover:bg-light-tp/40 transition duration-100 !fill-light hover:!fill-dark">
                             <iconify-icon icon="ri:admin-fill" width="25" height="18"></iconify-icon>
                            <span class="ml-5 font-space-grotesk tracking font-semibold uppercase">Admin</span>
                         </a>
                      </li>
                     <li>
                         <a href="#footer" class="flex items-center p-2 text-light hover:!text-dark rounded-md bg-dark hover:bg-light-tp/40 transition duration-100 !fill-light hover:!fill-dark">
                            <iconify-icon icon="material-symbols:share" width="25" height="20"></iconify-icon>
                            <span class="ml-5 font-space-grotesk tracking font-semibold uppercase">Contact</span>
                         </a>
                      </li>
                 </ul>
              </ul>
           </div>
        </div>