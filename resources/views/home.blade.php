<x-main-layout>
    <x-users />

    @if(isset($user))
        <x-message :user="$user" />
    @endif
</x-main-layout>