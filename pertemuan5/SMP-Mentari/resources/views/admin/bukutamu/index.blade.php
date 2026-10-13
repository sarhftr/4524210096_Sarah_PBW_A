
@extends('layouts.admin')

@section('admin_title', 'Kelola Buku Tamu')

@section('admin_content')
    <div class="max-w-7xl mx-auto">

        {{-- Judul Halaman --}}
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Kelola Buku Tamu
            </h1>
            <p class="text-gray-600 mt-1">
                Daftar pesan yang dikirim oleh pengunjung website SMP Mentari.
            </p>
        </div>

        {{-- Notifikasi Berhasil --}}
        @if (session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg"
                 role="alert">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel Buku Tamu --}}
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">

                <h2 class="text-lg font-semibold text-gray-800 mb-4">
                    Daftar Pesan dari Pengunjung
                </h2>

                @if ($daftar_pesan->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">

                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        No
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        Nama
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        Email
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        Pesan
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        Tanggal
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($daftar_pesan as $index => $pesan)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $daftar_pesan->firstItem() + $index }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $pesan->nama }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{ $pesan->email }}
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-600">
                                            {{ \Illuminate\Support\Str::limit($pesan->pesan, 50) }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{ $pesan->created_at->format('d M Y H:i') }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <form
                                                action="{{ route('bukutamu.admin.destroy', $pesan) }}"
                                                method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="text-red-600 hover:text-red-800 font-medium"
                                                >
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-6">
                        {{ $daftar_pesan->links() }}
                    </div>

                @else
                    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded-lg">
                        Belum ada pesan dari pengunjung.
                    </div>
                @endif

            </div>
        </div>

    </div>
@endsection
