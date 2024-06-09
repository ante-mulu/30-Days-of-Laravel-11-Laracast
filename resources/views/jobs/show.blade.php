<x-layout>
    <x-slot:heading>
        Job Detail
    </x-slot:heading>
    <Strong><h1 style="color: red">{{$job['title']}}</h1></Strong>
    <h1>{{$job['salary']}}</h1>
    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
    </p>

</x-layout>
