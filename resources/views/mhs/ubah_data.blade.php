<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAMBAH DATA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
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
        <div class="container">
            <h1 class="title has-text-centered">
                {{ $header }}
            </h1>
            <form action="/mahasiswa/proses_ubah_data" method="post">
                @csrf
                <div class="field">
                    <label class="label">NIM</label>
                    <div class="control">
                        <input class="input" type="hidden" name="id" value="{{ $ubah->id }}">
                        <input class="input" type="number" name="nim" placeholder="Masukan NIM"
                            value="{{ $ubah->nim }}">
                        @error('nim')
                            <div class="message"><span>{{ $message }}</span></div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Nama</label>
                    <div class="control">
                        <input class="input" type="text" name="nama" placeholder="Masukan Nama"
                            value="{{ $ubah->nama }}">
                        @error('nama')
                            <div class="message"><span>{{ $message }}</span></div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Alamat</label>
                    <div class="control">
                        <input class="input" type="text" name="alamat" placeholder="Masukkan Alamat"
                            value="{{ $ubah->alamat }}">
                        @error('alamat')
                            <div class="message"><span>{{ $message }}</span></div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Usia</label>
                    <div class="control">
                        <input class="input" type="number" name="usia" placeholder="Masukan Usia"
                            value="{{ $ubah->usia }}">
                        @error('usia')
                            <div class="message"><span>{{ $message }}</span></div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Hobi</label>
                    <div class="control">
                        <input class="input" type="hobi" name="hobi" placeholder="Masukan Hobi"
                            value="{{ $ubah->hobi }}">
                        @error('hobi')
                            <div class="message"><span>{{ $message }}</span></div>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
