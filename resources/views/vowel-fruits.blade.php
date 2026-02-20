<x-layout>
    <x-slot:heading>
        Fruits Starting With Vowels
    </x-slot:heading>

    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>

    <p class="mt-4 font-semibold">
        Total: {{ count($fruits) }}
    </p>
</x-layout>
