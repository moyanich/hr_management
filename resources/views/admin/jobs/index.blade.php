<x-app-layout>
    <x-slot name="header">
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
        </div>
    </x-slot>
    
    <x-messages />

    {{-- Content --}}
    <div class="w-10/12 py-10 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow rounded border-0 mb-4">
            <div class="block w-full overflow-x-auto">
                <table id="jobTable" class="table table-compact w-full items-center w-full bg-transparent border-collapse jobs-datatable cell-border">
                    <thead class="bg-gray-200">
                        <tr>
                            <th scope="col" class="px-6 bg-blueGray-50 text-black align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                {{ __('Name') }}
                            </th>
                            <th scope="col" class="px-6 bg-blueGray-50 text-black align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                {{ __('Description') }}
                            </th>
                            
                            <th scope="col" class="px-6 bg-blueGray-50 text-black align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                {{ __('Actions') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    
                </table>
            </div>
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