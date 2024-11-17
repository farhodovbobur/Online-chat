<x-main-layout>
    <x-users/>


        <div class="xl:col-span-9 lg:col-span-7 md:col-span-7">
            <div id="chatApp">
                <App
                    :auth="{{ json_encode(auth()->user()) }}">
                </App>
            </div>
        </div>

</x-main-layout>