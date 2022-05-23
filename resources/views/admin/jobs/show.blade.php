<x-app-layout>
    <x-slot name="header">
        <div class="">
            <h3 class="text-gray-600 text-sm flex">
                <a href="{{ route('admin.dashboard.index') }}" class="text-green-600 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                    Home
                </a>
                <span class="mr-2 ml-2">/ </span>
                <a href="{{ route('admin.jobs.index') }}" class="">
                    {{ __('Jobs') }}
                </a>
                
                <span class="mr-2 ml-2">/ </span>{{ __('Job Titles') }}
            </h3>
            <div>
                <h1 class="text-2xl mt-1 font-medium">{{ $job->name }}</h1>
            </div>
        </div>
    
        <div class="md:pt-0 pt-4">
            <button class="px-4 py-2 border text-sm mx-1 border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                  </svg>
                Publish
            </button>
            <button class="px-4 py-2 border text-sm mx-1 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                  </svg>
                Create
            </button>
        </div>
    
        
    </x-slot>
    
    <x-messages />

    {{-- Content --}}

    <div class="card w-full bg-white text-primary-content">
        <div class="card-body">

nrr
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




</x-app-layout>