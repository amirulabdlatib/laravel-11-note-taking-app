<x-layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Your Notes</h1>
                <a href="{{ route('notes.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center transition duration-300 ease-in-out">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add Note
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($notes as $note)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-colors duration-300">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $note->title }}
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ Str::limit($note->content, 100) }}</p>
                            <div class="flex justify-between items-center">
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400">{{ $note->created_at->diffForHumans() }}</span>
                                <a href="{{ route('notes.show', $note) }}"
                                    class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 transition duration-300 ease-in-out">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-600 dark:text-gray-300">You don't have any notes yet. Create one to get
                            started!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>
