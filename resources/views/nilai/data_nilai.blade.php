<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet' href=<meta charset="utf-8">
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
            color: white;
        }

    </style>
</head>

<body>
    <section class="section">

        <div class="title has-text-centered">
            <h1><strong>SOAL A</strong></h1>

        </div>
        <div class="container">
            <div class="table-container">
                <div class="buttons is-left">
                    {{-- <button class="button is-link is-success"><a href="/users/tambah_data">Tambah Data</a></button> --}}
                </div>
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Kelas</th>
                        <th>Ipk</th>
                        <th>Semester</th>
                        <th>Total SKS</th>
                    </thead>
                    <?php $i = 1; ?>

                    @foreach ($data as $nilai)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $nilai->nim }}</td>
                            <td>{{ $nilai->kelas }}</td>
                            <td>{{ $nilai->ipk }}</td>
                            <td>{{ $nilai->semester }}</td>
                            <td>{{ $nilai->total_sks }}</td>
                            {{-- <td>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button class="button is-small is-link is-info">
                                            <span class="icon">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <a href="/users/detail/{{ $users->id }}">Detail</a></button>
                                        <button class="button is-small is-link is-success">
                                            <span class="icon">
                                                <i class="fas fa-check-square"></i>
                                            </span>
                                            <a href="/users/ubah_data/{{ $users->id }}">Ubah</a></button>
                                        <button class="button is-small is-link is-danger">
                                            <span class="icon">
                                                <i class="fas fa-ban"></i>
                                            </span>
                                            <a href="/users">Hapus</a></button>
                                    </div>
                                </div>
                            </td> --}}

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js'>
    </script>

</body>

</html>
