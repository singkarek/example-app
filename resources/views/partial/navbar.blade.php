<nav class="fixed top-0 z-40 w-screen bg-red-50 shadow border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="/home" class="flex items-center ml-7 sm:ml-0">
            <img src="/img/logo.png" class="h-8 mr-1" alt="UrWeb Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">UrWeb</span>
        </a>
        <div class="flex flex-wrap items-center md:order-2">
            <a href="\login"
                class="flex [&.active]:ring-red-300 [&.active]:text-white [&.active]:bg-red-700 [&.active]:hover:bg-red-800 [&.active]:focus:ring-4 [&.active]:focus:ring-red-300 [&.active]:font-medium [&.active]:rounded-lg [&.active]:text-sm px-2 [&.active]:py-2 [&.active]:md:px-5 [&.active]:md:py-2.5 [&.active]:mr-1 [&.active]:md:mr-2 [&.active]:dark:bg-blue-600 [&.active]:dark:hover:bg-blue-700 [&.active]:focus:outline-none [&.active]:dark:focus:ring-blue-800 hover:ring-4 hover:ring-red-300 text-gray-800 dark:text-white hover:bg-red-50 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 {{ Request::is('login') ? 'active' : '' }}">
                <svg class="w-5 h-auto my-auto mr-1" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75">
                    </path>
                </svg>
                Sign In
            </a>
            <a href="\register"
                class="flex [&.active]:ring-red-300 [&.active]:text-white [&.active]:bg-red-700 [&.active]:hover:bg-red-800 [&.active]:focus:ring-4 [&.active]:focus:ring-red-300 [&.active]:font-medium [&.active]:rounded-lg [&.active]:text-sm px-2 [&.active]:py-2 [&.active]:md:px-5 [&.active]:md:py-2.5 [&.active]:mr-1 [&.active]:md:mr-2 [&.active]:dark:bg-blue-600 [&.active]:dark:hover:bg-blue-700 [&.active]:focus:outline-none [&.active]:dark:focus:ring-blue-800 hover:ring-4 hover:ring-red-300 text-gray-800 dark:text-white hover:bg-red-50 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 {{ Request::is('register') ? 'active' : '' }}">
                <svg class="w-5 h-auto my-auto mr-1" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z">
                    </path>
                </svg>
                Sign up
            </a>
            <button data-collapse-toggle="mega-menu" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a href="\home"
                        class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700  [&.active]:text-red-600 {{ Request::is('home') ? 'active' : '' }}"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="\blog"
                        class="block py-2 pl-3 pr-4 [&.active]:text-red-600 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('blog') ? 'active' : '' }}">Blog</a>
                </li>
                <li>
                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium [&.active]:text-red-600 text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('categories') ? 'active' : '' }}">
                        <a href="/categories">Category</a> <svg aria-hidden="true" class="w-5 h-5 ml-1"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="mega-menu-dropdown"
                        class="absolute z-10 hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-red-600 dark:hover:text-blue-500">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-red-600 dark:hover:text-blue-500">
                                        Library
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="\about"
                        class="block py-2 pl-3 pr-4 [&.active]:text-red-600 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('about') ? 'active' : '' }}">About</a>
                </li>
                <li>
                    <a href="\contact"
                        class="block py-2 pl-3 pr-4 [&.active]:text-red-600 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
