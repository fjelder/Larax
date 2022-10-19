<div class="xl:w-80 w-48 flex-shrink-0 border-r border-gray-200 dark:border-gray-800 h-full flex flex-col ">
    <!-- top -->
    <div class="p-5 bg-gray-50 border-primary-800 border-b">
        <div class="text-xs text-primary-500 tracking-wider underline underline-offset-8 before:content-['#']"> Kontrakty
        </div>
        <div class="text-xs text-gray-400 tracking-wider mt-5">Nawigacja</div>

        <div class="flex items-center space-x-2 justify-end relative">
            <input type="text"
                class="bg-transparent border-b border-0 border-neutral-300 dark:border-neutral-700 dark:text-white w-full text-sm focus:ring-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 focus:border-b focus:ring-0 focus:border-primary-500"
                placeholder="ID kontraktu" name="id" wire:keydown.enter="jumpToContract($event.target.value)" />
            <button class="h-full absolute right-2 top-0.5 text-primary-600" type="submit">
                <i class="ph-arrow-elbow-down-left-bold"></i>
            </button>
        </div>



        <div class="flex my-1">
            <div class="flex items-center mr-3">
                <input id="inline-radio" type="radio" value="1" wire:model="checkedStage"
                    name="inline-radio-group"
                    class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-radio"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Realiz.</label>
            </div>
            <div class="flex items-center mr-3">
                <input id="inline-2-radio" type="radio" value="2" wire:model="checkedStage"
                    name="inline-radio-group"
                    class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-2-radio"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Przygot.</label>
            </div>
            <div class="flex items-center mr-3">
                <input id="inline-checked-radio" type="radio" value="3" wire:model="checkedStage"
                    name="inline-radio-group"
                    class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-checked-radio"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Arch.</label>
            </div>
        </div>


        <x-ui.aside.search-input :search=$search />
        <div class="my-4">
            <div class="text-xs text-gray-400 tracking-wider mb-2">Aktywny kontrakt</div>
            <x-ui.aside.contract-block :contract=$active :active=$active />
        </div>

    </div>
    <div class="text-xs text-gray-400 tracking-wider p-5">Lista
        kontraktów</div>
    <div class="overflow-y-auto p-5 pt-0">

        <div class="space-y-4 mt-3">
            @foreach ($contracts as $contract)
                @if ($contract->id !== $active->id)
                    <x-ui.aside.contract-block :contract=$contract :active=$active />
                @endif
            @endforeach

            <div class="hidden">
                <button class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
                    <div
                        class="flex xl:flex-row flex-col items-center font-medium text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=046c29138c1335ef8edee7daf521ba50"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile" />
                        Kathyrn Murphy
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-primary-100 text-primary-500 rounded-md">
                            Design</div>
                        <div class="ml-auto text-xs text-gray-500">$1,902.00</div>
                    </div>
                </button>
                <button
                    class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow-lg relative ring-2 ring-primary-500 focus:outline-none">
                    <div
                        class="flex xl:flex-row flex-col items-center font-medium text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="https://assets.codepen.io/344846/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1582611188&width=512"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile" />
                        Mert Cukuren
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-green-100 text-green-600 rounded-md">
                            Sales</div>
                        <div class="ml-auto text-xs text-gray-500">$2,794.00</div>
                    </div>
                </button>
                <button class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
                    <div
                        class="flex xl:flex-row flex-col items-center font-medium text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile" />
                        Albert Flores
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-yellow-100 text-yellow-600 rounded-md">
                            Marketing</div>
                        <div class="ml-auto text-xs text-gray-400">$0.00</div>
                    </div>
                </button>
                <button class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
                    <div
                        class="flex xl:flex-row flex-col items-center font-medium text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile" />
                        Jane Cooper
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-primary-100 text-primary-500 rounded-md">
                            Design</div>
                        <div class="ml-auto text-xs text-gray-500">$762.00</div>
                    </div>
                </button>
                <button class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
                    <div
                        class="flex xl:flex-row flex-col items-center font-medium text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="https://images.unsplash.com/photo-1507120878965-54b2d3939100?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=99fbace66d1bfa48c9c6dc8afcac3aab"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile" />
                        Ronald Richards
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-green-100 text-green-600 rounded-md">
                            Sales</div>
                        <div class="ml-auto text-xs text-gray-400">$0.00</div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
