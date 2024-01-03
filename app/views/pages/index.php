<?php require APPROOT . '/views/inc/header.php'; ?>
<body class="bg-[#111827]">
<div class="relative overflow-hidden">
      <header class="relative" x-data="Components.popover({ open: false, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
        <div class="bg-[#250513] ">
        <section class="w-full pl-4 bg-gray-900">
    <div class="flex flex-col flex-wrap items-center justify-between h-12 mx-auto md:flex-row max-w-7xl">

        <a href="#_" class="flex items-center order-first h-12 font-medium text-gray-900 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center md:mb-0">
        <a href="home.php"><img src="/Cryptocurrency_management/public/img/logo.png" class="w-[130px] h-[48px]"></img></a>
        </a>

        <div class="relative flex-col hidden h-full md:flex md:flex-row">
            <nav class="flex flex-wrap items-center h-full pt-3 pb-5 mb-4 text-base border-b border-gray-800 md:pt-0 md:mb-0 md:border-b-0 md:pr-1 md:mr-1 md:border-r md:pb-0">
                <a href="#_" class="flex items-center h-full px-4 font-medium leading-6 text-gray-200 hover:text-gray-100 hover:bg-gray-800">Home</a>
                <a href="#_" class="flex items-center h-full px-4 font-medium leading-6 text-gray-200 hover:text-gray-100 hover:bg-gray-800">About Us</a>
                <a href="#_" class="flex items-center h-full px-4 font-medium leading-6 text-gray-200 hover:text-gray-100 hover:bg-gray-800">CompAnies</a>
                <a href="#_" class="flex items-center h-full px-4 font-medium leading-6 text-gray-200 hover:text-gray-100 hover:bg-gray-800">Questions</a>
            </nav>
            <div class="inline-flex items-center justify-center h-full md:justify-end">
                <a href="#" class="flex items-center h-full px-5 text-base font-medium leading-6 text-gray-200 whitespace-no-wrap transition duration-150 ease-in-out hover:bg-gray-800 hover:text-gray-100">
                    Sign in
                </a>
                <a href="#" class="inline-flex items-center justify-center h-full px-4 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out bg-pink-600 border border-transparent hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-indigo active:bg-pink-700">
                    Sign up
                </a>
            </div>
        </div>
        <div class="absolute top-0 right-0 flex items-center justify-center h-full pr-4 cursor-pointer md:hidden">
            <svg class="w-6 h-6 text-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
        </div>
    </div>
</section>
        </div>

      </header>

      <main class="h-[90vh] bg-cover bg-center" style="background-image: url('../../public/img/home.png');">
      <div class="flex flex-col items-center px-10 pt-20 pb-40 lg:flex-row">
            <div class="relative w-full max-w-2xl bg-cover lg:w-7/12">
                <div class="relative flex flex-col items-center justify-center w-full h-full lg:pr-10">
                    <div class="flex flex-col items-start space-y-8">
                        <div class="relative">
                            <h1 class="text-3xl font-extrabold leading-tight text-gray-100 sm:text-5xl md:text-7xl">CryptoCurrency Portfolio With Ease.</h1>
                        </div>
                        <p class="text-2xl text-pink-600"> Track your holdings, monitor performance, and make strategic decisions based on real-time market data.</p>
                        <a href="#_" class="inline-block px-8 py-5 text-2xl font-medium tracking-wide text-center text-pink-600 transition duration-200 bg-white hover:bg-[#111827] ease rounded">Learn More</a>
                    </div>
                </div>
            </div>

</main>

