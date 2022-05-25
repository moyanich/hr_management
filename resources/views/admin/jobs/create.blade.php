<x-app-layout>
    <x-slot name="header">
        <div class="">
            <x-breadcrumbs></x-breadcrumbs> 
    
            <div>
                <h1 class="text-2xl mt-1 font-medium">{{ __('Create Job') }}</h1>
            </div>
        </div>
    </x-slot>

    <x-messages />

    {{-- Content --}}
    <div class="bg-white border rounded mx-2 my-4">
        <div class="py-3 px-4 border-b flex justify-between items-center">
            <h2 class="text-lg font-medium text-gray-700"> {{ __('New Job') }}</h2>
        </div>
        <div class="p-3 text-gray-600">
            {!! Form::open(['action' => 'App\Http\Controllers\Admin\JobsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                <div class="flex flex-wrap">
                    <div class="w-full p-2">
                        {{ Form::label('name', 'Job Title', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}

                        {{ Form::text('name', '', ['class' => 'focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}
                
                        @error('name')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full p-2">
                        {{ Form::label('name', 'Job Description', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}

                        {{ Form::textarea('description', '', ['class' => 'ckeditor  focus:border-blue-400 focus:ring-2 focus:ring-blue-200 focus:outline-none w-full text-base placeholder-gray-400 border border-gray-300 rounded py-1.5 px-3']) }}
                
                        @error('description')
                            <p class="text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full p-2">
                        <div class="relative w-full mb-3">
                            {{ Form::label('file', 'Job Specification', ['class' => 'block text-sm font-bold capitalize text-blueGray-600 mb-2']) }}

                            <input type="file" name="file" class="border-0 px-3 py-3 text-blueGray-600 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">

                            @error('file')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full p-2">
                        <button class="px-4 py-2 text-sm border border-transparent rounded bg-green-500 text-white hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500 transition duration-150 ease-in-out inline-flex items-center">
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
    {{-- End Content --}}

</x-app-layout>

@push('child-scripts')
@include('partials.js.editor')
@endpush