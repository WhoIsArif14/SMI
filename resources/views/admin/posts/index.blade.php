<x-app-layout>
     <x-slot name="header">
    <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-lg p-6 shadow-lg">
        <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
            <svg class="w-8 h-8 mr-3 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                {{-- Ikon Koran --}}
                <path d="M4 3h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm0 2v14h16V5H4zm2 2h8v2H6V7zm0 4h8v2H6v-2zm0 4h5v2H6v-2z"/>
            </svg>
            {{ __('Berita') }}
        </h2>
        <p class="text-blue-100 mt-2">Panel Kontrol Berita</p>
    </div>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Notifikasi Flash Message --}}
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Sukses!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l3.029-2.651-3.029-2.651a1.2 1.2 0 1 1 1.697-1.697l2.651 3.029 2.651-3.029a1.2 1.2 0 0 1 1.697 1.697l-3.029 2.651 3.029 2.651a1.2 1.2 0 0 1 0 1.697z"/></svg>
                    </span>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Gagal!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l3.029-2.651-3.029-2.651a1.2 1.2 0 1 1 1.697-1.697l2.651 3.029 2.651-3.029a1.2 1.2 0 0 1 0 1.697z"/></svg>
                    </span>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-end mb-6">
                    <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        <svg class="me-2 -ms-0.5 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Tambah Berita Baru
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Judul</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tanggal Dibuat</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $post->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $post->is_published ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ $post->is_published ? 'Published' : 'Draft' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ $post->created_at->format('d M Y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('admin.posts.edit', $post) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600 me-3">Edit</a>
                                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600 delete-btn" data-title="{{ $post->title }}">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300 text-center">Belum ada berita yang ditambahkan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Custom Delete Confirmation Modal --}}
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white dark:bg-gray-800">
            <div class="mt-3 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 dark:bg-red-900/30">
                    <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 15.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                </div>
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100 mt-2">Konfirmasi Hapus</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500 dark:text-gray-300">
                        Apakah Anda yakin ingin menghapus berita 
                        <span id="postTitle" class="font-semibold text-gray-700 dark:text-gray-200"></span>?
                    </p>
                    <p class="text-xs text-red-500 dark:text-red-400 mt-1">
                        Tindakan ini tidak dapat dibatalkan.
                    </p>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="confirmDelete" class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md w-24 mr-2 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 transition duration-150 ease-in-out">
                        Hapus
                    </button>
                    <button id="cancelDelete" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md w-24 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-150 ease-in-out">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScript for Modal --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = document.getElementById('deleteModal');
            const postTitleSpan = document.getElementById('postTitle');
            const confirmDeleteBtn = document.getElementById('confirmDelete');
            const cancelDeleteBtn = document.getElementById('cancelDelete');
            let currentForm = null;

            // Add click event to all delete buttons
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const postTitle = this.getAttribute('data-title');
                    const form = this.closest('.delete-form');
                    
                    postTitleSpan.textContent = `"${postTitle}"`;
                    currentForm = form;
                    deleteModal.classList.remove('hidden');
                    
                    // Add fade-in animation
                    deleteModal.style.opacity = '0';
                    setTimeout(() => {
                        deleteModal.style.opacity = '1';
                        deleteModal.style.transition = 'opacity 0.3s ease-in-out';
                    }, 10);
                });
            });

            // Confirm delete
            confirmDeleteBtn.addEventListener('click', function() {
                if (currentForm) {
                    currentForm.submit();
                }
            });

            // Cancel delete
            cancelDeleteBtn.addEventListener('click', function() {
                hideModal();
            });

            // Close modal when clicking outside
            deleteModal.addEventListener('click', function(e) {
                if (e.target === deleteModal) {
                    hideModal();
                }
            });

            // Close modal with ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !deleteModal.classList.contains('hidden')) {
                    hideModal();
                }
            });

            function hideModal() {
                deleteModal.style.opacity = '0';
                setTimeout(() => {
                    deleteModal.classList.add('hidden');
                    currentForm = null;
                }, 300);
            }
        });
    </script>
</x-app-layout>