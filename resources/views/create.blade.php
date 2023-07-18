<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengguna Baru</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Pengguna Baru</h1>

        <form method="POST" action="/save-user">
            @csrf
            <div class="form-group">
                <label for="data">Data Pengguna (NAMA USIA KOTA):</label>
                <input type="text" name="data" id="data" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
