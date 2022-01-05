<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA MHS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <title>QUERY SELECTOR</title>
    <style>
        h2 {
            text-align: center;
        }

        table {
            width: 100%;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: white;
        }

        span {
            color: red;
        }

    </style>
</head>

<body>
    <section class="section">

        <div class="title has-text-centered">
            <h1><strong>DATA MAHASISWA</strong></h1>
        </div>
        <div class="container">
            <div class="table-container">
                <div class="buttons is-left">
                    <button class="button is-link is-success"><a href="/mahasiswa/tambah_mahasiswa">Tambah
                            Data</a></button></button>
                </div>
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>USIA</th>
                        <th>ALAMAT</th>
                        <th>HOBI</th>
                        <th>ACTION</th>

                    </thead>
                    <?php $i = 1; ?>
                    @foreach ($data_mahasiswa as $mahasiswa)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->usia }}</td>
                            <td>{{ $mahasiswa->alamat }}</td>
                            <td>{{ $mahasiswa->hobi }}</td>
                            <td>
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button class="button is-link is-primary"><a
                                                href="/mahasiswa/ubah_data/{{ $mahasiswa->id }}">Edit</></button>
                                    </div>
                                    <div class="control">
                                        <button class="button is-link is-danger"><a href="/mahasiswa
                                          
                                          ">Hapus</a></button>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </section>

</body>

</html>
