<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="mb-4">Data Mahasiswa</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">
        + Tambah Mahasiswa
    </a>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th width="200">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($mahasiswa as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->npm }}</td>

            <td>{{ $item->nama }}</td>

            <td>{{ $item->prodi }}</td>

            <td>{{ $item->semester }}</td>

            <td>

                <a href="{{ route('mahasiswa.edit',$item->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('mahasiswa.destroy',$item->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus data?')">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="6" class="text-center">
                Belum ada data mahasiswa.
            </td>

        </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>