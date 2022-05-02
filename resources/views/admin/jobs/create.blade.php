<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase items-center">
                {{ __('Add Job Title') }}
            </h2>
        </div>
    </x-slot>
    
    <x-messages />

     {{-- Content --}}
     <div class="relative flex flex-col min-w-0 break-words bg-white w-full mx-auto px-6 py-10 mb-6 card shadow">
        <div class="block w-full overflow-x-auto px-6">
            {!! Form::open(['action' => 'App\Http\Controllers\Admin\JobsController@store', 'method' => 'POST']) !!}

                <div class="flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="relative w-full mb-3">
                            {{ Form::label('name', 'Job Title', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}

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
                            {{ Form::label('description', 'Description', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}

                            {{ Form::textarea('description', '', ['class' => 'ckeditor border-0 px-3 py-3 placeholder-blueGray-400 text-gray-600 bg-gray-100 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'rows' => '4']) }}

                            @error('description')
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
    {{-- End Content --}}





</x-app-layout>