<x-app-layout>
    <x-slot name="header">
        <div class="">
            <x-breadcrumbs></x-breadcrumbs> 
    
            <div>
                <h1 class="text-2xl mt-1 font-medium">{{ __('Edit Salary - ') . $salaryScale->group  }}</h1>
            </div>
        </div>
        <div class="md:pt-0 pt-4">
            <button class="px-4 py-2 border text-sm mx-1 border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                {{ __('Update') }}
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
        <div class="mx-auto">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                <table id="salaryTable"  class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Group') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Code') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Scale 1') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Scale 2') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Scale 3') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Scale 4') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Scale 5') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Scale 6') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Scale 7') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Scale 8') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $salaryScale->series }}
                            </th>
                            <td class="px-6 py-4">
                                {{ strtoupper($salaryScale->group) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __('$') . formatCurrency($salaryScale->scale1) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __('$') . formatCurrency($salaryScale->scale2) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __('$') . formatCurrency($salaryScale->scale3) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __('$') . formatCurrency($salaryScale->scale4) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __('$') . formatCurrency($salaryScale->scale5) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __('$') . formatCurrency($salaryScale->scale6) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __('$') . formatCurrency($salaryScale->scale7) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __('$') . formatCurrency($salaryScale->scale8) }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button id="editBtn" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                                {{--  <a href="{{route('admin.salaryscales.edit',$salaryScale->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- End Content --}}
   

    <div id="newScale" class="newScale hidden">
    This is my DIV element.
    </div>


</x-app-layout>


<script>
   document.querySelector('#editBtn').addEventListener('click', editScale);

   function editScale() {
       $element = document.querySelector('#newScale');
        if($element.classList.contains('hidden')) {
                $element.classList.remove('hidden');
                $element.classList.add('visible');
        } else if ( $element.classList.contains('visible')) {
            $element.classList.add('hidden');
                $element.classList.remove('visible');
        }
       
   
    }
</script>