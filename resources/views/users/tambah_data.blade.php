{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <style>
input[type="text"],input[type="password"],input[type="email"],input[type="number"],select{
 height: 40px;
    width: 100%;
}
.container-form{
    margin: 0 auto;
    width: 50%;
}
input ,select,level{
    display: block;
    
}
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-form">
  <h1>{{ $header }}</h1> 
   <form action="/users/proses_tambah_pengguna" method="post">
@csrf
<input type="text" name="name" placeholder="Nama Lengkap">
@error('name')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br>
<input type="email" name="email" placeholder="Email">
@error('email')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br>
<input type="text" name="username" placeholder="Username">
@error('username')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br>
<input type="password" name="password" placeholder="password">
@error('password')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br>
<input type="number" name="phone" placeholder="No Handpone">
@error('phone')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br>
<label for="">Level Pengguna</label>
<br>
<select name="roles" id="">
    <option value="User">User</option>
    <option value="Admin">Admin</option>
</select>
<br>
<input type="submit" name="submit" value="Tambah Data">
   </form>
    </div>
 </body>
</html> --}}




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
            <form action="/users/proses_tambah_data" method="post">
                @csrf
                <div class="field">
                    <label class="label">Nama Lengkap</label>
                    <div class="control">
                        <input class="input" type="text" name="name" placeholder="Nama Lengkap">
                        @error('name')
                            <div class="message"><span>{{ $message }}</span></div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="email" name="email" placeholder="Email">
                        @error('email')
                            <div class="    message"><span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" name="username" placeholder="Username">
                        @error('username')
                            <div class="    message"><span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" name="password" placeholder="password">
                        @error('password')
                            <div class="    message"><span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">No Hp</label>
                    <div class="control">
                        <input class="input" type="number" name="phone" placeholder="Masukan No HP">
                        @error('phone')
                            <div class="    message"><span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label">Roles</label>
                    <div class="control">
                        <div class="select">
                            <select name="roles" id="">
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Tambah</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-danger">

                            <a href="/users">Kembali</a></button></button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
