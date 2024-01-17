<?php require APPROOT . '/views/inc/header.php';

// var_dump( $data);
// die();
?>

<body class="bg-white text-white font-sans">
    <section class="w-full pl-4 h-[57px] bg-gray-900">
        <div class="flex flex-col flex-wrap items-center justify-between h-14 mx-auto md:flex-row max-w-7xl">
            <a href=""><img src=" <?php echo URLROOT ?>../img/logo.png" class="w-[130px] h-[48px]"></img></a>
            <div class="inline-flex items-center justify-center h-full md:justify-end">
                <a href="#" class="inline-flex items-center justify-center h-full px-4 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out bg-pink-600 border border-transparent hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-indigo active:bg-pink-700">
                    Logout
                </a>
            </div>
        </div>
        <div class="absolute top-0 right-0 flex items-center justify-center h-full pr-4 cursor-pointer md:hidden">
            <svg class="w-6 h-6 text-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
            </svg>
        </div>
        </div>
    </section>


    <div class="h-0 min-h-[768px]">

        <div x-data="{ open: false }" @keydown.window.escape="open = false" class="h-full flex">

            <div x-show="open" class="fixed inset-0 flex z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">

                <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="open = false" aria-hidden="true">
                </div>

                <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex-1 flex flex-col max-w-xs w-full bg-white focus:outline-none">

                    <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="open = false">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                    </div>

                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <nav aria-label="Sidebar" class="mt-5">
                            <div class="px-2 space-y-1">

                                <a href="<?php echo URLROOT ?>/pages/dashboard" class=" text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                        <path fill="#727274" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                    </svg>
                                    Dashboard
                                </a>

                                <a href="watchlist/displayCrypto" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                        <path fill="#7e7f81" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    Watchlist
                                </a>

                                <a href="#" class=" bg-gray-200 text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                        <path fill="#6b6b6b" d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
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

                                    <a href="<?php echo URLROOT ?>/pages/dashboard" class=" text-gray-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-200 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path fill="#727274" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                        </svg>
                                        Dashboard
                                    </a>

                                    <a href="<?php echo URLROOT ?>/watchlist/displayCrypto" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-200 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                            <path fill="#7e7f81" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                        Watchlist

                                        <a href="#" class=" bg-gray-200 text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-200 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                                <path fill="#6b6b6b" d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
                                            </svg>
                                            Portfolio
                                        </a>


                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col min-w-0 flex-1 overflow-hidden">

                <main>
                    <div class="text-center my-4">
                        <h1 class="text-2xl">
                            <?php ?>
                        </h1>
                    </div>

                    <div class="flex justify-around my-4">
                        <button class="bg-[#db2777] text-white rounded py-2 px-4">Nexus ID</button>
                        <button class="bg-[#db2777] text-white rounded py-2 px-4">Sell</button>
                        <button class="bg-[#db2777] text-white rounded py-2 px-4" id="openModalBtn">Send</button>
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

                <div id="myModal" class="modal hidden fixed inset-0 bg-white bg-opacity-30 flex items-center justify-center">
                    <div class="w-full h-full flex items-center justify-center">
                        <div class="modal-content bg-[#db2777]  p-8 rounded-md shadow-[rgba(0,_0,_0,_0.4)_0px_30px_90px]">
                            <!-- Your form goes here -->
                            <div class="flex justify-between">
                                <div>
                                </div>
                                <svg id="closeModalBtn" xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512" style="cursor: pointer;">
                                    <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                                </svg>
                            </div>
                            <form method="post" action="<?php echo URLROOT ?>/wallets/send">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="mb-4">
                                        <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User:</label>
                                        <input type="text" id="user" name="user" class="w-full px-3 py-2 border text-gray-900 rounded-md focus:outline-none focus:border-blue-500"  placeholder="id OR email" required>
                                    </div>

                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select id="crypto" name="crypto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Select cryptocurrency</option>
                                            <?php
                                            foreach ($data['coins'] as $crypto) {
                                                echo "<option value='" . $crypto->CryptomonnaieID . "'>" . $crypto->nom . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount:</label>
                                    <input type="number" id="amount" name="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required>
                                </div>
                                <button type="submit" class="bg-[#111827] hover:bg-[#db2777] text-white px-4 py-2 rounded-md">
                                    Send Cryptocurrency
                                </button>
                            </form>
                        </div>
                    </div>
                </div>


                <?php require APPROOT . '/views/inc/footer.php'; ?>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var modal = document.getElementById('myModal');
                        var btn = document.getElementById('openModalBtn');
                        var closeBtn = document.getElementById('closeModalBtn');

                        btn.onclick = function() {
                            modal.style.display = 'block';
                        }

                        closeBtn.onclick = function() {
                            modal.style.display = 'none';
                        }

                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = 'none';
                            }
                        }
                    });
                </script>

</body>

</html>