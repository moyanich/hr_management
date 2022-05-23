<x-app-layout>
    <x-slot name="header">

        <div class="">
            <h3 class="text-gray-600 text-sm flex">
                <a href="" class="text-green-600 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                    Home
                </a>
                 / Dashboard v1
            </h3>
            <div>
                <h1 class="text-2xl mt-1 font-medium"> {{ __('Job Titles') }}</h1>
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
    

        
        <div class="flex justify-between">
            <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase items-center">
                {{ __('Add Job Title') }}
            </h2>
        </div>
    </x-slot>
    
    <x-messages />

    {{-- Content --}}
    <div class="w-10/12 py-10 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow rounded border-0 mb-4 card shadow bg-white px-6 py-10">

            <div class="block w-full overflow-x-auto px-6">
                {!! Form::open(['action' => 'App\Http\Controllers\Admin\JobsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    
                    <div class="flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                {{ Form::label('name', 'Job Title', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2 required']) }}
    
                                {{ Form::text('name', '', ['class' => 'border-0 px-3 py-3 placeholder-blueGray-400 text-gray-600 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) }}
    
                                @error('name')
                                    <p class="text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                {{ Form::label('description', 'Job Description', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
    
                                {{ Form::textarea('description', '', ['class' => 'ckeditor border-0 px-3 py-3 placeholder-blueGray-400 text-gray-600 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'rows' => '4']) }}
    
                                @error('description')
                                    <p class="text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
    
                    <div class="flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                {{ Form::label('file', 'Job Specification', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}
    
                                <input type="file" name="file" class="border-0 px-3 py-3 text-blueGray-600 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">
    
                                @error('file')
                                    <p class="text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
    
                    <div class="w-full flex justify-end">
                        <div class="px-4 py-5">
                            <a href="{{ route('admin.jobs.index') }}" class="btn btn-outline">
                                {{ __('Cancel') }}
                            </a>
    
                            {{ Form::submit('Save', ['class' => 'btn btn-secondary']) }}
                        </div>
                    </div>
    
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    {{-- End Content --}}

</x-app-layout>