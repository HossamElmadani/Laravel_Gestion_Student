<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        @vite('resources/css/app.css')
    </head>
    <body>

@if(session('success'))
<div class="my-2 mx-10">
<div class="mb-3 flex w-full items-center rounded-lg bg-green-300 px-6 py-5 text-base text-green-700" role="alert">
  <span class="mr-2">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="currentColor"
      class="h-5 w-5">
      <path
        fill-rule="evenodd"
        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
        clip-rule="evenodd" />
    </svg>
  </span>
  {{ session('success') }}
</div>
</div>
@endif

<!-- link to add new student  -->
<a class=' float-right border border-slate-400 m-5 rounded-md bg-yellow-100 p-2 mt-7 transition duration-200 hover:bg-yellow-300 ease' href="{{route('students.create')}}">Add student</a>

<!-- show all student  -->
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
  <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Student ID With First Name</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Student Last Name</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Club ID</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Student Details</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900 float-right ">Actions</th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @foreach($eleve as $el)
      <tr class="hover:bg-gray-50">

        <td class="flex gap-3 px-6 py-4 font-normal text-gray-900">
          <div class="relative h-10 w-10">
            <img
              class="h-full w-full rounded-full object-cover object-center"
              src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
              alt=""
            />
            <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
          </div>
          <div class="text-sm">
            <div class="font-medium text-gray-700" name='nom' id='nom'>{{$el->id}} _ {{$el->nom}}</div>
            <div class="text-gray-400">club name : {{$el->club->nom}}</div>
          </div>
        </td>

        <td class="px-6 py-4" name='prenom' id="prenom" >{{$el->prenom}}</td>
        <td class="px-6 py-4">
          <div class="flex gap-2">
            <span name='club_id' id='club_id'
              class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
            >
              {{$el->club_id}}
            </span>
          </div>
        </td>
        <td class="px-6 py-4">
          <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
            <a class="navbar-brand" href="{{ route('students.show', $el->id) }}">Student View</a>
          </span>
        </td>
        <td class="px-6 py-4">
          <div class="flex justify-end gap-4">
            <form method="post" action="{{route('students.destroy',$el->id)}}">
              @csrf
              @method('DELETE')
            <button type='submit' x-data="{ tooltip: 'Delete' }">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                />
              </svg>
            </button>
            <a href="{{ route('students.edit',$el->id) }}" x-data="{ tooltip: 'Edite' }">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                />
              </svg>
            </a>
</form>
          </div>
        </td>
      </tr>
        @endforeach
      
    </tbody>
  </table>
</div>

    
    </body>
</html>