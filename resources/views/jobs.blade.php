<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <p>Lots and lots of jobs.</p>
@foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{ $job['id'] }}">
            {{ $job['title'] }}: Pays {{ $job['salary'] }} per year
        </a>
    </li>
@endforeach

</x-layout>
