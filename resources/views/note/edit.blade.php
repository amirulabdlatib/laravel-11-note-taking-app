<x-layout>
    <div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gray-100 sm:px-6 lg:px-8 dark:bg-gray-900">
        <div class="w-full max-w-sm space-y-8 sm:max-w-md">
            <div class="bg-white rounded-lg shadow dark:bg-gray-800 dark:border dark:border-gray-700">
                <div class="p-6 sm:p-8">
                    <h1
                        class="mb-6 text-xl font-bold leading-tight tracking-tight text-gray-900 sm:text-2xl dark:text-white text-center">
                        Update form </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('notes.update',$note) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" name="title" id="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter note title" value="{{ old('title', $note->title) }}">
                            @error('title')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea name="description" id="description" rows="4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter note description">{{ old('description', $note->description) }}</textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300 ease-in-out">
                            Update note
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
