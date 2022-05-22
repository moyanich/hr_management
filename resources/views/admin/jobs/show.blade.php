<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase items-center">
                {{ __('Now Showing: ') }}{{ $job->name }}
            </h2>
        </div>
    </x-slot>
    
    <x-messages />


    {{-- Content --}}

    <div class="w-10/12 py-10 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow rounded border-0 mb-4">
            <div class="block w-full overflow-x-auto">

            </div>
        </div>
    </div>
    {{-- End Content --}}

      {{-- Content --}}
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mx-auto px-6 py-10 mb-6 card shadow">
        <div class="flex justify-end mb-3">
            <button class="flex items-center bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('department-modal')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        </div>
        
        <div class="block w-full overflow-x-auto">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        {{ __('Job Title: ') }}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <h6 class="font-bold underline">{{ $job->name }}</h6>
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        {{ __('Job Description') }}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 pt-5">
                        {!! $job->description !!}
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    {{-- End Content --}}




    {{-- End Content --}}






</x-app-layout>