<x-app-layout>
    <x-slot name="header">
    <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-lg p-6 shadow-lg">
        <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
            <svg class="w-8 h-8 mr-3 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                {{-- Ikon Grup Pengguna --}}
                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
            </svg>
            {{ __('Klien') }}
        </h2>
        <p class="text-blue-100 mt-2">Panel Kontrol Klien</p>
    </div>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('admin.clients.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Tambah Klien Baru
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Nama Klien
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Logo
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($clients as $client)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                            {{ $client->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                            {{ $client->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                            @if ($client->logo)
                                                <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" class="h-10 w-auto object-contain">
                                            @else
                                                Tidak ada logo
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.clients.edit', $client) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600 mr-3">Edit</a>
                                            <form action="{{ route('admin.clients.destroy', $client) }}" method="POST" class="inline-block delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600 delete-btn" data-name="{{ $client->name }}">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">Belum ada klien.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $clients->links() }}
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
                        Apakah Anda yakin ingin menghapus klien 
                        <span id="clientName" class="font-semibold text-gray-700 dark:text-gray-200"></span>?
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
            const clientNameSpan = document.getElementById('clientName');
            const confirmDeleteBtn = document.getElementById('confirmDelete');
            const cancelDeleteBtn = document.getElementById('cancelDelete');
            let currentForm = null;

            // Add click event to all delete buttons
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const clientName = this.getAttribute('data-name');
                    const form = this.closest('.delete-form');
                    
                    clientNameSpan.textContent = `"${clientName}"`;
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