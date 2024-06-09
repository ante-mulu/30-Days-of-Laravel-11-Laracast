<x-layout>
    <x-slot:heading>
       Edit job:{{ $job->title }}
    </x-slot:heading>
<form action="{{ route('jobs.update',$job->id) }}" method="post" >
    @csrf
    @method('patch')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        </div>
      </div>
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create new job</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Please insert your job info</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Job title</label>
            <div class="mt-2">
              <input
              type="text"
              name="title" id="title"
              class="block w-full rounded-md border-0 py-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 "
               placeholder="Software developer"
               value="{{ $job->title }}">
            </div>
            @error('title')
            <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
            @enderror
          </div>

        </div>
      </div>
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
            <div class="mt-2">
              <input type="text" name="salary" id="salary" autocomplete="given-name" class="block w-full rounded-md border-0 py-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="$46000 per Month"  value="{{ $job->salary }}">
            </div>
            @error('salary')
           <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
          </div>

        </div>
      </div>
    </div>
    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div>
            <button form="delete-form" class="rounded-md bg-red-500 px-3 py-1  text-sm font-semibold text-white shadow-sm hover:bg-red-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
        </div>
            <div class="flex items-center gap-x-6">
              <a href="{{ route('jobs.show',$job->id) }}" type="button" class="text-sm font-semibold leading-6 text-gray-900" >Cancel</a>
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-1  text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
    </div>

  </form>
  <form method="post" action="{{ route('jobs.delete',$job->id) }}"   id="delete-form"  class="hidden">
    @csrf
    @method('delete')
  </form>

</x-layout>