<!-- cards -->
<div class=" py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
      <div class="relative rounded-lg border border-[#120c18] bg-[#111827] px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><path fill="#949494" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
        <div class="flex-shrink-0">
          <img class="h-10 w-10 rounded-full" src="" alt="">
        </div>
        <div class="flex-1 min-w-0">
          <a href="#" class="focus:outline-none">
            <span class="absolute inset-0" aria-hidden="true"></span>
            <p class="text-sm font-medium text-white">
            Bitcoin
            </p>
            <p class="text-sm text-white truncate">
            Price
            </p>
          </a>
        </div>
      </div>
    
      <div class="relative rounded-lg border border-[#120c18] bg-[#111827] px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><path fill="#949494" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
        <div class="flex-shrink-0">
          <img class="h-10 w-10 rounded-full" src="" alt="">
        </div>
        <div class="flex-1 min-w-0">
          <a href="#" class="focus:outline-none">
            <span class="absolute inset-0" aria-hidden="true"></span>
            <p class="text-sm font-medium text-white">
            Bitcoin
            </p>
            <p class="text-sm text-white truncate">         
            Price
            </p>
          </a>
        </div>
      </div>
  </div>
  </div>
  
    
    
 

        <!-- Testimonial section -->
        <div class="pb-16 py-10 bg-[#120c18] my-10 from-teal-500 to-cyan-600 lg:pb-0 lg:z-10 lg:relative">
          <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
            <div class="relative lg:-my-8">
              <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
              <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                  <img class="object-cover lg:h-full lg:w-full" src="/Cryptocurrency_management/public/img/imghome.png" alt="">
                </div>
              </div>
            </div>
            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
              <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                <blockquote>
                  <div>
                    <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                      <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"></path>
                    </svg>
                    <p class="mt-6 text-2xl font-medium text-white">
                    Explore the world of cryptocurrencies with Nexus Crypto Wallet – where real-time insights meet secure transactions, providing you with the ultimate cryptocurrency management experience.
                    </p>
                  </div>
                  <footer class="mt-6">
                    <p class="text-base font-medium text-white">Judith Black</p>
                    <p class="text-base font-medium text-cyan-100">CEO at PureInsights</p>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
  </div>
    <!-- faq -->
<section class="py-24 ">
    <div class="max-w-4xl px-8 mx-auto lg:px-16">
        <h2 class="mb-9 text-xl font-bold text-center text-white md:text-3xl">Frequently Asked Questions</h2>

        <div class="relative mt-2 mt-12 space-y-5">
            <!-- Question 1 -->
            <div x-data="{ show: false }" class="relative overflow-hidden border-2 border-gray-200 rounded-lg select-none hover:bg-white">
                <h4 @click="show=!show" class="flex items-center justify-between text-lg font-medium text-gray-500 cursor-pointer sm:text-xl px-7 py-7 hover:text-gray-800">
                    <span>Where do I go to upgrade my account?</span>
                    <svg class="w-6 h-6 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-45' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="pt-0 -mt-2 text-gray-400 sm:text-lg py-7 px-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
            </div>

            <!-- Question 2 -->
            <div x-data="{ show: false }" class="relative overflow-hidden border-2 border-gray-200 rounded-lg select-none hover:bg-white">
                <h4 @click="show=!show" class="flex items-center justify-between text-lg font-medium text-gray-500 cursor-pointer sm:text-xl px-7 py-7 hover:text-gray-800">
                    <span>How do I use Tails in my project?</span>
                    <svg class="w-6 h-6 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-45' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="pt-0 -mt-2 text-gray-400 sm:text-lg py-7 px-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Implementation in your project is very simple. You can use the exported page as a starting point, or you can copy and paste the HTML into your own page.</p>
            </div>

            <!-- Question 3 -->
            <div x-data="{ show: false }" class="relative overflow-hidden border-2 border-gray-200 rounded-lg select-none hover:bg-white">
                <h4 @click="show=!show" class="flex items-center justify-between text-lg font-medium text-gray-500 cursor-pointer sm:text-xl px-7 py-7 hover:text-gray-800">
                    <span>How long will I have access to Tails?</span>
                    <svg class="w-6 h-6 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-45' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="pt-0 -mt-2 text-gray-400 sm:text-lg py-7 px-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You will have unlimited access to all your pre-built pages; however, if you want to be able to download and export your pages, you'll need a pro account. Paddle for processing payments.</p>
            </div>
        </div>

    </div>
