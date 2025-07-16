<x-app-layout>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-categories-item />

                </div>
            </div>
            <div class="mt-8 text-gray-900 mb-10">
                @forelse ($posts as $post)
                    <x-post-item :post="$post" />

                @empty
                    <div>
                        <p class="text-gray-600 text-center py-5">No posts found</p>
                    </div>


                @endforelse
            </div>
            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>
</x-app-layout>