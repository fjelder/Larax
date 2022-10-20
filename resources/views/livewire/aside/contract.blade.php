<div class="flex flex-col flex-shrink-0 w-48 h-full border-r border-gray-200 xl:w-80 dark:border-gray-800 ">
    <!-- top -->
    <div class="p-5 border-b bg-gray-50 border-primary-800">
        <div class="text-xs text-primary-500 tracking-wider underline underline-offset-8 before:content-['#']"> Kontrakty
        </div>
        <div class="mt-5 text-xs tracking-wider text-gray-400">Nawigacja</div>

        <div class="relative flex items-center justify-end space-x-2">
            <input type="text"
                class="w-full text-sm bg-transparent border-0 border-b border-neutral-300 dark:border-neutral-700 dark:text-white focus:ring-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 focus:border-b focus:ring-0 focus:border-primary-500"
                placeholder="ID kontraktu" name="id" wire:keydown.enter="jumpToContract($event.target.value)" />
            <button class="h-full absolute right-2 top-0.5 text-primary-600" type="submit">
                <i class="ph-arrow-elbow-down-left-bold"></i>
            </button>
        </div>



        <div class="flex my-3">
            <div class="flex items-center mr-3">
                <input id="inline-radio" type="radio" value="1" wire:model="checkedStage" wire:click="saveNewStage"
                    name="inline-radio-group"
                    class="w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-radio"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Realiz.</label>
            </div>
            <div class="flex items-center mr-3">
                <input id="inline-2-radio" type="radio" value="2" wire:model="checkedStage" wire:click="saveNewStage"
                    name="inline-radio-group"
                    class="w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-2-radio"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Przygot.</label>
            </div>
            <div class="flex items-center mr-3">
                <input id="inline-checked-radio" type="radio" value="3" wire:model="checkedStage" wire:click="saveNewStage"
                    name="inline-radio-group"
                    class="w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-checked-radio"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Arch.</label>
            </div>
        </div>


        <x-ui.aside.search-input :search=$search />
        <div class="my-4">
            <div class="mb-2 text-xs tracking-wider text-gray-400">Aktywny kontrakt</div>
            <x-ui.aside.contract-block :contract=$active :active=true />
        </div>

    </div>
    <div class="p-5 text-xs tracking-wider text-gray-400">Lista
        kontraktów</div>
    <div class="p-5 pt-0 overflow-y-auto">

        <div class="mt-3 space-y-4">
            @foreach ($contracts as $contract)
                @if ($contract->id !== $active->id)
                    <x-ui.aside.contract-block :contract=$contract :active=false />
                @endif
            @endforeach

            <div class="hidden">
                <button class="flex flex-col w-full p-3 bg-white rounded-md shadow dark:bg-gray-800">
                    <div
                        class="flex flex-col items-center w-full pb-2 mb-2 font-medium text-gray-900 border-gray-200 border-opacity-75 xl:flex-row dark:text-white xl:border-b dark:border-gray-700">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=046c29138c1335ef8edee7daf521ba50"
                            class="mr-2 rounded-full w-7 h-7" alt="profile" />
                        Kathyrn Murphy
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="px-2 py-1 text-xs leading-none rounded-md dark:bg-gray-900 bg-primary-100 text-primary-500">
                            Design</div>
                        <div class="ml-auto text-xs text-gray-500">$1,902.00</div>
                    </div>
                </button>
                <button
                    class="relative flex flex-col w-full p-3 bg-white rounded-md shadow-lg dark:bg-gray-800 ring-2 ring-primary-500 focus:outline-none">
                    <div
                        class="flex flex-col items-center w-full pb-2 mb-2 font-medium text-gray-900 border-gray-200 border-opacity-75 xl:flex-row dark:text-white xl:border-b dark:border-gray-700">
                        <img src="https://assets.codepen.io/344846/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1582611188&width=512"
                            class="mr-2 rounded-full w-7 h-7" alt="profile" />
                        Mert Cukuren
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="px-2 py-1 text-xs leading-none text-green-600 bg-green-100 rounded-md dark:bg-gray-900">
                            Sales</div>
                        <div class="ml-auto text-xs text-gray-500">$2,794.00</div>
                    </div>
                </button>
                <button class="flex flex-col w-full p-3 bg-white rounded-md shadow dark:bg-gray-800">
                    <div
                        class="flex flex-col items-center w-full pb-2 mb-2 font-medium text-gray-900 border-gray-200 border-opacity-75 xl:flex-row dark:text-white xl:border-b dark:border-gray-700">
                        <img src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            class="mr-2 rounded-full w-7 h-7" alt="profile" />
                        Albert Flores
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="px-2 py-1 text-xs leading-none text-yellow-600 bg-yellow-100 rounded-md dark:bg-gray-900">
                            Marketing</div>
                        <div class="ml-auto text-xs text-gray-400">$0.00</div>
                    </div>
                </button>
                <button class="flex flex-col w-full p-3 bg-white rounded-md shadow dark:bg-gray-800">
                    <div
                        class="flex flex-col items-center w-full pb-2 mb-2 font-medium text-gray-900 border-gray-200 border-opacity-75 xl:flex-row dark:text-white xl:border-b dark:border-gray-700">
                        <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                            class="mr-2 rounded-full w-7 h-7" alt="profile" />
                        Jane Cooper
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="px-2 py-1 text-xs leading-none rounded-md dark:bg-gray-900 bg-primary-100 text-primary-500">
                            Design</div>
                        <div class="ml-auto text-xs text-gray-500">$762.00</div>
                    </div>
                </button>
                <button class="flex flex-col w-full p-3 bg-white rounded-md shadow dark:bg-gray-800">
                    <div
                        class="flex flex-col items-center w-full pb-2 mb-2 font-medium text-gray-900 border-gray-200 border-opacity-75 xl:flex-row dark:text-white xl:border-b dark:border-gray-700">
                        <img src="https://images.unsplash.com/photo-1507120878965-54b2d3939100?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=99fbace66d1bfa48c9c6dc8afcac3aab"
                            class="mr-2 rounded-full w-7 h-7" alt="profile" />
                        Ronald Richards
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="px-2 py-1 text-xs leading-none text-green-600 bg-green-100 rounded-md dark:bg-gray-900">
                            Sales</div>
                        <div class="ml-auto text-xs text-gray-400">$0.00</div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
