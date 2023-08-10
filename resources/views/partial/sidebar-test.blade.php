<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .custom-scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }

        .sidebar.close {
            width: 88px;
            justify-content: center;
            align-items: center;
            transition: ease-in-out 0.5s;
        }

        .sidebar.close .img {
            width: 20px;
            height: 20px;
            margin-right: 0;
        }

        .sidebar.close .hov {
            padding: 10px 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sidebar.close .line {
            border-top: 2px solid;
            border-color: rgb(209, 213, 219);
        }

        .sidebar.close .toggle {
            position: absolute;
            left: 75px;
            top: 12px;
            transition: ease-in-out 0.5s;
            transform: rotate(180deg);
        }

        .sidebar.close .text {
            display: none;
        }

        .sidebar.close .logout {
            right: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content.close {
            margin-left: 106px;
            transition: ease-in-out 0.5s;
        }

        .trans {
            transition: ease-in-out 0.5s;
        }

        @media (max-width: 640px) {

            .sidebar {
                height: screen;
            }

            .sidebar .toggle {
                display: none;
            }

            .sidebar.close .toggle {
                display: none;
            }

            .content {
                margin-left: 36px;
            }

        }

        @media (max-height:480px) {
            .sidebar {
                height: screen;
            }
        }
    </style>
</head>

<body class="" id="body">
    <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar" type="button"
        class="inline-flex items-center fixed top-5 z-40 ml-3 bg-transparent text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-5 h-5 items-end text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
        </svg>
    </button>

    <aside id="sidebar"
        class="fixed sidebar close trans sm:w-56 h-screen bg-dasarataSidebar top-0 left-0 z-40 shadow border border-gray-300 -translate-x-full sm:translate-x-0">
        <div class="flex w-full items-center px-3 py-4">
            <button id="test"
                class="flex toggle absolute trans left-52 text-white p-1 top-9 rounded-full bg-dasarataHover">
                <svg class="w-4 h-4 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 8 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                </svg>
            </button>
            <a href="#" class="flex">
                <img class="w-48 h-auto" src="/img/logo-cln.png" alt="logo">
            </a>
        </div>
        <div class="h-full mt-2 px-3 pb-40 trans overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#"
                        class="w-full flex hov items-center px-5 py-3 hover:text-white hover:bg-dasarataHover rounded-lg dark:text-white [&.active]:bg-emerald-200">
                        <svg class="w-5 h-5 mr-3 img dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <ul
                    class="pt-2 mt-4 line space-y-2 font-medium border-t border-hidden border-gray-300 dark:border-gray-700">
                    <div class="flex items-center w-full rounded-lg group [&.active]:bg-emerald-200 dark:text-white">
                        <span class="flex-1 text text-gra text-base text-left whitespace-nowrap">Warehouse</span>
                    </div>
                    <li>
                        <a href="#"
                            class="flex items-center hov w-full px-5 py-3 hover:text-white hover:bg-dasarataHover dark:text-white transition duration-75 rounded-lg group">
                            <svg class="w-5 h-5 mr-3 img dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                    d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                            </svg>
                            <span class="text">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center hov w-full px-5 py-3 hover:text-white hover:bg-dasarataHover dark:text-white transition duration-75 rounded-lg group">
                            <svg class="w-5 h-5 mr-3 img dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 1v3m5-3v3m5-3v3M1 7h7m1.506 3.429 2.065 2.065M19 7h-2M2 3h16a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm6 13H6v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L8 16Z" />
                            </svg>
                            <span class="text">Billing</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center hov w-full px-5 py-3 hover:text-white hover:bg-dasarataHover dark:text-white transition duration-75 rounded-lg group">
                            <svg class="w-5 h-5 mr-3 img dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4H1m3 4H1m3 4H1m3 4H1m6.071.286a3.429 3.429 0 1 1 6.858 0M4 1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm9 6.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>
                            <span class="text">Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="w-full flex hov items-center px-5 py-3 hover:text-white hover:bg-dasarataHover rounded-lg [&.active]:bg-emerald-200 dark:text-white">
                            <svg class="w-5 h-5 mr-3 img dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M19.728 10.686c-2.38 2.256-6.153 3.381-9.875 3.381-3.722 0-7.4-1.126-9.571-3.371L0 10.437V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-7.6l-.272.286Z" />
                                <path
                                    d="m.135 7.847 1.542 1.417c3.6 3.712 12.747 3.7 16.635.01L19.605 7.9A.98.98 0 0 1 20 7.652V6a2 2 0 0 0-2-2h-3V3a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v1H2a2 2 0 0 0-2 2v1.765c.047.024.092.051.135.082ZM10 10.25a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5ZM7 3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1H7V3Z" />
                            </svg>
                            <span class="text">Marketing</span>
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
        <div class="absolute flex trans bg-dasarataSidebar items-center w-full h-16 bottom-0 left-0 border-t">
            <div class="text trans flex">
                <img class="w-11 h-11 text rounded-xl" src="/img/piggy.jpeg" alt="user photo">
                <div class="w-24 text flex-row my-auto ml-2 overflow-x-auto custom-scrollbar-hidden">
                    <h2 class="font-normal text-sm whitespace-nowrap">Ryan
                        Reynolds Pandiangan Hutabarat
                    </h2>
                    <h2 class="text-xs whitespace-nowrap text-gray-600">Sales Marketing</h2>
                </div>
            </div>
            <a href="#" class="absolute logout rotate-180 bottom-5 right-4">
                <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                </svg>
            </a>
        </div>
    </aside>

    <div class="flex content trans sm:ml-60 ml-32 pt-4 mx-auto" id="content">
        {{-- <button class="rounded-lg hover:rounded-xl transform duration-75" id="test">
            <svg class="w-5 h-5 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button> --}}
        <h2 class="text-2xl" id="title">Dashboard</h2>
    </div>
</body>

<script>
    const tombol = document.getElementById("test"),
        sidebar = document.getElementById("sidebar"),
        text = document.getElementById("text"),
        content = document.getElementById("content");

    // function resizeOnWidth(){
    //     if(window.innerWidth <= 640) {
    //         sidebar.classList.remove("close");
    //         sidebar.classList.remove("close");
    //     }
    // }

    // window.addEventListener("resize", resizeOnWidth);
    window.addEventListener("resize", function() {
        if (window.innerWidth <= 640) {
            sidebar.classList.remove("close");
            content.classList.remove("close");
        }
    });

    tombol.addEventListener("click", function() {
        sidebar.classList.toggle("close");
        content.classList.toggle("close");
    });
</script>

</html>
