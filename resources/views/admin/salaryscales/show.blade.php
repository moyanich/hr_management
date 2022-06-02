<x-app-layout>
    <x-slot name="header">
        <div class="">
            <x-breadcrumbs></x-breadcrumbs> 
    
            <div>
                <h1 class="text-2xl mt-1 font-medium">{{ __('Salary Group - ') . $salaryScale->series  }}</h1>
            </div>
        </div>
        <div class="md:pt-0 pt-4">
            <a href="{{ route('admin.jobs.create') }}" class="px-4 py-2 border text-sm mx-1 rounded bg-white hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white transition duration-150 ease-in-out inline-flex items-center" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                {{ __('Create') }}
            </a>
        </div>
    </x-slot>
    
    <x-messages />


    <div class="w-full mx-auto">

        {!! Form::open(['action' => ['App\Http\Controllers\Admin\SalaryScalesController@update', $salaryScale->id], 'method' => 'POST']) !!}

            <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
                <div class="py-3 px-4 border-b flex justify-between items-center">
                    <h2 class="text-lg font-medium text-gray-700"> {{ __('Edit Scale') }}</h2>

                    <button class="px-4 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                        {{ __('Update') }}
                    </button>
                    
                </div>
                    
                <div class=" p-3 text-gray-600">
                    
                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('series', 'Group', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2 pr-4']) }}
                        </div>
                        <div class="md:w-80 relative">
                            {{ Form::text('series', $salaryScale->series, ['class' => 'focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            @error('series')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('group', 'Code', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            {{ Form::text('group', strtoupper($salaryScale->group), ['class' => 'focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}
                        
                            @error('group')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('scale1', 'Scale 1', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{ __('$') }}
                            </div>
                            {{ Form::text('scale1', formatCurrency($salaryScale->scale1), ['class' => 'pl-8 pl-8 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            @error('scale1')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('scale2', 'Scale 2', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{ __('$') }}
                            </div>
                            {{ Form::text('scale2', formatCurrency($salaryScale->scale2), ['class' => 'pl-8 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            @error('scale2')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('scale3', 'Scale 3', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{ __('$') }}
                            </div>
                            {{ Form::text('scale3', formatCurrency($salaryScale->scale3), ['class' => 'pl-8 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            @error('scale3')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('scale4', 'Scale 4', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{ __('$') }}
                            </div>
                            {{ Form::text('scale4', formatCurrency($salaryScale->scale4), ['class' => 'pl-8 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            @error('scale4')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('scale5', 'Scale 5', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{ __('$') }}
                            </div>
                            {{ Form::text('scale5', formatCurrency($salaryScale->scale5), ['class' => 'pl-8 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            @error('scale5')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('scale6', 'Scale 6', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{ __('$') }}
                            </div>
                            {{ Form::text('scale6', formatCurrency($salaryScale->scale6), ['class' => 'pl-8 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            @error('scale6')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('scale7', 'Scale 7', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{ __('$') }}
                            </div>
                            {{ Form::text('scale7', formatCurrency($salaryScale->scale7), ['class' => 'pl-8 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            @error('scale7')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-2">
                        <div class="md:w-40">
                            {{ Form::label('scale8', 'Scale 8', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
                        </div>
                        <div class="md:w-80 relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{ __('$') }}
                            </div>
                            {{ Form::text('scale8', formatCurrency($salaryScale->scale8), ['class' => 'pl-8 focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}

                            {{-- Form::text('scale8','$'.formatCurrency($salaryScale->scale8),['class'=>'focus:border-blue-400focus:ring-2focus:ring-blue-200focus:outline-nonew-fulltext-baseplaceholder-gray-400borderborder-gray-300roundedpy-1.5px-3']) --}}
                            @error('scale8')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                
                </div>
            </div>
            {{Form::hidden('_method', 'PUT') }}
        {!! Form::close() !!}

    </div>
   


    {{-- Content --}}
   {{--  <div class="w-full">
        <div class="mx-auto">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                <table id="salaryTable"  class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr>

                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('Group') }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $salaryScale->series }}
                            </td>
                        </tr>


                        <tr>

                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('Code') }}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ strtoupper($salaryScale->group) }}
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-3">Scale 1</td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('$') . formatCurrency($salaryScale->scale1) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Scale 2</td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('$') . formatCurrency($salaryScale->scale2) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Scale 3</td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('$') . formatCurrency($salaryScale->scale3) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Scale 4</td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('$') . formatCurrency($salaryScale->scale4) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Scale 5</td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('$') . formatCurrency($salaryScale->scale5) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Scale 6</td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('$') . formatCurrency($salaryScale->scale6) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Scale 7</td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('$') . formatCurrency($salaryScale->scale7) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Scale 8</td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('$') . formatCurrency($salaryScale->scale8) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-right">
                                <button id="editBtn" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                                {{--  <a href="{{route('admin.salaryscales.edit',$salaryScale->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>--}}
    {{-- End Content --}}
   

  
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