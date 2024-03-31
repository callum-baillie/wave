@extends('theme::layouts.app')

@section('content')


    <div class="flex relative items-center w-full">
        <div class="relative z-20 px-8 mx-auto max-w-7xl xl:px-5">

            <div class="flex flex-col items-center pt-16 pb-56 h-full lg:flex-row">

                <div class="flex flex-col items-start mb-16 w-full md:items-center lg:pr-12 lg:items-start lg:w-1/2 lg:mb-0">

                    <h2 class="invisible text-sm font-semibold tracking-wide text-gray-700 uppercase opacity-0 transition-none duration-700 ease-out transform translate-y-12 sm:text-base lg:text-sm xl:text-base" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }'>Welcome to Wave</h2>
                    <h1 class="invisible pb-2 mt-3 text-4xl font-extrabold tracking-tight leading-10 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-500 to-purple-600 opacity-0 transition-none duration-700 ease-out delay-150 transform translate-y-12 scale-10 md:my-5 sm:leading-none lg:text-5xl xl:text-6xl" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }'>Start crafting your next great idea.</h1>
                    <p class="invisible mt-0 max-w-2xl text-base text-left text-gray-600 opacity-0 transition-none duration-700 ease-out delay-300 transform translate-y-12 md:text-center lg:text-left sm:mt-2 md:mt-0 sm:text-base lg:text-lg xl:text-xl" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }'>Wave will help you rapidly build a Software as a Service. Out of the box Authentication, Subscriptions, Invoices, Announcements, User Profiles, API, and so much more!</p>
                    <div class="invisible mt-5 w-full opacity-0 transition-none duration-700 ease-out delay-500 transform translate-y-12 delay-450 sm:mt-8 sm:flex sm:justify-center lg:justify-start sm:w-auto" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>
                        <div class="rounded-md">
                            <a href="{{ route('register') }}" class="flex justify-center items-center px-8 py-3 w-full text-base font-medium leading-6 text-white bg-blue-500 rounded-xl border border-transparent transition duration-150 ease-in-out hover:bg-blue-600 focus:outline-none focus:border-blue-600 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">
                                Signup
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="#" class="flex justify-center items-center px-8 py-3 w-full text-base font-medium leading-6 text-indigo-700 bg-indigo-100 rounded-xl border-2 border-transparent transition duration-150 ease-in-out hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 md:py-4 md:text-lg md:px-10">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex mb-16 w-full lg:w-1/2 lg:mb-0">
                    <div class="relative invisible opacity-0 transition-none duration-1000 delay-100 transform translate-x-12" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-x-12": "translate-y-0", "opacity-0": "opacity-100" }'>
                        <img src="/storage/themes/February2018/mFajn4fwpGFXzI1UsNH6.png" class="w-full max-w-3xl sm:w-auto">
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="relative z-40 -mt-64">

        <svg viewBox="0 0 120 28" class="-mt-64">
            <defs>
                <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
            </defs>
            <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
            <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>
            <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
        </svg>
    </div>

    {{-- FEATURES SECTION --}}
    <section class="relative z-40 pt-10 pb-16 w-full bg-gradient-to-b from-blue-500 via-blue-600 to-blue-400 lg:pt-5 xl:-mt-24">

        <div class="absolute top-0 left-0 z-10 w-full h-full opacity-10 transform -translate-x-1/2">
            <svg class="w-full h-full text-white opacity-25 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205 205"><defs/><g fill="#FFF" fill-rule="evenodd"><path d="M182.63 37c14.521 18.317 22.413 41.087 22.37 64.545C205 158.68 159.1 205 102.486 205c-39.382-.01-75.277-22.79-92.35-58.605C-6.939 110.58-2.172 68.061 22.398 37a105.958 105.958 0 00-9.15 43.352c0 54.239 39.966 98.206 89.265 98.206 49.3 0 89.265-43.973 89.265-98.206A105.958 105.958 0 00182.629 37z"/><path d="M103.11 0A84.144 84.144 0 01150 14.21C117.312-.651 78.806 8.94 56.7 37.45c-22.105 28.51-22.105 68.58 0 97.09 22.106 28.51 60.612 38.101 93.3 23.239-30.384 20.26-70.158 18.753-98.954-3.75-28.797-22.504-40.24-61.021-28.47-95.829C34.346 23.392 66.723.002 103.127.006L103.11 0z"/><path d="M116.479 13c36.655-.004 67.014 28.98 69.375 66.234 2.36 37.253-24.089 69.971-60.44 74.766 29.817-8.654 48.753-38.434 44.308-69.685-4.445-31.25-30.9-54.333-61.904-54.014-31.003.32-56.995 23.944-60.818 55.28v-1.777C46.99 44.714 78.096 13.016 116.479 13z"/></g></svg>
        </div>

        <div class="flex relative z-20 flex-col justify-start items-start px-8 mx-auto max-w-7xl sm:items-center xl:px-5">
            <h2 class="text-4xl font-medium leading-9 text-white">Awesome Features</h2>
            <p class="mt-4 leading-6 text-blue-200 sm:text-center">Wave has some cool features to help you rapidly build your Software as a Service.<br class="hidden md:block"> Here are a few awesome features you're going to love!</p>

            <div class="grid gap-y-10 mt-16 sm:grid-cols-2 sm:gap-x-8 md:gap-x-12 lg:grid-cols-3 xl:grid-cols-4 lg:gap-20">
                @foreach(config('features') as $feature)
                    <div>
                        <img src="{{ $feature->image }}" class="w-16 rounded sm:mx-auto">
                        <h3 class="mt-6 text-sm font-semibold leading-6 text-blue-100 sm:text-center">{{ $feature->title }}</h3>
                        <p class="mt-2 text-sm leading-5 text-blue-200 sm:text-center">{{ $feature->description }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="bg-gray-100" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1440 156" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
        <style type="text/css">
            .blue-svg{fill:#0069ff;}
            .blue-svg-lighter{fill:#70a2f3}
        </style>
        <g fill-rule="nonzero">
            <path class="blue-svg" d="M694,94.437587 C327,161.381336 194,153.298248 0,143.434189 L2.01616501e-13,44.1765618 L1440,27 L1440,121 C1244,94.437587 999.43006,38.7246898 694,94.437587 Z" id="Shape" fill="#0069FF" opacity="0.519587054"></path>
            <path class="blue-svg" d="M686.868924,95.4364002 C416,151.323752 170.73341,134.021565 1.35713663e-12,119.957876 L0,25.1467017 L1440,8 L1440,107.854321 C1252.11022,92.2972893 1034.37894,23.7359827 686.868924,95.4364002 Z" id="Shape" fill="#0069FF" opacity="0.347991071"></path>
            <path class="blue-svg-lighter" d="M685.6,30.8323303 C418.7,-19.0491687 170.2,1.94304528 0,22.035593 L0,118 L1440,118 L1440,22.035593 C1252.7,44.2273621 1010,91.4098622 685.6,30.8323303 Z" transform="translate(720.000000, 59.000000) scale(1, -1) translate(-720.000000, -59.000000) "></path>
        </g>
    </svg>

    <!-- BEGINNING OF TESTIMONIALS SECTION -->
    <div id="testimonials">
        <div class="flex relative justify-center items-center pt-32 pb-12 bg-gray-100 md:pb-32 lg:pb-64 min-w-screen">
            <div class="px-10 pb-20 mx-auto max-w-6xl bg-gray-100">
                <div class="flex flex-col items-center lg:flex-row">
                    <div class="flex flex-col justify-center mb-10 w-full h-full lg:pr-8 sm:w-4/5 md:items-center lg:mb-0 lg:items-start md:w-3/5 lg:w-1/2">
                        <p class="mb-2 text-base font-medium tracking-tight text-blue-500 uppercase">Our customers love our product</p>
                        <h2
                            class="text-4xl font-extrabold tracking-tight leading-10 text-gray-900 sm:leading-none lg:text-5xl xl:text-6xl">
                            Testimonials</h2>
                        <p class="pr-5 my-6 text-lg text-gray-600 md:text-center lg:text-left">This is an example section of where you will add your testimonials for your Software as a Service.</p>
                        <a href="#_" class="flex justify-center items-center px-8 py-3 text-base font-medium leading-6 text-white bg-blue-600 rounded-full border border-transparent shadow transition duration-150 ease-in-out hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-wave md:py-4 md:text-lg md:px-10">View Case Studies</a>
                    </div>
                    <div class="w-full sm:w-4/5 lg:w-1/2">
                        <blockquote class="flex flex-row-reverse col-span-1 justify-between items-center p-6 w-full bg-white rounded-xl shadow sm:flex-row">
                            <div class="flex flex-col pl-5 sm:pr-8">
                                <div class="relative sm:pl-12">
                                    <svg class="hidden absolute left-0 w-10 h-10 text-blue-500 fill-current sm:block"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">Wave allowed me to build the Software as a Service of my dreams!
                                    </p>
                                </div>

                                <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">Jane Cooper <span
                                        class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                alt="">
                        </blockquote>
                        <blockquote
                            class="flex flex-row-reverse col-span-1 justify-between items-center p-6 my-5 w-full bg-white rounded-lg shadow sm:flex-row">
                            <div class="flex flex-col pl-5 sm:pr-10">
                                <div class="relative sm:pl-12">
                                    <svg class="hidden absolute left-0 w-10 h-10 text-blue-500 fill-current sm:block"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">Wave saved us hundreds of development hours. Creating a Software as a Service is now easier than ever with Wave.</p>
                                </div>
                                <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">John Doe <span
                                        class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full"
                                src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&aauto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                alt="">
                        </blockquote>
                        <blockquote
                            class="flex flex-row-reverse col-span-1 justify-between items-center p-6 w-full bg-white rounded-lg shadow sm:flex-row">
                            <div class="flex flex-col pl-5 sm:pr-10">
                                <div class="relative sm:pl-12">
                                    <svg class="hidden absolute left-0 w-10 h-10 text-blue-500 fill-current sm:block"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">This is the best solution available for creating your own Software as a Service!</p>
                                </div>

                                <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">John Smith <span
                                        class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full"
                                src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rrb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&aauto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                alt="">
                        </blockquote>
                    </div>
                </div>
            </div>

            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 w-full" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
                <style type="text/css">
                    .blue-svg-light {
                        fill: #ffffff;
                    }
                </style>
                <g id="wave" transform="translate(720.000000, 75.000000) scale(1, -1) translate(-720.000000, -75.000000) " fill-rule="nonzero">
                    <path class="blue-svg-light" d="M694,94.437587 C327,161.381336 194,153.298248 0,143.434189 L2.01616501e-13,44.1765618 L1440,27 L1440,121 C1244,94.437587 999.43006,38.7246898 694,94.437587 Z" id="Shape" fill="#0069FF" opacity="0.519587054"></path>
                    <path class="blue-svg-light" d="M686.868924,95.4364002 C416,151.323752 170.73341,134.021565 1.35713663e-12,119.957876 L0,25.1467017 L1440,8 L1440,107.854321 C1252.11022,92.2972893 1034.37894,23.7359827 686.868924,95.4364002 Z" id="Shape" fill="#0069FF" opacity="0.347991071"></path>
                    <path class="blue-svg-light" d="M685.6,30.8323303 C418.7,-19.0491687 170.2,1.94304528 0,22.035593 L0,118 L1440,118 L1440,22.035593 C1252.7,44.2273621 1010,91.4098622 685.6,30.8323303 Z" id="Shape" fill="url(#linearGradient-1)" transform="translate(720.000000, 59.000000) scale(1, -1) translate(-720.000000, -59.000000) "></path>
                </g>
            </svg>

        </div>
    </div>
    <!-- END OF TESTIMONIALS SECTION -->

    <!-- BEGINNING OF PRICING SECTION -->
    <div id="pricing" class="relative">

        <div class="relative z-20 px-8 pb-8 mx-auto max-w-7xl xl:px-5">
            <div class="w-full text-left sm:text-center">
                <h2 class="pt-12 text-4xl font-extrabold text-gray-900 lg:text-5xl">Example Pricing</h2>
                <p class="my-1 w-full text-base text-left text-gray-900 opacity-75 sm:my-2 sm:text-center sm:text-xl">It's easy to customize the pricing of your Software as a Service</p>
            </div>

            @livewire('wave.settings.plans')

            <p class="my-8 w-full text-left text-gray-500 sm:my-10 sm:text-center">All plans are fully configurable in the Admin Area.</p>
        </div>
    </div>
    <!-- END OF PRICING SECTION -->

@endsection