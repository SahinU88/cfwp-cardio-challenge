<div x-data="{ tableView: 0 }">
    <div>
        <div class="sm:hidden">
            <select @change="tableView = $event.target.value" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option :selected="tableView == 0" value="0">Current Week</option>
                <option :selected="tableView == 1" value="1">All-time</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div class="">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <a href="#"
                        class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                        :class="tableView == 0 ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        @click.prevent="tableView = 0"
                    >Current Week</a>
                    <a href="#"
                        class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                        :class="tableView == 1 ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        @click.prevent="tableView = 1"
                    >All-time</a>
                </nav>
            </div>
        </div>
    </div>

    <x-cfwp-user-team-entries-current-week />
    <x-cfwp-user-team-entries-all-time />
</div>
