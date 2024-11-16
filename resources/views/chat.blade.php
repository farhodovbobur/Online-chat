<x-main-layout>
    <x-users />

    @if(isset($user))
        <div id="chatApp"></div>
    @endif
</x-main-layout>