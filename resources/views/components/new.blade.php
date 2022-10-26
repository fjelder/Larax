<div class="container mx-auto min-h-screen bg-white md:flex">
    <!-- sidebar -->
    <div x-data="{ openMenu: false }"
        class="flex flex-col items-center border-b border-gray-300/30 px-2 text-gray-700 md:border-r md:bg-gray-50/30 relative">
        <div class="flex w-full items-center justify-between mt-6 px-2">
            <a href="/" class="">
                <x-ui.logo class="h-12 w-12 md:w-14 md:h-14 text-primary-600" />
            </a>
            <button class="md:hidden" @click="openMenu = true">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <x-mobile-menu />
        {{-- mobile menu --}}
        <div class="z-10 absolute hidden w-full">
            <div class="border rounded-sm m-2 h-full bg-white flex flex-col">
                <x-heroicon-o-x-mark class="h-auto w-12 self-end" />
                <div class="flex-grow border-b">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                    </ul>
                </div>
                <div class="flex justify-end items-center p-2 space-x-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>

                    <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1521587765099-8835e7201186?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                        alt="Rounded avatar" />
                </div>
            </div>
        </div>

        <ul class="my-6 flex flex-grow space-y-0 space-x-8 md:mt-24 md:flex-col md:space-x-0 md:space-y-8">
            <li>
                <a href="#" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="text-sky-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>

    <!-- main part -->
    <div class="flex w-full flex-col bg-white">
        <!-- header -->
        <div class="hidden items-center space-x-10 px-5 pt-4 pb-4 md:flex">
            <div class="w-40 flex-shrink-0">
                <div class="relative z-0">
                    <input type="text" id="floating_standard"
                        class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                        placeholder=" " />
                    <label for="floating_standard"
                        class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500">Zmień
                        kontrakt <span class="font-medium text-sky-600">[id]</span></label>
                </div>
            </div>
            <div class="flex-grow">
                <form>
                    <label for="default-search"
                        class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full rounded-sm border border-gray-300/30 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-sky-500 focus:ring-2 focus:ring-sky-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-sky-500 dark:focus:ring-sky-500"
                            placeholder="Search Mockups, Logos..." required />
                    </div>
                </form>
            </div>
            <img class="h-10 w-10 rounded-full"
                src="https://images.unsplash.com/photo-1521587765099-8835e7201186?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                alt="Rounded avatar" />
        </div>
        <!-- content -->
        <div class="mt-6 flex flex-grow flex-col px-5 md:mt-12">
            <aside class="mb-6 border border-sky-300/30 bg-sky-50/50">
                <div class="p-2">
                    <p class="text-xs font-semibold text-gray-600">Aktualny kontrakt</p>
                    <div class="mt-1 flex items-center justify-between md:justify-start md:space-x-12">
                        <h2>
                            <span class="mr-4 border-b-2 border-sky-700 py-0.5 px-1 text-sm">#150</span>
                            Zgierz - Ozorków
                        </h2>
                        <a href="#" class="text-gray-500 hover:text-sky-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 hover:fill-sky-600"
                                fill="currentColor" viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <polyline points="176 152 224 104 176 56" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></polyline>
                                <path d="M32,200a96,96,0,0,1,96-96h96" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path>
                            </svg>
                            <span class="hidden text-xs md:inline">//zmień</span>
                        </a>
                    </div>
                </div>
            </aside>
            <main class="mb-12">
                <div
                    class="border-b border-gray-200 text-center text-sm font-medium text-gray-500 dark:border-gray-700 dark:text-gray-400">
                    <ul class="-mb-px flex flex-wrap">
                        <li class="mr-2">
                            <a href="#"
                                class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300">Informacje</a>
                        </li>
                        <li class="mr-2">
                            <a href="#"
                                class="active inline-block rounded-t-lg border-b-2 border-blue-600 p-4 text-blue-600 dark:border-blue-500 dark:text-blue-500"
                                aria-current="page">Projekty</a>
                        </li>
                        <li class="mr-2">
                            <a href="#"
                                class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300">Korespondencja</a>
                        </li>
                        <li class="mr-2">
                            <a href="#"
                                class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300">Uzgodnienia</a>
                        </li>
                        <li>
                            <a
                                class="inline-block cursor-not-allowed rounded-t-lg p-4 text-gray-400 dark:text-gray-500">Nieczynne</a>
                        </li>
                    </ul>
                </div>
                <div class="my-6 flex items-start justify-between space-x-6">
                    <div class="px-6 text-sm">
                        <h2 class="text-base font-semibold text-sky-700"><span
                                class="before:content-['#'] after:content-['_→_'] hidden">150</span>Zgierz - Ozorków
                        </h2>
                        <h2 class="mt-4 border-t border-gray-500/30 pt-3 font-medium text-gray-500">Nazwa zadania</h2>
                        <p class="mt-3 text-sm text-gray-500 text-justify" x-data="{ more: false }"
                            @click.outside="more = false">
                            <span class="" x-show="!more">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Autem perferendis quidem quia alias fuga nihil quaerat.
                                Vero, ut iste fugiat doloribus veniam, obcaecati debitis quis aperiam dolorem, nam
                                possimus unde!
                                <span class="text-primary-500 cursor-pointer"
                                    @click="more = true">[więcej]</span></span>

                            <span x-show="more" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, magni. Dolore iure
                                illum aliquam alias est natus hic optio ab reiciendis. Iusto nam quisquam laudantium?
                                Laboriosam voluptatibus facere explicabo voluptate dolore iste odit fuga molestiae,
                                exercitationem autem harum nam laudantium officia quam! Totam error corrupti quibusdam.
                                Rem maiores officia esse?
                                <span class="text-primary-500 cursor-pointer"
                                    @click="more = false">[mniej]</span></span>


                        </p>
                    </div>
                    <button
                        class="flex flex-shrink-0 items-center rounded-sm border-b-2 border-sky-700 p-2 text-sm text-gray-800 shadow transition-all hover:bg-sky-700 hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 lg:mr-4" fill="currentColor"
                            viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"></rect>
                            <path
                                d="M96,216H48a8,8,0,0,1-8-8V163.3a7.9,7.9,0,0,1,2.3-5.6l120-120a8,8,0,0,1,11.4,0l44.6,44.6a8,8,0,0,1,0,11.4Z"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"></path>
                            <line x1="136" y1="64" x2="192" y2="120" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"></line>
                            <polyline points="216 216 96 216 40.5 160.5" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                            <line x1="164" y1="92" x2="68" y2="188" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"></line>
                        </svg>
                        <span class="hidden lg:inline">Edytuj kontrakt</span>
                    </button>
                </div>
                <div class="mt-12 grid gap-x-4 gap-y-10 px-6 text-sm text-gray-900 md:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Indywidualny numer
                            kontraktu</h2>
                        <p class="mt-2">105</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Skrócona nazwa kontraktu
                        </h2>
                        <p class="mt-2">Zgierz - Ozorków</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Numer umowy</h2>
                        <p class="mt-2">65/508/9665/09/Z/I</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Prefix</h2>
                        <p class="mt-2">ZgOz/2022/105</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Data rozpoczęcia</h2>
                        <p class="mt-2">22.04.2019r.</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Data zakończenia</h2>
                        <p class="mt-2">30.09.2021r.</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Status kontraktu</h2>
                        <p class="mt-2">Realizacja</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Stadium kontraktu</h2>
                        <p class="mt-2">Wykonawcze</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Data utworzenia</h2>
                        <p class="mt-2">23.04.2019r.</p>
                    </div>
                    <div>
                        <h2 class="border-t border-gray-500/30 pt-3 font-medium text-gray-500">Data aktualizacji</h2>
                        <p class="mt-2">27.04.2019r.</p>
                    </div>
                </div>
            </main>
        </div>
        <!-- footer -->
        <footer class="hidden border-t px-5 py-3 text-center text-sm text-gray-500 md:block logo-font">
            <div class="scale-50">
                <x-ui.logo-name />
            </div>
        </footer>
    </div>
</div>
