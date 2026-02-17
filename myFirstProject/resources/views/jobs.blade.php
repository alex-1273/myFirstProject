<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <p>Lots and lots of jobs.</p>
    @foreach ($jobs as $job)
        <li>{{ $job['title']}}: Pays {{ $job['salary']}} Per year</li>
    @endforeach
</x-layout>
