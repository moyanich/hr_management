<x-app-layout>
    <x-slot name="header">
        <div class="">
            <x-breadcrumbs></x-breadcrumbs> 
    
            <div>
                <h1 class="text-2xl mt-1 font-medium">{{ __('Salary Scales') }}</h1>
            </div>
        </div>
        <div class="md:pt-0 pt-4">
            <button class="px-4 py-2 border text-sm mx-1 border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Publish
            </button>
            <a href="{{ route('admin.jobs.create') }}" class="px-4 py-2 border text-sm mx-1 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                {{ __('Create') }}
            </a>
        </div>
    </x-slot>
    
    <x-messages />

    {{-- Content --}}
    <div class="w-full">
        <div class="bg-white border rounded mx-2 my-4">
            <table id="jobTable" class="table table-compact w-full items-center w-full bg-transparent border-collapse jobs-datatable cell-border">
                <thead class="bg-sky-50">
                    <tr>
                        <th scope="col" class="px-6 bg-sky-50 text-black align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            {{ __('Series') }}
                        </th>
                        <th scope="col" class="px-6 bg-sky-50 text-black align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            {{ __('Segments') }}
                        </th>
                        <th scope="col" class="px-6 bg-sky-50 text-black align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            {{ __('Actions') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
      </div>
    {{-- End Content --}}
   
</x-app-layout>

