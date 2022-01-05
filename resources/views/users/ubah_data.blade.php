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
            <form action="/users/proses_ubah_data" method="post">
                @csrf
                <div class="control">
                    <input class="input" type="hidden" name="id" value="{{ $ubah->id }}">
                </div>
                <div class="field">
                    <label class="label">Nama Lengkap</label>
                    <div class="control">
                        <input class="input" type="text" name="name" placeholder="Nama Lengkar"
                            value="{{ $ubah->name }}">
                        @error('name')
                            <div class="message"><span>{{ $message }}</span></div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="email" name="email" placeholder="Email"
                            value="{{ $ubah->email }}">
                        @error('email')
                            <div class=" message"><span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" name="username" placeholder="Username"
                            value="{{ $ubah->username }}">
                        @error('username')
                            <div class=" message"><span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" name="password" placeholder="password"
                            value="{{ $ubah->password }}">
                        @error('password')
                            <div class=" message"><span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">No Hp</label>
                    <div class="control">
                        <input class="input" type="number" name="phone" placeholder="Masukan No HP"
                            value="{{ $ubah->phone }}">
                        @error('phone')
                            <div class=" message"><span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Roles</label>
                    <div class="control">
                        <div class="select">
                            <select name="roles" id="">
                                <option value="User" @if ($ubah->roles == 'Users')
                                    {{ 'selected' }}
                                    @endif>User</option>
                                <option value="Admin" @if ($ubah->roles == 'Admin')
                                    {{ 'selected' }}
                                    @endif>Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link is-success">UBAH</button>
                    </div>

                </div>
            </form>
        </div>
    </section>

</body>

</html>
