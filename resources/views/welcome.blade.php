<x-app>
    <div class="w-1/2  h-screen overflow-auto">
    <div class="bg-[#4C61A5] sticky top-0 h-16 mt-4 rounded-lg flex items-center px-4 justify-between text-white">
          <div class="">
            Blogo
          </div>

          <div class="">
            <a href="{{ route('admin.index') }}">
                By Erc Ernst
            </a>
          </div>
    </div>

    <div class="my-12 mx-24 space-y-12">

        @forelse ($posts as $post)
        <div class="space-y-3 hover:bg-slate-200 p-2 rounded-2xl">
            <div class="flex justify-between items-center">
                <div class="flex gap-3">
                    <div class="">
                        <img src="data:image/png;base64,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" 
                            alt=""
                            class="w-12 h-12 rounded-2xl">
                    </div>
                    <div class="">
                    <div class="">{{ $post->author->name }}</div>
                    <div class="font-light">Admin</div>
                    </div>
                </div>
                <div class="">
                    <div class="font-light text-sm">{{ 'Now' }}</div>
                </div>
            </div>
            <div class="">
                <p class="text-sm">
                    <p class="truncate">{{ $post->title }}</p>
                    <a href="" class="text-[#4C61A5]">Read more...</a>
                </p>
            </div>
            <div class="w-full">
            <img src="{{ asset('storage/images/' . $post->image) }}" 
                    alt=""
                    class="h-full w-full rounded-lg">
            </div>
        </div>
        @empty
            <h1 class="text-center">No Post Yet!</h1>
        @endforelse

    </div>
    </div>
</x-app>