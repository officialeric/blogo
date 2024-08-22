<x-app>
    <div class="w-1/2  h-screen overflow-auto">
    <div class="bg-[#4C61A5] sticky top-0 h-16 mt-4 rounded-lg flex items-center px-4 justify-between text-white">
          <div class="">
            Blogo Admin
          </div>

          <div class="">
            <a href="{{ route('admin.logout') }}">
                By Erc Ernst
            </a>
          </div>
    </div>

    <div class="my-12 mx-12 space-y-12">
      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
              <div class="flex justify-between items-center mb-12">
                <div class="">
                  <p class="text-lg font-light ">Posts</p>
                </div>
                <div class="">
                  <a href="{{ route('admin.add') }}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                    Add Post
                  </a>
                </div>
              </div>
              <hr>
              @if (session('success'))
               <div class="mt-2 bg-teal-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-success-label">
                <span id="hs-solid-color-success-label" class="font-bold">!</span> {{session('success')}}
              </div>
              @endif
              <table class="min-w-full divide-y divide-gray-200">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Title</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                  
                  @forelse ($posts as $index => $post)
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $index + 1 }}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $post->title }}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 truncate">{{ $post->body }}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a href="{{ route('admin.edit',['id' => $post->id]) }}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Show</a>
                        <a href="" class="inline-flex items-center ml-3 gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</a>
                      </td>
                    </tr>
                  @empty
                      <tr>
                        <td colspan="4" class="text-center py-3 font-light">No Post Available</td>
                      </tr>
                  @endforelse

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</x-app>