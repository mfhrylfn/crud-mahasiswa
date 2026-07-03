<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control"
                   value="{{ $mahasiswa->npm }}" required>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control"
                   value="{{ $mahasiswa->nama }}" required>
        </div>

        <div class="mb-3">
            <label>Prodi</label>
            <input type="text" name="prodi" class="form-control"
                   value="{{ $mahasiswa->prodi }}" required>
        </div>

        <div class="mb-3">
            <label>Semester</label>
            <input type="number" name="semester" class="form-control"
                   value="{{ $mahasiswa->semester }}" required>
        </div>

        <button class="btn btn-success">
            Update
        </button>

        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>