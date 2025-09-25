<x-app-layout>
    <x-slot name="header">
        {{-- RESPONSIVE: Header dengan padding dan ukuran yang lebih baik untuk mobile --}}
        <div class="bg-gradient-to-r from-teal-900 via-teal-800 to-teal-900 rounded-lg p-3 sm:p-4 lg:p-6 shadow-lg mx-2 sm:mx-0">
            <h2 class="font-bold text-lg sm:text-xl lg:text-2xl text-white leading-tight flex items-center">
                <svg class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 mr-2 sm:mr-3 text-teal-200 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1L13.5 2.5L16.17 5.17C15.24 5.06 14.32 5 13.38 5H10.62C9.68 5 8.76 5.06 7.83 5.17L10.5 2.5L9 1L3 7V9H4.27C5.04 10.81 6.5 12.19 8.34 12.8C7.51 13.5 7 14.63 7 15.86V21H9V15.86C9 14.97 9.62 14.2 10.5 14.04L11.5 21H12.5L13.5 14.04C14.38 14.2 15 14.97 15 15.86V21H17V15.86C17 14.63 16.49 13.5 15.66 12.8C17.5 12.19 18.96 10.81 19.73 9H21Z" />
                </svg>
                <span class="truncate">{{ __('Manajemen Expert') }}</span>
            </h2>
            <p class="text-teal-100 mt-1 sm:mt-2 text-xs sm:text-sm lg:text-base">Kelola daftar expert dan layanan konsultasi.</p>
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
                            <h3 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-gray-100">Kelola Expert</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Tambah, edit, dan hapus expert</p>
                        </div>
                        <a href="{{ route('admin.experts.create') }}" 
                           class="w-full sm:w-auto inline-flex items-center justify-center px-3 sm:px-4 py-2 sm:py-2.5 bg-teal-600 border border-transparent rounded-md font-medium text-xs sm:text-sm text-white uppercase tracking-wide hover:bg-teal-700 focus:bg-teal-700 active:bg-teal-900 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <span class="truncate">Tambah Expert Baru</span>
                        </a>
                    </div>
                </div>

                {{-- Container untuk Tabel & Card View --}}
                <div class="p-3 sm:p-4 lg:p-6">
                    {{-- Desktop Table View --}}
                    <div class="hidden xl:block overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Foto</th>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nama</th>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Kategori</th>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Universitas</th>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Pengalaman</th>
                                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($experts as $expert)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-150">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            @if ($expert->photo_path)
                                                <img src="{{ asset('storage/' . $expert->photo_path) }}" alt="{{ $expert->name }}" class="w-12 h-12 object-cover rounded-full shadow-md ring-2 ring-teal-200">
                                            @else
                                                <div class="w-12 h-12 bg-gradient-to-br from-teal-400 to-teal-600 rounded-full flex items-center justify-center text-white font-bold shadow-md text-sm">
                                                    {{ strtoupper(substr($expert->name, 0, 2)) }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            <div class="max-w-xs truncate" title="{{ $expert->name }}">
                                                {{ $expert->name }}
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <span class="px-2 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-teal-100 text-teal-800 dark:bg-teal-800/20 dark:text-teal-400">
                                                {{ $expert->category }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            <div class="max-w-xs truncate" title="{{ $expert->university ?? '-' }}">
                                                {{ $expert->university ?? '-' }}
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300">
                                            <div class="max-w-xs truncate" title="{{ $expert->experience }}">
                                                {{ Str::limit($expert->experience, 50) }}
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex items-center space-x-3">
                                                <a href="{{ route('admin.experts.edit', $expert->id) }}" 
                                                   class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 transition-colors duration-150">
                                                    Edit
                                                </a>
                                                <form action="{{ route('admin.experts.destroy', $expert->id) }}" method="POST" class="inline delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 delete-btn transition-colors duration-150" data-name="{{ $expert->name }}">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-4 py-8 text-center">
                                            <div class="flex flex-col items-center">
                                                <svg class="w-12 h-12 text-gray-400 dark:text-gray-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                </svg>
                                                <p class="text-gray-500 dark:text-gray-300">Belum ada expert yang ditambahkan.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Mobile/Tablet Card View --}}
                    <div class="grid grid-cols-1 gap-3 sm:gap-4 xl:hidden">
                        @forelse ($experts as $expert)
                            <div class="bg-gray-50 dark:bg-gray-700/50 rounded-lg p-3 sm:p-4 shadow-sm border border-gray-200 dark:border-gray-600 hover:shadow-md transition-shadow duration-150">
                                {{-- Card Header dengan foto dan info utama --}}
                                <div class="flex items-start space-x-3 sm:space-x-4 mb-4">
                                    {{-- Foto Expert --}}
                                    <div class="flex-shrink-0">
                                        @if ($expert->photo_path)
                                            <img src="{{ asset('storage/' . $expert->photo_path) }}" alt="{{ $expert->name }}" class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-full shadow-lg ring-2 ring-teal-200">
                                        @else
                                            <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-teal-400 to-teal-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg text-lg sm:text-xl">
                                                {{ strtoupper(substr($expert->name, 0, 2)) }}
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Info Expert --}}
                                    <div class="flex-1 min-w-0">
                                        <h3 class="font-semibold text-base sm:text-lg text-gray-900 dark:text-gray-100 leading-tight mb-1">
                                            {{ $expert->name }}
                                        </h3>
                                        <div class="mb-2">
                                            <span class="px-2 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-teal-100 text-teal-800 dark:bg-teal-800/20 dark:text-teal-400">
                                                {{ $expert->category }}
                                            </span>
                                        </div>
                                        @if($expert->university)
                                            <p class="text-sm text-gray-600 dark:text-gray-400 truncate">
                                                <span class="font-medium">Universitas:</span> {{ $expert->university }}
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                {{-- Card Content - Pengalaman --}}
                                @if($expert->experience)
                                    <div class="mb-4">
                                        <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100 mb-2">Pengalaman:</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">
                                            {{ $expert->experience }}
                                        </p>
                                    </div>
                                @endif

                                {{-- Card Actions --}}
                                <div class="flex items-center justify-end space-x-4 pt-3 border-t border-gray-200 dark:border-gray-600">
                                    <a href="{{ route('admin.experts.edit', $expert->id) }}" 
                                       class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 transition-colors duration-150">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.experts.destroy', $expert->id) }}" method="POST" class="inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 delete-btn transition-colors duration-150" data-name="{{ $expert->name }}">
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-gray-100">Tidak ada expert</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Mulai dengan menambahkan expert baru.</p>
                                <div class="mt-4">
                                    <a href="{{ route('admin.experts.create') }}" 
                                       class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition ease-in-out duration-150">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        Tambah Expert
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    {{-- Pagination yang responsif --}}
                    @if(method_exists($experts, 'links') && $experts->hasPages())
                        <div class="mt-6 sm:mt-8 border-t border-gray-200 dark:border-gray-700 pt-4 sm:pt-6">
                            {{ $experts->appends(request()->query())->links() }}
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
                            Apakah Anda yakin ingin menghapus expert
                            <span id="expertName" class="font-semibold text-gray-900 dark:text-gray-100 block mt-1"></span>?
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
            const expertNameSpan = document.getElementById('expertName');
            const confirmDeleteBtn = document.getElementById('confirmDelete');
            const cancelDeleteBtn = document.getElementById('cancelDelete');
            let currentForm = null;

            // Handle delete button clicks
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const expertName = this.getAttribute('data-name');
                    currentForm = this.closest('.delete-form');
                    
                    expertNameSpan.textContent = `"${expertName}"`;
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

    {{-- Custom CSS untuk line-clamp dan responsive utilities --}}
    <style>
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        @media (max-width: 640px) {
            .truncate {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        }
    </style>
</x-app-layout>