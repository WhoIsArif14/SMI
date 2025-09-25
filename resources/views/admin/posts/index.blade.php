<x-app-layout>
    <x-slot name="header">
        {{-- RESPONSIVE: Header dengan padding dan ukuran yang lebih baik untuk mobile --}}
        <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-lg p-3 sm:p-4 lg:p-6 shadow-lg mx-2 sm:mx-0">
            <h2 class="font-bold text-lg sm:text-xl lg:text-2xl text-white leading-tight flex items-center">
                <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 mr-2 sm:mr-3 text-blue-200 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4 3h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm0 2v14h16V5H4zm2 2h8v2H6V7zm0 4h8v2H6v-2zm0 4h5v2H6v-2z"/>
                </svg>
                <span class="truncate">{{ __('Berita') }}</span>
            </h2>
            <p class="text-blue-100 mt-1 sm:mt-2 text-xs sm:text-sm lg:text-base">Panel Kontrol Berita</p>
        </div>
    </x-slot>

    {{-- RESPONSIVE: Padding yang lebih optimal untuk mobile --}}
    <div class="py-6 sm:py-8 lg:py-12">
        <div class="max-w-7xl mx-auto px-3 sm:px-4 lg:px-6 xl:px-8">
            {{-- Notifikasi Flash Message dengan responsive design --}}
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-3 sm:px-4 py-2 sm:py-3 rounded relative mb-4 text-sm sm:text-base" role="alert">
                    <strong class="font-bold">Sukses!</strong>
                    <span class="block sm:inline mt-1 sm:mt-0">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-3 sm:px-4 py-2 sm:py-3 rounded relative mb-4 text-sm sm:text-base" role="alert">
                    <strong class="font-bold">Gagal!</strong>
                    <span class="block sm:inline mt-1 sm:mt-0">{{ session('error') }}</span>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                {{-- RESPONSIVE: Header dengan tombol yang lebih baik untuk mobile --}}
                <div class="p-3 sm:p-4 lg:p-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-4">
                        <div>
                            <h3 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-gray-100">Kelola Berita</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Tambah, edit, dan hapus berita</p>
                        </div>
                        <a href="{{ route('admin.posts.create') }}" 
                           class="w-full sm:w-auto inline-flex items-center justify-center px-3 sm:px-4 py-2 sm:py-2.5 bg-indigo-600 border border-transparent rounded-md font-medium text-xs sm:text-sm text-white uppercase tracking-wide hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <span class="truncate">Tambah Berita Baru</span>
                        </a>
                    </div>
                </div>

                {{-- Container untuk Tabel & Card View --}}
                <div class="p-3 sm:p-4 lg:p-6">
                    {{-- Desktop Table View --}}
                    <div class="hidden lg:block overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Judul</th>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tanggal</th>
                                    <th scope="col" class="px-4 xl:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($posts as $post)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-150">
                                        <td class="px-4 xl:px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            <div class="max-w-xs xl:max-w-sm truncate" title="{{ $post->title }}">
                                                {{ $post->title }}
                                            </div>
                                        </td>
                                        <td class="px-4 xl:px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 py-1 inline-flex text-xs leading-4 font-semibold rounded-full {{ $post->is_published ? 'bg-green-100 text-green-800 dark:bg-green-800/20 dark:text-green-400' : 'bg-red-100 text-red-800 dark:bg-red-800/20 dark:text-red-400' }}">
                                                {{ $post->is_published ? 'Published' : 'Draft' }}
                                            </span>
                                        </td>
                                        <td class="px-4 xl:px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            {{ $post->created_at->format('d M Y') }}
                                        </td>
                                        <td class="px-4 xl:px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex items-center space-x-3">
                                                <a href="{{ route('admin.posts.edit', $post) }}" 
                                                   class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 transition-colors duration-150">
                                                    Edit
                                                </a>
                                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 delete-btn transition-colors duration-150" data-title="{{ $post->title }}">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Mobile/Tablet Card View --}}
                    <div class="grid grid-cols-1 gap-3 sm:gap-4 lg:hidden">
                        @forelse ($posts as $post)
                            <div class="bg-gray-50 dark:bg-gray-700/50 rounded-lg p-3 sm:p-4 shadow-sm border border-gray-200 dark:border-gray-600 hover:shadow-md transition-shadow duration-150">
                                {{-- Card Header --}}
                                <div class="flex items-start justify-between mb-3">
                                    <h3 class="font-semibold text-base sm:text-lg text-gray-900 dark:text-gray-100 leading-tight pr-3 flex-1">
                                        {{ $post->title }}
                                    </h3>
                                    <span class="flex-shrink-0 px-2 py-1 inline-flex text-xs leading-4 font-semibold rounded-full {{ $post->is_published ? 'bg-green-100 text-green-800 dark:bg-green-800/20 dark:text-green-400' : 'bg-red-100 text-red-800 dark:bg-red-800/20 dark:text-red-400' }}">
                                        {{ $post->is_published ? 'Published' : 'Draft' }}
                                    </span>
                                </div>

                                {{-- Card Content --}}
                                <div class="space-y-2 mb-4">
                                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                        <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        Dibuat: {{ $post->created_at->format('d M Y') }}
                                    </div>
                                </div>

                                {{-- Card Actions --}}
                                <div class="flex items-center justify-end space-x-4 pt-3 border-t border-gray-200 dark:border-gray-600">
                                    <a href="{{ route('admin.posts.edit', $post) }}" 
                                       class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 transition-colors duration-150">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 delete-btn transition-colors duration-150" data-title="{{ $post->title }}">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-8 sm:py-12">
                                <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-gray-100">Tidak ada berita</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Mulai dengan menambahkan berita baru.</p>
                                <div class="mt-4">
                                    <a href="{{ route('admin.posts.create') }}" 
                                       class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition ease-in-out duration-150">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        Tambah Berita
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    {{-- Pagination yang responsif --}}
                    @if($posts->hasPages())
                        <div class="mt-6 sm:mt-8 border-t border-gray-200 dark:border-gray-700 pt-4 sm:pt-6">
                            {{ $posts->appends(request()->query())->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- RESPONSIVE: Modal dengan design yang lebih baik --}}
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="flex items-center justify-center min-h-screen px-4 py-8">
            <div class="relative bg-white dark:bg-gray-800 rounded-lg shadow-xl w-full max-w-md mx-auto">
                {{-- Modal Header --}}
                <div class="p-4 sm:p-6">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 dark:bg-red-900/30 rounded-full">
                        <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 15.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="mt-4 text-lg font-semibold text-center text-gray-900 dark:text-gray-100">
                        Konfirmasi Penghapusan
                    </h3>
                    
                    <div class="mt-4 text-center">
                        <p class="text-sm text-gray-600 dark:text-gray-300">
                            Apakah Anda yakin ingin menghapus berita
                            <span id="postTitle" class="font-semibold text-gray-900 dark:text-gray-100 block mt-1"></span>?
                        </p>
                        <p class="text-xs text-red-500 dark:text-red-400 mt-2">
                            Tindakan ini tidak dapat dibatalkan.
                        </p>
                    </div>
                </div>

                {{-- Modal Actions --}}
                <div class="bg-gray-50 dark:bg-gray-700/50 px-4 py-3 sm:px-6 sm:py-4 flex flex-col-reverse sm:flex-row gap-3 sm:gap-4 rounded-b-lg">
                    <button id="cancelDelete" 
                            class="w-full sm:w-auto px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-600 border border-gray-300 dark:border-gray-500 rounded-md hover:bg-gray-50 dark:hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-150 ease-in-out">
                        Batal
                    </button>
                    <button id="confirmDelete" 
                            class="w-full sm:w-auto px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-150 ease-in-out">
                        Ya, Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScript untuk Modal dengan peningkatan UX --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteModal = document.getElementById('deleteModal');
            const postTitleSpan = document.getElementById('postTitle');
            const confirmDeleteBtn = document.getElementById('confirmDelete');
            const cancelDeleteBtn = document.getElementById('cancelDelete');
            let currentForm = null;

            // Handle delete button clicks
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const postTitle = this.getAttribute('data-title');
                    currentForm = this.closest('.delete-form');
                    
                    postTitleSpan.textContent = `"${postTitle}"`;
                    showModal();
                });
            });

            // Confirm delete
            confirmDeleteBtn.addEventListener('click', function() {
                if (currentForm) {
                    // Add loading state
                    this.disabled = true;
                    this.innerHTML = `
                        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Menghapus...
                    `;
                    currentForm.submit();
                }
            });

            // Cancel delete
            cancelDeleteBtn.addEventListener('click', hideModal);

            // Close modal when clicking outside
            deleteModal.addEventListener('click', function(e) {
                if (e.target === deleteModal) {
                    hideModal();
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !deleteModal.classList.contains('hidden')) {
                    hideModal();
                }
            });

            function showModal() {
                deleteModal.classList.remove('hidden');
                // Focus trap
                setTimeout(() => {
                    cancelDeleteBtn.focus();
                }, 100);
                
                // Prevent body scroll
                document.body.style.overflow = 'hidden';
            }

            function hideModal() {
                deleteModal.classList.add('hidden');
                currentForm = null;
                
                // Reset confirm button
                confirmDeleteBtn.disabled = false;
                confirmDeleteBtn.textContent = 'Ya, Hapus';
                
                // Restore body scroll
                document.body.style.overflow = '';
            }
        });
    </script>
</x-app-layout>