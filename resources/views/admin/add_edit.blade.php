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

               <!-- component -->
                    <div class="heading text-center font-light text-xl mb-6 text-gray-800">
                        @if (isset($post->id)) {{ 'Edit Post' }} @else {{ 'New Post' }} @endif
                    </div>
                        <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
                                <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Title" type="text" name="title" value="@if (isset($post->id)) {{ $post->title }} @else {{ old('title') }} @endif">
                                <textarea class="description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Describe everything about this post here" name="description">@if (isset($post->id)) {{ $post->body }} @else {{ old('body') }} @endif</textarea>
                                    <label class="block mt-3">
                                        <span class="sr-only">Choose profile photo</span>
                                        <input type="file" name="image"  class="block w-full text-sm text-gray-500
                                        file:me-4 file:py-2 file:px-4
                                        file:rounded-lg file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-indigo-500 file:text-white
                                        hover:file:bg-blue-700
                                        file:disabled:opacity-50 file:disabled:pointer-events-none
                                        dark:text-neutral-500
                                        dark:file:bg-blue-500
                                        dark:hover:file:bg-blue-400
                                        ">
                                    </label>

                                    {{-- <div class="w-full my-4" id="imagePreview">
                                        <img src=''>
                                    </div> --}}
                                <!-- buttons -->
                                <div class="buttons flex">
                                <a href="{{route('admin.home')}}" class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</a>
                                <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">
                                    @if (isset($post->id)) {{ 'Update' }} @else {{ ' Post' }} @endif
                                </button>
                        
                                </div>
                            </div>
                         </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</x-app>