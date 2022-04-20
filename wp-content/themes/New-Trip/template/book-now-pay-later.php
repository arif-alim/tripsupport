<?php /* Template Name: Book Now Pay Later */ ?>
<?php get_header() ?>
<main>
    <div class="bg-white">
        <div class="overflow-hidden">
            <div class="bg-gradient-to-r from-pblue-900 to-rose-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative pt-6 sm:pt-28 pb-10 sm:pb-48">
                        <div><h2 id="sale-heading"
                                 class="text-4xl font-extrabold tracking-tight text-white md:text-6xl">Book Now, Pay
                                Later
                            </h2>
                            <p class="hidden sm:flex prose text-sm sm:text-lg md:max-w-sm font-medium text-slate-100 mt-2">
                                Secure your ticket with a small deposit.
                                <br>No Credit Check Needed.
                            </p>
                            <div class="mt-4 text-base"><a href="<?php echo home_url() ?>/vacations" class="font-semibold text-white">View Offers<span
                                            aria-hidden="true" class="ml-2">→</span></a></div>
                        </div>

                        <div class="hidden sm:flex absolute top-24 left-1/2 transform -translate-x-1/2 sm:top-4 sm:translate-x-0">
                            <div class="ml-24 flex space-x-6 min-w-max sm:ml-3 lg:space-x-4">
                                <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-4">
                                    <div class="flex-shrink-0"><img class="h-[200px] w-[180px] rounded-lg object-cover"
                                                                    src="<?php echo THEME_IMAGE_HERO . '/blog-bg.jpg' ?>"
                                                                    alt=""></div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0"><img
                                                class="h-[200px] w-[180px] rounded-lg object-cover"
                                                src="<?php echo THEME_IMAGE_HERO . '/hotel-11.jpg' ?>" alt=""></div>
                                </div>
                                <div class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-4">
                                    <div class="flex-shrink-0"><img class="h-[250px] w-[180px] rounded-lg object-cover"
                                                                    src="<?php echo THEME_IMAGE_HERO . '/hero-2.jpg' ?>"
                                                                    alt=""></div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0"><img
                                                class="h-[250px] w-[180px] rounded-lg object-cover"
                                                src="<?php echo THEME_IMAGE_HOME . '/flights-section.jpg' ?>" alt="">
                                    </div>
                                </div>
                                <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-4">
                                    <div class="flex-shrink-0"><img class="h-[200px] w-[180px] rounded-lg object-cover"
                                                                    src="<?php echo THEME_IMAGE_HERO . '/acapulco.jpg' ?>"
                                                                    alt=""></div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0"><img
                                                class="h-[200px] w-[180px] rounded-lg object-cover"
                                                src="<?php echo THEME_IMAGE_HERO . '/muskoka.jpg' ?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:px-6 lg:mb-6"
             aria-labelledby="contact-heading">
        <?php echo do_shortcode('[tr_search_by_vue]') ?>
    </section>

    <div class="bg-white overflow-hidden">
        <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-12">
            <div class="flex flex-col lg:flex-row lg:items-center space-y-12 lg:space-y-0 lg:space-x-12">
                <div class="lg:w-6/12 xl:w-6/12 md:py-12 space-y-10">
                    <div class="prose">
                        <div class="text-sm uppercase font-bold tracking-wider mb-1 text-rose-600">Trip Support
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold mb-4 mt-0">Our Book Now Pay Later Feature
                        </h2>
                        <p class="mt-4 text-gray-700 max-w-4xl prose">Ready to pursue your wanderlust and explore the
                            world easier than ever before? Trip
                            Support’s Book Now Pay Later Travel plan can help cover your travel expenses in a
                            cost-effective manner. These expenses can include transportation costs, accommodations,
                            food, activities, tours, and more. Uniquely, we offer this approach without the need for
                            credit checks and extra boring, time-consuming documentation.
                            <span class="font-bold">We believe that people should be able to travel regardless of their credit score</span>.
                        </p></div>
                </div>


                <div class="lg:w-6/12 xl:w-6/12 flex-none relative">
                    <div class="pattern-dots-xl opacity-10 absolute top-0 left-0 w-48 h-64 md:mt-20 transform -translate-x-10 -translate-y-10"></div>
                    <div class="pattern-dots-xl opacity-10 absolute bottom-0 right-0 w-48 h-64 md:mb-20 transform translate-x-10 translate-y-10"></div>
                    <div class="relative flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0">
                        <div class="md:w-1/2 space-y-6">
                            <div class="group bg-white p-5 transition ease-out duration-200 border-2 border-gray-200 rounded-2xl hover:border-orange-300">
                                <div class="inline-flex items-center justify-center w-10 h-10 m-2 mb-6 relative">
                                    <div class="absolute inset-0 rounded-3xl -m-2 transform rotate-6 bg-blue-300 transition ease-out duration-200 group-hover:-rotate-3 group-hover:scale-105"></div>
                                    <div class="absolute inset-0 rounded-2xl transform -rotate-6 bg-blue-700 bg-opacity-75 shadow-inner transition ease-out duration-200 group-hover:rotate-2 group-hover:scale-105"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="text-white relative transform transition ease-out duration-200 group-hover:scale-110 hi-outline hi-chart-pie inline-block w-7 h-7"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                                        <path fill-rule="evenodd"
                                              d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold mb-2">No Credit Check</h4>
                                <p class="leading-relaxed text-tb text-gray-600">Pursue your wanderlust and explore the
                                    world easier than ever before
                                </p></div>
                            <div class="group bg-white p-5 transition ease-out duration-200 border-2 border-gray-200 rounded-2xl hover:border-red-300">
                                <div class="inline-flex items-center justify-center w-10 h-10 m-2 mb-6 relative">
                                    <div class="absolute inset-0 rounded-3xl -m-2 transform rotate-6 bg-red-300 transition ease-out duration-200 group-hover:-rotate-3 group-hover:scale-105"></div>
                                    <div class="absolute inset-0 rounded-2xl transform -rotate-6 bg-red-700 bg-opacity-75 shadow-inner transition ease-out duration-200 group-hover:rotate-2 group-hover:scale-105"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="text-white relative transform transition ease-out duration-200 group-hover:scale-110 hi-outline hi-lightning-bolt inline-block w-6 h-6"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"
                                              clip-rule="evenodd"></path>
                                        <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold mb-2">No hidden fees</h4>
                                <p class="leading-relaxed text-gray-600">Everything is laid out at the start and
                                    included in the package
                                </p></div>
                        </div>
                        <div class="md:w-1/2 space-y-6">
                            <div class="group bg-white p-5 transition ease-out duration-200 border-2 border-gray-200 rounded-2xl hover:border-emerald-300">
                                <div class="inline-flex items-center justify-center w-10 h-10 m-2 mb-6 relative">
                                    <div class="absolute inset-0 rounded-3xl -m-2 transform rotate-6 bg-emerald-300 transition ease-out duration-200 group-hover:-rotate-3 group-hover:scale-105"></div>
                                    <div class="absolute inset-0 rounded-2xl transform -rotate-6 bg-emerald-700 bg-opacity-75 shadow-inner transition ease-out duration-200 group-hover:rotate-2 group-hover:scale-105"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="text-white relative transform transition ease-out duration-200 group-hover:scale-110 hi-outline hi-globe inline-block w-7 h-7"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold mb-2">Flexible Payments</h4>
                                <p class="leading-relaxed text-tb text-gray-600">Choose between weekly, bi-monthly or
                                    monthly payments
                                </p></div>
                            <div class="group bg-white p-5 transition ease-out duration-200 border-2 border-gray-200 rounded-2xl hover:border-purple-300">
                                <div class="inline-flex items-center justify-center w-10 h-10 m-2 mb-6 relative">
                                    <div class="absolute inset-0 rounded-3xl -m-2 transform rotate-6 bg-purple-300 transition ease-out duration-200 group-hover:-rotate-3 group-hover:scale-105"></div>
                                    <div class="absolute inset-0 rounded-2xl transform -rotate-6 bg-purple-700 bg-opacity-75 shadow-inner transition ease-out duration-200 group-hover:rotate-2 group-hover:scale-105"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="text-white relative transform transition ease-out duration-200 group-hover:scale-110 hi-outline hi-puzzle inline-block w-6 h-6"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h4 class="text-lg font-bold mb-2">Fast &amp; convenient</h4>
                                <p class="leading-relaxed text-gray-600">We will process and approve your travel loan
                                    right away.
                                </p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <section aria-labelledby="features-heading" class="max-w-7xl mx-auto py-4 sm:py-12 sm:px-2 lg:px-8">
            <div class="max-w-2xl mx-auto px-4 lg:px-0 lg:max-w-none">
                <div class="max-w-7xl "><h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">How
                        Does This Work?
                    </h2>
                    <p class="mt-4 text-gray-700 max-w-4xl prose">At Trip Support, we believe in offering you simple
                        solutions for your travel needs. That’s
                        why our Book Now Pay Later system is as easy as can be. Simply choose your travel
                        destination, and we will do the rest. We will buy your tickets and your vacation packages.
                        Once that happens, you’d be asked to pay us in installments. Our Book Now Pay Later option
                        allows you to enjoy the benefits of early bookings savings. Instead of paying the full
                        amount of your trip in advance, you only have to place a deposit to secure your tickets.
                    </p></div>

                <div class="mt-4">
                    <div class="-mx-4 flex overflow-x-auto sm:mx-0">
                        <div class="flex-auto px-4 border-b border-gray-200 sm:px-0">
                            <div class="-mb-px flex space-x-10" aria-orientation="horizontal" role="tablist">
                                <button id="tab1" class="tab-link-active tab-link border-transparent whitespace-nowrap py-6 border-b-2 font-medium text-tb border-rose-600 text-rose-600&quot;, text-rose-600 font-bold"
                                        role="tab" type="button">Weekly Payment Plan
                                </button>

                                <button id="tab2" class="tab-link border-transparent whitespace-nowrap py-6 border-b-2 font-medium text-tb text-gray-500  hover:text-rose-600 hover:border-rose-600 font-semibold"
                                        role="tab" type="button">Bi-Weekly Payment Plan
                                </button>
                                <button id="tab3" class="tab-link border-transparent whitespace-nowrap py-6 border-b-2 font-medium text-tb text-gray-500  hover:text-rose-600 hover:border-rose-600 font-semibold"
                                        role="tab" type="button">Monthly Payment Plan
                                </button>
                            </div>
                        </div>
                    </div>

                    <div data-tab="tab1" class="tab-link-body tab-link-body-active">
                        <div class="flex pt-6"><h3 class="text-lg font-bold text-gray-900">Varadero, Cuba</h3></div>
                        <div><p class="text-sm text-gray-400">Taxes included</p></div>
                        <div class="flex-wrap sm:flex sm:space-x-10 my-2 sm:mb-0"><p class="text-sm text-slate-700">
                                Booking
                                Date: <span class="font-bold">March 16, 2022</span></p>
                            <p class="text-sm text-slate-700">Departure Date: <span
                                        class="font-bold">April 13, 2022</span>
                            </p>
                            <p class="text-sm text-slate-700">Total: <span class="font-bold">CA $2,124.60</span> (Adult
                                x 2)
                            </p>
                            <p class="text-sm text-slate-700">Total Due Now: <span class="font-bold">CA $684.12</span>
                            </p>
                            <p class="text-sm text-slate-700">Weekly Installments: <span
                                        class="font-bold">CA $495.74</span>
                            </p></div>
                        <div class="space-y-16 pt-4 lg:pt-10" role="tabpanel">
                            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:gap-x-16">
                                <div class="mt-6 lg:mt-0 lg:col-span-8">
                                    <div class="relative py-12">
                                        <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 flex flex-col justify-center lg:left-1/2 lg:-ml-6">
                                            <div class="mx-auto w-1 h-2.5 grow-0 bg-gradient-to-b from-transparent to-indigo-100 rounded-t"></div>
                                            <div class="mx-auto w-1 grow bg-indigo-100"></div>
                                            <div class="mx-auto w-1 h-2.5 grow-0 bg-gradient-to-t from-transparent to-indigo-100 rounded-b"></div>
                                        </div>


                                        <ul class="relative space-y-4 pl-10 md:pl-12 lg:pl-0">
                                            <li class="relative lg:w-1/2 lg:pr-6 lg:mr-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:translate-x-6 lg:left-auto lg:right-0">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny mb-2 text-slate-800">Booking
                                                        Date</h4>
                                                    <p class="text-sm leading-relaxed text-slate-600">Total due now:
                                                        <span
                                                                class="font-bold">CA $684.12</span></p>
                                                    <p class="text-sm leading-relaxed text-slate-600">Your first weekly
                                                        installment will be <span class="font-bold">CA $495.74</span>
                                                    </p>
                                                </div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:translate-x-full lg:flex lg:flex-col lg:mt-4 lg:py-0 lg:pr-0 lg:pl-6">
                                                    <p class="text-sm font-semibold text-slate-600">March 16, 2022</p>
                                                </div>
                                            </li>


                                            <li class="relative lg:w-1/2 lg:pl-6 lg:ml-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:-translate-x-6">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">1<span
                                                                class="align-super text-xx">st</span> Weekly
                                                        Installment:
                                                        <span class="font-normal text-sm">CA</span> $495.74
                                                    </h4></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:left-0 lg:bottom-0 lg:-translate-x-full lg:flex lg:flex-col lg:text-right lg:mt-4 lg:py-0 lg:pl-0 lg:pr-6">
                                                    <p class="text-sm font-semibold text-slate-600">March 23, 2022</p>
                                                </div>
                                            </li>


                                            <li class="relative lg:w-1/2 lg:pr-6 lg:mr-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:translate-x-6 lg:left-auto lg:right-0">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">2<span
                                                                class="align-super text-xx">nd</span> Weekly
                                                        Installment:
                                                        <span class="font-normal text-sm">CA</span> $495.74
                                                    </h4></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:translate-x-full lg:flex lg:flex-col lg:mt-4 lg:py-0 lg:pr-0 lg:pl-6">
                                                    <p class="text-sm font-semibold text-slate-600">March 30, 2022</p>
                                                </div>
                                            </li>


                                            <li class="relative lg:w-1/2 lg:pl-6 lg:ml-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:-translate-x-6">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">3<span
                                                                class="align-super text-xx">rd</span> Weekly
                                                        Installment:
                                                        <span class="font-normal text-sm">CA</span> $495.74
                                                    </h4>
                                                    <p class="text-sm leading-relaxed text-slate-600">Your final
                                                        installment
                                                        payment.</p></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:left-0 lg:bottom-0 lg:-translate-x-full lg:flex lg:flex-col lg:text-right lg:mt-4 lg:py-0 lg:pl-0 lg:pr-6">
                                                    <p class="text-sm font-semibold text-slate-600">April 6, 2022</p>
                                                </div>
                                            </li>


                                            <li class="relative lg:w-1/2 lg:pr-6 lg:mr-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:translate-x-6 lg:left-auto lg:right-0">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">Departure date</h4>
                                                </div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:translate-x-full lg:flex lg:flex-col lg:mt-4 lg:py-0 lg:pr-0 lg:pl-6">
                                                    <p class="text-sm font-semibold text-slate-600">April 13, 2022</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div class="rounded-md bg-blue-50 p-4 w-full">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-5 w-5 text-pblue-500"
                                                         viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3 flex-1 md:flex md:justify-between"><p
                                                            class="text-sm text-slate-900">Number of weekly installments
                                                        depends on your departure date.
                                                    </p></div>
                                            </div>
                                        </div>
                                        <div class="rounded-md bg-emerald-50 p-4 w-full">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-5 w-5 text-pblue-500"
                                                         fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                         stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3 flex-1 md:flex md:justify-between"><p
                                                            class="text-sm text-slate-900">The total amount must be paid
                                                        in
                                                        full a week prior to your departure date.
                                                    </p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex mt-4"><p class="text-xs text-gray-500">Some conditions do apply.
                                            Please
                                            see our
                                            <a href="#" class="text-rose-600">Pay Later Terms</a>.
                                        </p></div>
                                </div>
                                <div class="lg:col-span-4">
                                    <div class="aspect-w-2 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                        <img src="<?php echo THEME_IMAGE_HERO . '/cuba-varadero.jpg' ?>"
                                             alt="Maple organizer base with slots, supporting white polycarbonate trays of various sizes."
                                             class="object-center object-cover"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tab="tab2" class="tab-link-body">
                        <div class="flex pt-6">
                            <h3 class="text-lg font-bold text-gray-900">Cancun, Mexico</h3></div>
                        <div>
                            <p class="text-sm text-gray-400">Taxes included</p></div>
                        <div class="flex-wrap sm:flex sm:space-x-10 my-2 sm:mb-0"><p class="text-sm text-slate-700">
                                Booking Date: <span class="font-bold">March 16, 2022</span></p>
                            <p class="text-sm text-slate-700">Departure Date: <span
                                        class="font-bold">April 21, 2022</span></p>
                            <p class="text-sm text-slate-700">Total: <span class="font-bold">CA $2,597.92</span> (Adult
                                x 2)</p>
                            <p class="text-sm text-slate-700">Total Due Now: <span class="font-bold">CA $818.52</span>
                            </p>
                            <p class="text-sm text-slate-700">Bi-Weekly Installments: <span
                                        class="font-bold">CA $889.70</span></p></div>
                        <div class="space-y-16 pt-4 lg:pt-10" role="tabpanel">
                            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:gap-x-16">
                                <div class="mt-6 lg:mt-0 lg:col-span-8">
                                    <div class="relative py-12">
                                        <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 flex flex-col justify-center lg:left-1/2 lg:-ml-6">
                                            <div class="mx-auto w-1 h-2.5 grow-0 bg-gradient-to-b from-transparent to-indigo-100 rounded-t"></div>
                                            <div class="mx-auto w-1 grow bg-indigo-100"></div>
                                            <div class="mx-auto w-1 h-2.5 grow-0 bg-gradient-to-t from-transparent to-indigo-100 rounded-b"></div>
                                        </div>
                                        <ul class="relative space-y-4 pl-10 md:pl-12 lg:pl-0">
                                            <li class="relative lg:w-1/2 lg:pr-6 lg:mr-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:translate-x-6 lg:left-auto lg:right-0">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny mb-2 text-slate-800">Booking
                                                        Date</h4>
                                                    <p class="text-sm leading-relaxed text-slate-600">Total due now:
                                                        <span class="font-bold">CA $818.52</span></p>
                                                    <p class="text-sm leading-relaxed text-slate-600">Your first
                                                        Bi-Weekly installment will be <span
                                                                class="font-bold">CA $889.70</span></p></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:translate-x-full lg:flex lg:flex-col lg:mt-4 lg:py-0 lg:pr-0 lg:pl-6">
                                                    <p class="text-sm font-semibold text-slate-600">March 16, 2022</p>
                                                </div>
                                            </li>
                                            <li class="relative lg:w-1/2 lg:pl-6 lg:ml-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:-translate-x-6">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">1<span
                                                                class="align-super text-xx">st</span> Bi-Weekly
                                                        Installment:
                                                        <span class="font-normal text-sm">CA</span> $889.70</h4></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:left-0 lg:bottom-0 lg:-translate-x-full lg:flex lg:flex-col lg:text-right lg:mt-4 lg:py-0 lg:pl-0 lg:pr-6">
                                                    <p class="text-sm font-semibold text-slate-600">March 30, 2022</p>
                                                </div>
                                            </li>
                                            <li class="relative lg:w-1/2 lg:pr-6 lg:mr-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:translate-x-6 lg:left-auto lg:right-0">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">2<span
                                                                class="align-super text-xx">nd</span> Bi-Weekly
                                                        Installment:
                                                        <span class="font-normal text-sm">CA</span> $889.70</h4>
                                                    <p class="text-sm leading-relaxed text-slate-600">Your final
                                                        installment payment.</p></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:translate-x-full lg:flex lg:flex-col lg:mt-4 lg:py-0 lg:pr-0 lg:pl-6">
                                                    <p class="text-sm font-semibold text-slate-600">April 13, 2022</p>
                                                </div>
                                            </li>
                                            <li class="relative lg:w-1/2 lg:pl-6 lg:ml-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:-translate-x-6">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">Departure Date</h4>
                                                </div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:left-0 lg:bottom-0 lg:-translate-x-full lg:flex lg:flex-col lg:text-right lg:mt-4 lg:py-0 lg:pl-0 lg:pr-6">
                                                    <p class="text-sm font-semibold text-slate-600">April 21, 2022</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div class="rounded-md bg-blue-50 p-4 w-full">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-5 w-5 text-pblue-500" viewBox="0 0 20 20"
                                                         fill="currentColor">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3 flex-1 md:flex md:justify-between"><p
                                                            class="text-sm text-slate-900">Number of bi-weekly
                                                        installments depends on your departure date.</p></div>
                                            </div>
                                        </div>
                                        <div class="rounded-md bg-emerald-50 p-4 w-full">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-5 w-5 text-pblue-500" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3 flex-1 md:flex md:justify-between"><p
                                                            class="text-sm text-slate-900">The total amount must be paid
                                                        in full a week prior to your departure date.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex mt-4"><p class="text-xs text-gray-500">Some conditions do apply.
                                            Please see our
                                            <a href="#" class="text-rose-600">Pay Later Terms</a>.</p></div>
                                </div>
                                <div class="lg:col-span-4">
                                    <div class="aspect-w-2 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                        <img src="<?php echo THEME_IMAGE_HERO . '/mexico-cancun.jpg' ?>"
                                             alt="Maple organizer base with slots, supporting white polycarbonate trays of various sizes."
                                             class="object-center object-cover"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tab="tab3" class="tab-link-body">
                        <div class="flex pt-6"><h3 class="text-lg font-bold text-gray-900">Punta Cana, Dominican
                                Republic</h3></div>
                        <div><p class="text-sm text-gray-400">Taxes included</p></div>
                        <div class="flex-wrap sm:flex sm:space-x-10 my-2 sm:mb-0"><p class="text-sm text-slate-700">
                                Booking Date: <span class="font-bold">March 16, 2022</span></p>
                            <p class="text-sm text-slate-700">Departure Date: <span
                                        class="font-bold">April 21, 2022</span></p>
                            <p class="text-sm text-slate-700">Total: <span class="font-bold">CA $1,929.86</span> (Adult
                                x 2)</p>
                            <p class="text-sm text-slate-700">Total Due Now: <span class="font-bold">CA $625.90</span>
                            </p>
                            <p class="text-sm text-slate-700">Monthly Installments <span
                                        class="font-bold">CA $651.98</span></p></div>
                        <div class="space-y-16 pt-4 lg:pt-10" role="tabpanel">
                            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:gap-x-16">
                                <div class="mt-6 lg:mt-0 lg:col-span-8">
                                    <div class="relative py-12">
                                        <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 flex flex-col justify-center lg:left-1/2 lg:-ml-6">
                                            <div class="mx-auto w-1 h-2.5 grow-0 bg-gradient-to-b from-transparent to-indigo-100 rounded-t"></div>
                                            <div class="mx-auto w-1 grow bg-indigo-100"></div>
                                            <div class="mx-auto w-1 h-2.5 grow-0 bg-gradient-to-t from-transparent to-indigo-100 rounded-b"></div>
                                        </div>
                                        <ul class="relative space-y-4 pl-10 md:pl-12 lg:pl-0">
                                            <li class="relative lg:w-1/2 lg:pr-6 lg:mr-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:translate-x-6 lg:left-auto lg:right-0">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny mb-2 text-slate-800">Booking
                                                        Date</h4>
                                                    <p class="text-sm leading-relaxed text-slate-600">Total due now:
                                                        <span class="font-bold">CA $818.52</span></p>
                                                    <p class="text-sm leading-relaxed text-slate-600">Your first Monthly
                                                        installment will be <span class="font-bold">CA $651.98</span>
                                                    </p></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:translate-x-full lg:flex lg:flex-col lg:mt-4 lg:py-0 lg:pr-0 lg:pl-6">
                                                    <p class="text-sm font-semibold text-slate-600">March 16, 2022</p>
                                                </div>
                                            </li>
                                            <li class="relative lg:w-1/2 lg:pl-6 lg:ml-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:-translate-x-6">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">1<span
                                                                class="align-super text-xx">st</span> Monthly
                                                        Installment:
                                                        <span class="font-normal text-sm">CA</span> $651.98</h4></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:left-0 lg:bottom-0 lg:-translate-x-full lg:flex lg:flex-col lg:text-right lg:mt-4 lg:py-0 lg:pl-0 lg:pr-6">
                                                    <p class="text-sm font-semibold text-slate-600">April 15, 2022</p>
                                                </div>
                                            </li>
                                            <li class="relative lg:w-1/2 lg:pr-6 lg:mr-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:translate-x-6 lg:left-auto lg:right-0">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">2<span
                                                                class="align-super text-xx">nd</span> Monthly
                                                        Installment:
                                                        <span class="font-normal text-sm">CA</span> $651.98</h4></div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:translate-x-full lg:flex lg:flex-col lg:mt-4 lg:py-0 lg:pr-0 lg:pl-6">
                                                    <p class="text-sm font-semibold text-slate-600">May 15, 2022</p>
                                                </div>
                                            </li>
                                            <li class="relative lg:w-1/2 lg:pl-6 lg:ml-auto">
                                                <div class="w-10 md:w-12 absolute top-0 left-0 bottom-0 -translate-x-full flex justify-center mt-5 lg:-translate-x-6">
                                                    <div class="w-3 h-3 bg-indigo-500 rounded-full ring ring-indigo-100 ring-opacity-100 ring-offset-2"></div>
                                                </div>
                                                <div class="bg-gray-100 hover:ring hover:ring-gray-100 hover:ring-offset-2 rounded-xl p-4">
                                                    <h4 class="font-bold text-tiny text-slate-800">Departure Date</h4>
                                                </div>
                                                <div class="px-4 py-2 lg:w-40 lg:absolute lg:top-0 lg:left-0 lg:bottom-0 lg:-translate-x-full lg:flex lg:flex-col lg:text-right lg:mt-4 lg:py-0 lg:pl-0 lg:pr-6">
                                                    <p class="text-sm font-semibold text-slate-600">June 04, 2022</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div class="rounded-md bg-blue-50 p-4 w-full">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-5 w-5 text-pblue-500" viewBox="0 0 20 20"
                                                         fill="currentColor">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3 flex-1 md:flex md:justify-between"><p
                                                            class="text-sm text-slate-900">Number of monthly
                                                        installments depends on your departure date.</p></div>
                                            </div>
                                        </div>
                                        <div class="rounded-md bg-emerald-50 p-4 w-full">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-5 w-5 text-pblue-500" fill="none" viewBox="0 0 24 24"
                                                         stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3 flex-1 md:flex md:justify-between"><p
                                                            class="text-sm text-slate-900">The total amount must be paid
                                                        in full a week prior to your departure date.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex mt-4"><p class="text-xs text-gray-500">Some conditions do apply.
                                            Please see our
                                            <a href="#" class="text-rose-600">Pay Later Terms</a>.</p></div>
                                </div>
                                <div class="lg:col-span-4">
                                    <div class="aspect-w-2 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden sm:aspect-w-2 sm:aspect-h-3">
                                        <img src="<?php echo THEME_IMAGE_HERO . '/dominican-republic.jpg' ?>"
                                             alt="Maple organizer base with slots, supporting white polycarbonate trays of various sizes."
                                             class="object-center object-cover"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>

    <div class="bg-white overflow-hidden">

        <div class="d-flex flex-col lg:flex-row-reverse space-y-16 lg:space-y-0 lg:text-left container xl:max-w-7xl mx-auto px-4 py-16 gap-x-12">
            <div class="lg:w-1/3 lg:mr-16 lg:flex lg:justify-center lg:items-center">
                <div class="lg:w-96 relative">
                    <div class="absolute rounded-full top-0 right-0 w-32 h-32 bg-yellow-200 bg-opacity-50 -mt-12 -mr-12"></div>

                    <div class="absolute rounded-xl bottom-0 left-0 w-32 h-32 bg-blue-200 bg-opacity-50 -mb-10 -ml-10 transform rotate-3"></div>
                    <div class="aspect-w-2 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden sm:aspect-w-1 sm:aspect-h-2">
                        <img src="<?php echo THEME_IMAGE_HERO . '/hero-2.jpg' ?>"
                             alt="Maple organizer base with slots, supporting white polycarbonate trays of various sizes."
                             class="object-center object-cover"></div>
                </div>
            </div>
            <div class="lg:w-2/3 lg:flex">
                <div>
                    <div class="font-medium inline-flex px-2 py-1.5 leading-4 mb-2 text-sm rounded text-emerald-700 bg-emerald-200">
                        Trip Support makes travelling easy for everyone
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Book Now Pay Later Payment Plans</h2>
                    <p class="mt-4 text-gray-700 max-w-4xl prose">Book Now Pay Later allows you to pay off flights in
                        installments. Everyone is eligible for
                        the book now pay later plan with no credit check required. All you have to do is Book Now
                        and Pay using our easy monthly installment options.
                    </p>
                    <div class="lg:w-full lg:flex pt-10">
                        <div><h2 class="text-xl md:text-2xl font-extrabold mb-4">Flights</h2>
                            <p class="mt-4 text-gray-700 max-w-4xl prose">Flights can be one of the costliest expenses
                                you have to make when going on a trip.
                                Whether you’re travelling for work, for visiting family, or for relaxation purposes,
                                flying is almost always an inevitable part of the process, but it doesn’t have to be
                                an expensive part. You can pay off flights in installments with our Book Now, Pay
                                Later Flight plan. Everyone is eligible for a flight payment plan with no credit check
                                required. All you have to do is Book Now and Pay using our easy monthly installment
                                options.
                            </p>
                            <div class="flex w-1/2 flex-col sm:flex-row sm:items-center justify-center lg:justify-start space-y-2 sm:space-y-0 sm:space-x-2 py-6 mb-6">
                                <a href="javascript:void(0)"
                                   class="inline-flex w-full justify-center items-center tracking-wide space-x-2 border font-semibold focus:outline-none text-tiny px-4 py-2.5 rounded-full border-pblue-800 bg-pblue-800 text-white hover:text-white hover:bg-pblue-700 hover:border-pblue-800 focus:ring focus:ring-pblue-500 focus:ring-opacity-50 active:bg-pblue-700 active:border-pblue-700"><span>Book your flight now, pay later</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                         class="opacity-50 hi-solid hi-arrow-right inline-block w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div class="lg:w-full lg:flex lg:items-center">
                        <div><h2 class="text-xl md:text-2xl font-extrabold mb-4">Vacations</h2>
                            <p class="mt-4 text-gray-700 max-w-4xl prose">Everyone has daydreamed about their ideal
                                vacation paradise at least a few times, but
                                for many people who think they can’t afford to go on a vacation, this only stays as a
                                dream. At Trip Support, we believe everyone and anyone should be able to take the trip
                                of their dreams regardless of their financial situation. We do this through our Book
                                Now Pay Later plan for Vacation Packages. Simply decide where you want to go, and
                                we’ll do the rest.
                            </p>
                            <div class="flex w-1/2 flex-col sm:flex-row sm:items-center justify-center lg:justify-start space-y-2 sm:space-y-0 sm:space-x-2 py-6 mb-6">
                                <a href="javascript:void(0)"
                                   class="inline-flex w-full justify-center items-center tracking-wide space-x-2 border font-medium focus:outline-none text-tiny px-4 py-2.5 rounded-full border-pblue-800 bg-pblue-800 text-white hover:text-white hover:bg-pblue-700 hover:border-pblue-800 focus:ring focus:ring-pblue-500 focus:ring-opacity-50"><span>Book your vacation now, pay later</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                         class="opacity-50 hi-solid hi-arrow-right inline-block w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    <div class="lg:w-full lg:flex lg:items-center">
                        <div><h2 class="text-xl md:text-2xl font-extrabold mb-4">Hotels</h2>
                            <h3 class="md:leading-relaxed font-medium text-gray-600">Book Now, Pay Later Feature for
                                hotels is coming soon..
                            </h3></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-8 ">
            <div class="text-left">
                <div class="text-sm uppercase font-bold tracking-wider mb-1 text-rose-600">We take pride in our customer
                    support
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Frequently Asked Questions</h2></div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="space-y-4">
                    <div class="bg-purple-50 rounded p-5"><h4 class="font-semibold mb-2">Why should I book with Trip Support?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">Aside from being the first online travel agent based on “Book Now Pay Later”
                        model in North America, Trip Support is a one-stop shop for all your travel
                        plans. We combine the cheapest prices and the best travel options by directly
                        negotiating the lowest fares with airlines to give you the most value for your
                        trip.
                        </p></div>
                    <div class="bg-gray-100 rounded p-5"><h4 class="font-semibold mb-2">How do I know my booking is confirmed?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">Once we finalize your reservation, you will receive a confirmation email with
                      your itinerary, airline confirmation number and all other details about your
                      trip. You can also view the status of your reservation through your <b>“My Booking Page“</b
                      >
                      available to you at all times.
                        </p></div>
                    <div class="bg-gray-100 rounded p-5"><h4 class="font-semibold mb-2">How do I check-in?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">In person at the airport or you can also check in directly
                        on your airline’s website available only 24 hours before
                        your departure. You need to know your airline confirmation
                        number which can be found on your
                        <b class="text-tb text-gray-800 leading-relaxed"
                          >‘My Booking Page’</b
                        >.
                        </p></div>
                    
                </div>
                <div class="space-y-4">
                    <div class="bg-purple-50 rounded p-5"><h4 class="font-semibold mb-2">How do I get my boarding pass?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3"> After you check-in (either online or in person), the
                        airline will issue your boarding pass. Please note that
                        you can only check-in 24 hours before your departure.
                        </p></div>
                    <div class="bg-gray-100 rounded p-5"><h4 class="font-semibold mb-2">Where can I find my e-ticket number?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">You can find your e-ticket number directly on your
                        <b>‘My Booking Page’</b> on the top right side of the
                        page. You can also find it in your ticket conformation
                        email mentioned’’E-Ticket’’
                        </p></div>
                    <div class="bg-gray-100 rounded p-5"><h4 class="font-semibold mb-2">Do I need a visa for my trip?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">Depending on your destination, you may need to obtain a
                        visa before your travels as many countries will deny you
                        entry if you don’t have the proper documents. You can
                        check your status about the visa in
                        <a class="text-rose-600 hover:text-rose-500" href="#"
                          >https://visacentral.com/</a
                        >
                        </p></div>
                    
                </div>
                <div class="space-y-4">
                    <div class="bg-gray-100 rounded p-5"><h4 class="font-semibold mb-2">I missed my flight, what should I do?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">If you missed your flight, contact your airline [Please connect this page to the
                        Airline list] for further assistance. If something within your control caused
                        you to miss your departing flight, the airline will automatically cancel your
                        entire flight itinerary and the value of your tickets will be lost. If you were
                        issued a multi-ticket booking, which is a roundtrip flight with 2 one-way fares,
                        the airline might only cancel the initial segment of your flight which was
                        missed. Cancellation policies are entirely governed by airlines; any comments,
                        questions or concerns should be directed to them.
                        </p></div>
                    <div class="bg-gray-100 rounded p-5"><h4 class="font-semibold mb-2">What is Trip Support’s cancellation policy?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">Most discounted airline tickets are non-refundable. Although non-refundable
                      tickets are the most economical, they are also the most restrictive and do not
                      allow refunds. These restrictions make it possible for Trip Support to continue
                      to offer better fare prices in addition to our existing deeply discounted
                      airfares.
                        </p></div>
                    <div class="bg-purple-50 rounded p-5"><h4 class="font-semibold mb-2">How do I know my booking is confirmed?</h4>
                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">Once we finalize your reservation, you will receive a confirmation email with
                      your itinerary, airline confirmation number and all other details about your
                      trip. You can also view the status of your reservation through your <b>“My Booking Page“</b
                      >
                      available to you at all times.
                        </p></div>
                    
                </div>
            </div>


            <div class="text-center"><a href="javascript:void(0)"
                                        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                         class="opacity-50 hi-solid hi-external-link inline-block w-5 h-5">
                        <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                    </svg>
                    <span>Can&#39;t find an answer to your question?</span></a></div>
        </div>
    </div>

    <?php get_template_part('template/global/newsletter') ?>
</main>
<script>
    jQuery('.tab-link').click(function () {
        const tab_link_id = jQuery(this).attr('id');
        jQuery('.tab-link-body').removeClass('tab-link-body-active');
        jQuery('.tab-link').removeClass('tab-link-active');
        jQuery(this).addClass('tab-link-active');
        jQuery('div[data-tab="' + tab_link_id + '"]').addClass('tab-link-body-active');
    });
</script>
<style>
    .tab-link-body{
        display: none;
    }
    .tab-link-body-active{
        display: block;
    }
    .tab-link-active{
        --tw-text-opacity: 1;
        color: rgb(225 29 72 / var(--tw-text-opacity));
        --tw-border-opacity: 1;
        border-color: rgb(225 29 72 / var(--tw-border-opacity));
        border-bottom-width: 2px;
        border-style: solid;
    }
</style>
<?php get_footer() ?>

