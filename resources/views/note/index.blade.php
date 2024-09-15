<x-layout>
    Welcome {{ auth()->user()->name??'unauthenticated user' }}
</x-layout>