<x-app-layout>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <!-- Category -->
                    <div>
                        <x-input-label for="category_id" :value="__('Category')" />
                        <select
                            class="border border-gray-300 rounded-md mt-1 w-full focus:border-indigo-500 focus:ring-indigo-500 shadow-sm block"
                            id="category_id" name="category_id">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                    {{ $category->name }}
                                </option>

                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>


                    <!-- Image -->
                    <div class="mt-5">
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full border border-gray-300" type="file"
                            name="image" :value="old('image')" autofocus />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <!-- Title -->
                    <div class="mt-5">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Content -->
                    <div class="mt-5">
                        <x-input-label for="content" :value="__('Content')" />
                        <x-text-inputarea id="content" class="block mt-1 w-full" name="content"
                            autofocus>{{ old('content') }}</x-text-inputarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>


                    <x-primary-button class="mt-5">
                        Submit
                    </x-primary-button>




                </form>
            </div>
        </div>
</x-app-layout>