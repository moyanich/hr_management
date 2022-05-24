<x-app-layout>
    <x-slot name="header">
        <div class="">
            <x-breadcrumbs></x-breadcrumbs> 
    
            <div>
                <h1 class="text-2xl mt-1 font-medium">{{ __('Employees') }}</h1>
            </div>
        </div>
        <div class="md:pt-0 pt-4">
            <button class="px-4 py-2 border text-sm mx-1 border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Publish
            </button>
            <a href="{{ route('admin.employees.create') }}" class="px-4 py-2 border text-sm mx-1 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center" type="button">
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
            <table id="employeeTable" class="table table-compact w-full items-center w-full bg-transparent border-collapse employees-datatable cell-border">
                <thead class="bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 bg-secondary text-black align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            {{ __('Name') }}
                        </th>
                       
                        <th scope="col" class="px-6 bg-secondary text-black align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            {{ __('Actions') }}
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($employees as $key => $employee)
                        <tr>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                                <a href="{{ route('admin.employees.show', $employee->id) }}" class="link link-hover">{{ $employee->firstname }}</a>
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-wrap p-4">
                               
                            </td>
                            <td class="flex flex-wrap items-center p-4">
                                <a href="{{ route('admin.employees.show', $employee->id) }}" class="flex items-center btn btn-primary btn-sm mr-2 mb-1" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    {{-- End Content --}}
   
</x-app-layout>

 




   {{-- 
    
    <tbody class="bg-white divide-y divide-gray-200">
    @foreach ($employees as $key => $employee)
        <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                <a href="{{ route('admin.employees.show', $employee->id) }}" class="link link-hover">{{ $employee->name }}</a>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-wrap p-4">
                {!! $employee->description !!}
            </td>
            <td class="flex flex-wrap items-center p-4">
                <a href="{{ route('admin.employees.show', $employee->id) }}" class="flex items-center btn btn-primary btn-sm mr-2 mb-1" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </a>

                <button class="flex items-center btn btn-error btn-sm mb-1" type="button" onclick="toggleModal('employee-delete-{{ $employee->id }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </td>
        </tr>
    @endforeach
</tbody>

--}}