<x-layout>
    <div class="container mt-4">
        <h2>Daftar Mahasiswa</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                        @forelse($mahasiswa as $index => $m)
                <tr>
                    <td>{{ $m['nim'] }}</td>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ $m['email'] }}</td>

                    <td>
                        <form action="{{ route('mahasiswa.destroy', $index) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada mahasiswa yang terdaftar.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
