<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Wallet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#111827] text-white font-sans">

    <div class="h-0 min-h-[768px]">

        <div x-data="{ open: false }" @keydown.window.escape="open = false" class="h-full flex">

            <div x-show="open" class="fixed inset-0 flex z-40 lg:hidden"
                x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
                aria-modal="true">

                <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
                    class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="open = false" aria-hidden="true">
                </div>

                <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                    x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                    class="relative flex-1 flex flex-col max-w-xs w-full bg-white focus:outline-none">

                    <div x-show="open" x-transition:enter="ease-in-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        x-description="Close button, show/hide based on off-canvas menu state."
                        class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button"
                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            @click="open = false">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                    </div>

                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <nav aria-label="Sidebar" class="mt-5">
                            <div class="px-2 space-y-1">

                                <a href="<?php echo URLROOT ?>pages/watchlist"
                                    class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md"
                                    x-state:on="Current" x-state:off="Default"
                                    x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                        <path fill="#727274"
                                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                    </svg>
                                    Dashboard
                                </a>

                                <a href="#"
                                    class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md"
                                    x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                        <path fill="#7e7f81"
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    Watchlist
                                </a>

                                <a href="#"
                                    class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md"
                                    x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                        <path fill="#6b6b6b"
                                            d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
                                    </svg>
                                    Portfolio
                            </div>
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                        <a href="#" class="flex-shrink-0 group block">
                            <div class="flex items-center">
                                <div class="ml-3">
                                    <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">
                                        Whitney Francis
                                    </p>
                                    <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">
                                        View profile
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>


            <!-- Static sidebar for desktop -->
            <div class="hidden lg:flex lg:flex-shrink-0">
                <div class="flex flex-col w-64">
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <div class="flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-gray-100">
                        <div class="flex-1 flex flex-col  pb-4 overflow-y-auto">

                            <nav class=" flex-1 bg-gray-900 pt-5" aria-label="Sidebar">
                                <div class="px-2 space-y-1">

                                    <a href="#"
                                        class="bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                                        x-state:on="Current" x-state:off="Default"
                                        x-state-description="Current: &quot;bg-gray-200 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6"
                                            xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path fill="#727274"
                                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                        </svg>
                                        Dashboard
                                    </a>

                                    <a href="<?php echo URLROOT ?>/pages/watchlist"
                                        class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                                        x-state-description="undefined: &quot;bg-gray-200 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6"
                                            xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path fill="#7e7f81"
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                        Watchlist

                                        <a href="#"
                                            class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                                            x-state-description="undefined: &quot;bg-gray-200 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6"
                                                xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                                viewBox="0 0 576 512">
                                                <path fill="#6b6b6b"
                                                    d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
                                            </svg>
                                            Portfolio
                                        </a>


                                </div>
                            </nav>
                        </div>
                        <div class="flex-shrink-0 flex border-t border-gray-200 ">
                            <a href="#" class="flex-shrink-0 w-full group block">
                                <div class="flex items-center">
                                    <div>
                                        <img class="inline-block h-9 w-9 rounded-full"
                                            src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80"
                                            alt="">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                            Whitney Francis
                                        </p>
                                        <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                            View profile
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
                <div class="lg:hidden">
                    <div class="flex items-center justify-between bg-gray-50 border-b border-gray-200 px-4 py-1.5">
                        <div>
                        </div>
                        <div>
                            <button type="button"
                                class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                @click="open = true">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <main>
                    <div class="text-center my-4">
                        <h1 class="text-2xl">
                            <?php echo $balance ?>
                        </h1>
                    </div>

                    <div class="flex justify-around my-4">
                        <button class="bg-[#db2777] text-white rounded py-2 px-4">Nexus ID</button>
                        <button class="bg-[#db2777] text-white rounded py-2 px-4">Sell</button>
                        <button class="bg-[#db2777] text-white rounded py-2 px-4">Send</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4">
                        <div class="bg-gray-800 p-4 rounded flex items-center">
                            <img src="solana-icon.png" alt="Solana" class="h-8 mr-2">
                            <div>
                                <p>Solana</p>
                                <p class="text-sm text-gray-400">0 SOL</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 p-4 rounded flex items-center">
                            <img src="ethereum-icon.png" alt="Ethereum" class="h-8 mr-2">
                            <div>
                                <p>Ethereum</p>
                                <p class="text-sm text-gray-400">0 ETH</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 p-4 rounded flex items-center">
                            <img src="polygon-icon.png" alt="Polygon" class="h-8 mr-2">
                            <div>
                                <p>Polygon</p>
                                <p class="text-sm text-gray-400">0 MATIC</p>
                            </div>
                        </div>
                    </div>
                </main>
</body>

</html>