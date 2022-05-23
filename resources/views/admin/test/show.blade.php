<x-app-layout>

    <x-slot name="header">
        <div class="">
            <x-breadcrumbs></x-breadcrumbs> 
    
            <div>
                <h1 class="text-2xl mt-1 font-medium">{{ __('Job Titles') }}</h1>
            </div>
        </div>
        <div class="md:pt-0 pt-4">

            <button class="px-4 py-2 border text-sm mx-1 border-transparent rounded bg-red-500 text-white hover:bg-red-400 focus:outline-none focus:border-red-500 focus:shadow-outline-red active:bg-red-500 transition duration-150 ease-in-out inline-flex items-center" type="button" onclick="toggleModal('job-modal')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                {{ __('Delete') }}
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
            <div class="py-3 px-4 border-b flex justify-between items-center">
                <h2 class="text-lg font-medium text-gray-700"> {{ __('Job Title: ') }}</h2>
                @if($job->file_path)
                <a href="{{ asset('storage/files/'.$job->file_path)}}" class="btn btn-sm" target="_blank">View Existing Job File</a>
            @endif
            </div>
            <div class="p-3 text-gray-600">
                {!! Form::open(['action' => ['App\Http\Controllers\Admin\JobsController@update', $job->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="flex flex-wrap">
                        <div class="w-full p-2">
                            {{ Form::label('name', 'Job Title', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}

                            {{ Form::text('name', $job->name, ['class' => 'focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}
                       
                            @error('name')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full p-2">
                            {{ Form::label('name', 'Job Description', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}

                            {{ Form::textarea('description', $job->description, ['class' => 'ckeditor focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}
                       
                            @error('description')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="w-full p-2">
                            <div class="relative w-full mb-3">
                                {{ Form::label('file', 'Job Specification', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
        
                                <input type="file" name="file_update" class="border-0 px-3 py-3 text-blueGray-600 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
        
                                @error('file_update')
                                    <p class="text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full p-2">
                            <button class="px-4 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                {{Form::hidden('_method', 'PUT') }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    {{-- End Content --}}


    <!-- The button to open modal -->





</x-app-layout>


{{-- Delete Modal --}}
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="job-modal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/exclamation -->
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Delete record
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                Are you sure you want to delete the record for <strong>{{ $job->name }}</strong>? All of your data will be permanently removed. This action cannot be undone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                <!-- Form -->
                {!! Form::open(['action' => ['App\Http\Controllers\Admin\JobsController@destroy', $job->id], 'method' => 'POST']) !!}

                {{ Form::submit('Delete', ['class' => 'w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm']) }}

                {{Form::hidden('_method', 'DELETE') }}
                {!! Form::close() !!}
              
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleModal('job-modal')">
                    {{ __('Cancel') }}
                </button>
            </div>
        </div>
    </div>
</div>