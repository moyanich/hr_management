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
    

        {{--  
        <div class="flex justify-between">
            <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase items-center">
                {{ __('Job Titles') }}
            </h2>
            <div class="flex-shrink-0 space-x-2">
                <a href="{{ route('admin.jobs.create') }}" class="btn btn-sm" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    {{ __('New Job') }}
                </a>
            </div>
        </div>--}}
    </x-slot>
    
    <x-messages />

    {{-- Content --}}

    <div class="card w-full bg-white text-primary-content">
        <div class="card-body">
          
            <table id="jobTable" class="table table-compact w-full items-center w-full bg-transparent border-collapse jobs-datatable cell-border">
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
                <tbody>
                </tbody>
                
            </table>


        </div>
      </div>


  
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow rounded border-0 mb-4 ">
            <div class="block w-full overflow-x-auto">
               
            </div>
        </div>
    
    {{-- End Content --}}
   
    

</x-app-layout>

 
<script type="text/javascript">
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.jobs-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.jobs.index') }}",
            columns: [
                { data: 'name', name: 'name' },
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
        });
    });
</script>


{{-- 
<script type="text/javascript">
    $(function () {
      
        var table = $('.jobs-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.jobs.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
        });
      
    });
  </script>
   --}}



   {{-- 
    
    <tbody class="bg-white divide-y divide-gray-200">
    @foreach ($jobs as $key => $job)
        <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                <a href="{{ route('admin.jobs.show', $job->id) }}" class="link link-hover">{{ $job->name }}</a>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-wrap p-4">
                {!! $job->description !!}
            </td>
            <td class="flex flex-wrap items-center p-4">
                <a href="{{ route('admin.jobs.show', $job->id) }}" class="flex items-center btn btn-primary btn-sm mr-2 mb-1" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </a>

                <button class="flex items-center btn btn-error btn-sm mb-1" type="button" onclick="toggleModal('job-delete-{{ $job->id }}')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </td>
        </tr>
    @endforeach
</tbody>

--}}