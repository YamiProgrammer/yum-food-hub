<!-- NavBar -->
<div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
        <h5 hidden class="text-2xl text-dynamic-black font-medium font-poppins lg:block">Dashboard</h5>

                <ul class="ml-auto flex items-center">
                    <!-- Search Bar -->
                <div class="hidden md:block mr-6">
                    <div class="relative flex items-center text-gray-400 focus-within:text-dynamic-black ">
                        <span class="absolute left-4 h-6 flex items-center pr-3 border-r border-gray-300">
                            <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 35.997 36.004">
                                <path id="Icon_awesome-search" data-name="search" d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"></path>
                            </svg>
                        </span>
                        <input type="search" name="leadingIcon" id="leadingIcon" placeholder="Search here" class=" w-48 pl-14 py-2.5 rounded-xl text-drop font-poppins text-gray-600 outline-none border border-gray-300 focus:border-cyan-300 transition">
                    </div>
                </div>
                <!-- /Search Bar -->

                <!-- Notification -->
                    <li class="dropdown">
                        <button type="button" class="dropdown-toggle text-dynamic-black mr-4 w-8 h-8 rounded flex items-center justify-center  hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                        </button>
                        <div class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">
                            <div class="flex items-center px-4 pt-4 border-b border-b-gray-100 notification-tab">
                                <button type="button" data-tab="notification" data-tab-page="notifications" class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1 active">Notifications</button>
                                <button type="button" data-tab="notification" data-tab-page="messages" class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1">Messages</button>
                            </div>
                            <!-- NOTIFICATION CONTENT -->
                            <div class="my-2">
                                <ul class="max-h-64 overflow-y-auto" data-tab-for="notification" data-page="notifications">
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                                <div class="text-[11px] text-gray-400">from a user</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                                <div class="text-[11px] text-gray-400">from a user</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                                <div class="text-[11px] text-gray-400">from a user</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                                <div class="text-[11px] text-gray-400">from a user</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                                <div class="text-[11px] text-gray-400">from a user</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="max-h-64 overflow-y-auto hidden" data-tab-for="notification" data-page="messages">
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                                <div class="text-[11px] text-gray-400">Hello there!</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                                <div class="text-[11px] text-gray-400">Hello there!</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                                <div class="text-[11px] text-gray-400">Hello there!</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                                <div class="text-[11px] text-gray-400">Hello there!</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                            <div class="ml-2">
                                                <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                                <div class="text-[11px] text-gray-400">Hello there!</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- /NOTIFICATION -->
                    
                    <!-- User Profile Dropdown -->
                    <li class="dropdown ml-3">
                        <button type="button" class="dropdown-toggle flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 relative">
                                <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                    <img class="w-8 h-8 rounded-full" src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg" alt=""/>
                                    <div class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping"></div>
                                    <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full"></div>
                                </div>
                            </div>
                            <div class="p-2 md:block text-left">
                                <h2 class="text-sm font-semibold font-poppins text-dynamic-black">Patrick</h2>
                                <p class="text-xs font-poppins text-gray-500">Admin</p>
                            </div>                
                        </button>
                        <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                            <li>
                                <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Profile</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Settings</a>
                            </li>
                            <li>
                                <form method="POST" action="">
                                    <a role="menuitem" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        Log Out
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- /User Profile Dropdown -->
                </ul>
            </div>