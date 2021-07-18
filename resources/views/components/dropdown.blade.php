
    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
        <div x-data="{show: false}"  @click.away="show = false">

            {{$trigger}}

            <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl w-full z-50" style="display: none">



                {{$slot}}


            </div>
        </div>
    </div>
