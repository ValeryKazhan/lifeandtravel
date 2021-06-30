@props(['key', 'list', 'listName'])


    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
        <div x-data="{show: false}">
            <button @click="show = !show" class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left inline-flex"
            >{{ isset($currentElement) ? $list : $listName}}
                <x-arrow-sign/>
            </button>

            <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl w-full z-50" style="display: none">

                <x-link
                    :name="'All'"
                    :link="'\\'"
                />

                <x-url-elements-list
                    :key="$key"
                    :list="$list"/>
            </div>
        </div>
    </div>
