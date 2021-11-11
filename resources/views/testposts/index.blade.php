@extends('layouts.baseapp')
@section('content')
<div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
    <div class="my-1 bg-white relative z-0">
        <div class="flex items-center justify-between p-2 border-b dark:border-blue-800">
            <a href="/testposts/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-8 ">+ Add Data</a>
            <a href="/testposts/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-8 ">- Delete Data</a>
        </div>
    </div>
    <div class="min-w-screen min-h-screen bg-gray-100 flex mt-5 justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Title</th>
                            <th class="py-3 px-6 text-left">Content</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($post as $key => $value)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$value->title}}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$value->content}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <form id="delete-user-form" action="{{route('testposts.destroy', ['testpost' => $value->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <label>
                                            <div class="flex item-center justify-center">
                                                <input type="submit" name="image" value="delete" class="delete-link" data-id="{{$value->id}}">
                                                {{-- <button onclick="return false" id="delete-link" class="btn btn-danger">Delete</button> --}}
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>     
                                        </label>
                                    </form>
                                    <form action="{{route('testposts.edit', ['testpost' => $value->id])}}" method="POST">
                                        @csrf
                                        @method('GET')
                                        <label>
                                            <div class="flex item-center justify-center">
                                                <input type="submit" name="image" value="edit data">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </div>
                                            </div>     
                                        </label>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@section('customjs')
<script>
$('.delete-link').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        Swal.fire({
                title: 'Are you sure ?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                    )
                    $('#delete-user-form').submit();
                }
            })
        });
</script>
@endsection

@endsection