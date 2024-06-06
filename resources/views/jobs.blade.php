<x-layout>
    <x-slot:heading>
        Available Job
    </x-slot:heading>
    <Strong><h1 style="color: red">Job Available</h1></Strong>
    @foreach ($jobs as $job)
        <li class="text-blue-400 underline"><a href="/jobs/{{$job['id']}}"><strong>{{$job['title']}}</strong>: ${{$job['salary']}}</a></li>
    @endforeach
</x-layout>