</section>
<!-- trusted by -->
<section class="relative pb-12 overflow-x-hidden bg-[#120c18] border-t border-b border-gray-100 pt-7">
    <p class="w-full text-xs font-bold tracking-wider text-center text-white uppercase pb-7 upercase">Trusted by these leading companies</p>
    <div class="px-8 mx-auto max-w-7xl-xl">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="../../public/img/logosimplon.png" alt="">
                </div>
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="../../public/img/um6p.png" alt="">
                </div>
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img src="../../public/img/youcode.png" alt="">
                </div>
                <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                    <svg class="h-10 text-black fill-current" viewBox="0 0 704 335" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero"><path d="M407.451 27v54.605H476v19.574h-68.549v161.219c0 16.487 2.658 29.1 7.994 37.858 5.326 8.758 14.51 13.132 27.58 13.132 6.185 0 11.511-.34 15.978-1.028 4.466-.68 8.244-1.548 11.341-2.577l2.578 18.545c-8.244 3.775-19.245 5.672-32.985 5.672-11.342 0-20.705-1.897-28.09-5.672-7.394-3.775-13.23-9.008-17.526-15.709-4.297-6.7-7.305-14.76-9.023-24.207-1.729-9.437-2.578-19.653-2.578-30.648V101.18H342V81.605h40.72V36.267L407.45 27zm108.272 55.01l56.592 153.35c4.797 12.012 9.086 23.335 12.856 33.96 3.77 10.635 7.37 21.1 10.802 31.386H597a1724.777 1724.777 0 0111.061-31.136c3.94-10.805 8.318-22.208 13.116-34.22L678.277 82H704l-98.263 247h-21.095L490 82.01h25.723zM150.117 29.041C172.077.14 202.607 0 202.607 0s4.544 27.176-17.277 53.345c-23.289 27.954-49.763 23.376-49.763 23.376s-4.974-21.98 14.55-47.68zm-11.275 67.5C150.16 96.54 171.165 81 198.515 81c47.075 0 65.588 33.449 65.588 33.449s-36.216 18.488-36.216 63.36c0 50.618 45.113 68.057 45.113 68.057s-31.533 88.644-74.134 88.644c-19.565 0-34.776-13.171-55.39-13.171-21.006 0-41.862 13.661-55.431 13.661C49.146 335.01 0 250.913 0 183.326 0 116.817 41.6 81.929 80.61 81.929c25.368 0 45.052 14.611 58.232 14.611z"></path></g></svg>
                </div>
                <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1">
                    <svg class="text-black fill-current h-7" viewBox="0 0 2500 494" xmlns="http://www.w3.org/2000/svg"><path d="M1262.684 438.349c0 8.684 0 10.658 5.855 15.987l32.797 32.368v1.382H1155.92v-62.172c-14.638 40.974-53.349 68.073-96.428 67.5-74.756 0-129.02-59.21-129.02-168.157 0-102.04 58.553-170.132 140.731-170.132 36.428-2.316 70.329 18.901 84.52 52.895V70.855a17.066 17.066 0 00-6.638-16.579l-31.23-30.394V22.5l144.828-17.171v433.02zm-106.763-19.737V213.94a54.224 54.224 0 00-43.335-20.527c-35.33 0-69.487 32.369-69.487 128.487 0 90 29.473 121.777 66.17 121.777a58.382 58.382 0 0046.645-25.066h.007zm203.19 69.474V211.77a18.671 18.671 0 00-5.854-16.58l-32.211-33.552v-1.381h145.421V440.52c0 8.684 0 10.658 5.855 15.987l32.014 30.394v1.382l-145.224-.197zm-5.269-428.882c0-32.697 26.217-59.204 58.553-59.204 32.335 0 58.559 26.513 58.559 59.21 0 32.698-26.217 59.211-58.553 59.211-32.335 0-58.559-26.513-58.559-59.21v-.007zm504.954 378.553c0 8.684 0 11.25 5.855 16.579l32.796 32.368v1.382H1751.25V417.23c-13.316 44.803-53.875 75.658-100.132 76.184-64.802 0-99.546-47.763-99.546-138.157 0-43.619 0-91.382 1.362-145.066a16.875 16.875 0 00-5.855-15.987l-32.204-32.566v-1.381h144.243v180.197c0 59.21 8.593 98.684 45.283 98.684a58.487 58.487 0 0047.237-29.802V211.967a18.671 18.671 0 00-5.855-16.579l-32.401-33.75v-1.381h145.414v277.5zm495.007 50.329c0-10.658 1.954-146.448 1.954-177.632 0-59.21-9.178-100.066-50.362-100.066a65.204 65.204 0 00-51.724 28.421 243.53 243.53 0 015.855 56.25c0 41.053-1.368 93.355-1.954 145.658a16.875 16.875 0 005.856 15.987l32.796 30.395v1.381H2149.44c0-9.868 1.947-146.447 1.947-177.631 0-60.198-9.17-100.066-49.77-100.066a58.46 58.46 0 00-48.407 29.21V441.31c0 8.684 0 10.658 5.855 15.987l32.013 30.395v1.381h-145.224V212.757a18.671 18.671 0 00-5.855-16.58l-32.21-34.539v-1.381h145.42v70.263c13.487-46.382 56.448-77.553 104.23-75.592 48.409 0 81.198 27.236 95.06 78.947 15.395-47.69 59.697-79.69 109.303-78.947 64.802 0 101.5 48.355 101.5 139.736 0 43.619-1.362 93.356-1.948 145.658a15.868 15.868 0 006.632 15.987L2500 486.704v1.382h-146.197zm-1826.79-43.027l43.138 41.645v1.382H351.342v-1.382l43.921-41.645a16.875 16.875 0 005.855-15.987v-266.25c0-11.25 0-26.447 1.948-39.473L255.5 493.42h-1.75l-152.836-340.46c-3.322-8.487-4.296-9.08-6.447-14.803v223.224a78.322 78.322 0 007.23 43.618l61.48 81.71v1.382H0v-1.381l61.487-81.908a78.526 78.526 0 007.217-43.421v-246.71a48.132 48.132 0 00-10.145-33.75l-43.526-57.04V22.5h156.151l130.777 288.355L417.125 22.5h152.829v1.382l-42.94 48.355a17.066 17.066 0 00-6.639 16.579v340.263a15.868 15.868 0 006.645 15.987l-.007-.007zm171.184-133.42v1.38c0 84.474 43.139 118.422 93.691 118.422 42.21 1.454 81.283-22.48 99.546-60.987h1.369c-17.566 83.487-68.71 122.96-145.224 122.96-82.566 0-160.447-50.328-160.447-166.973 0-122.566 78.079-171.513 164.348-171.513 69.494 0 143.467 33.158 143.467 139.736v16.974h-196.75zm0-16.975h96.23v-17.17c0-86.843-17.763-109.935-44.506-109.935-32.401 0-52.112 34.54-52.112 127.105h.388z" fill-rule="nonzero"></path></svg>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
  <footer>
  <section class="py-10 ">
    <div class="px-10 mx-auto max-w-7xl">
        <div class="flex flex-col items-center md:flex-row md:justify-between">
            <a href="#_" class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg mb-7 bg-gradient-to-br from-purple-500 via-indigo-600 to-blue-500 rounded-xxl">
                <svg class="w-5 h-5 text-white fill-current" viewBox="0 0 39 15" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.252 1.152C4.184 2.526.454 6.918.061 14.329c1.963-4.049 4.798-5.975 8.503-5.778 2.115.112 3.84 1.295 5.75 2.603 3.11 2.133 6.712 4.601 13.281 3.324 7.068-1.374 10.798-5.766 11.191-13.177-1.963 4.049-4.798 5.975-8.503 5.779-2.115-.113-3.84-1.296-5.75-2.604-3.11-2.133-6.712-4.601-13.281-3.324z" fill-rule="evenodd"></path>
                </svg>
            </a>

            <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4"> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"></path>
                    </svg> </a> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"></path>
                    </svg> </a> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle cx="12.145" cy="3.892" r="1"></circle>
                            <path d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"></path>
                            <path d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z"></path>
                        </g>
                    </svg> </a> </div>
        </div>
        <div class="flex flex-col justify-between text-center md:flex-row">
            <p class="order-last text-sm leading-tight text-gray-500 md:order-first"> Crafted with <a href="https://devdojo.com/tails" class="text-white">Tails</a>. Built with ❤️ by our team. </p>
            <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm">
                <li> <a href="#_" class="px-4 text-gray-500 hover:text-white">Contact</a> </li>
                <li> <a href="#_" class="px-4 text-gray-500 hover:text-white">About US</a> </li>
                <li> <a href="#_" class="px-4 text-gray-500 hover:text-white">FAQ's</a> </li>
                <li> <a href="#_" class="px-4 text-gray-500 hover:text-white">Terms</a></li>
            </ul>
        </div>
    </div>
</section>
  </footer>
<?php require APPROOT . '/views/inc/footer.php'; ?>
