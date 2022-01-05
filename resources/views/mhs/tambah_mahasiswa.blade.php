{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <style>
input[type="text"],input[type="number"],select{
 height: 40px;
    width: 100%;
}
span{
    color: red;
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
   <form action="/mahasiswa/proses_tambah_mahasiswa" method="post">
@csrf
<input type="number" name="nim" placeholder="Masukan NIM">
@error('nim')
<div class="message"><span>{{ $message }}</span></div>
@enderror
<br>
<input type="text" name="nama" placeholder="Masukkan Nama">
@error('nama')
<div class="message"><span>{{ $message }}</span></div>
@enderror
<br>
<input type="text" name="alamat" placeholder="Masukkan Alamat">
@error('alamat')
<div class="message"><span>{{ $message }}</span></div>
@enderror
<br>
<input type="text" name="usia" placeholder="Masukkan Usia">
@error('usia')
<div class="message"><span>{{ $message }}</span></div>
@enderror
<br>
<input type="text" name="hobi" placeholder="Masukkan Hobi">
@error('hobi')
<div class="message"><span>{{ $message }}</span></div>
@enderror
<br>
<input type="submit" name="submit" value="Tambah Data">
   </form>
    </div>
 </body>
</html>
 --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAMBAH DATA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<style>
    a{
        color: white;
        text-decoration: none;
    }
    a:hover{
        color: white;
    }
    span{
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
      <form action="/mahasiswa/proses_tambah_mahasiswa" method="post">
   @csrf
   <div class="field">
    <label class="label">NIM</label>
    <div class="control">
        <input class="input" type="number" name="nim" placeholder="Masukan NIM">
        @error('nim')
        <div class="message"><span>{{ $message }}</span></div>
        @enderror
    </div>
  </div>
  <div class="field">
    <label class="label">Nama</label>
    <div class="control">
        <input class="input" type="text" name="nama" placeholder="Masukan Nama">
        @error('nama')
        <div class="message"><span>{{ $message }}</span></div>
        @enderror
    </div>
  </div>

  <div class="field">
    <label class="label">Alamat</label>
    <div class="control">
        <input class="input" type="text" name="alamat" placeholder="Masukkan Alamat">
        @error('alamat')
        <div class="message"><span>{{ $message }}</span></div>
        @enderror
    </div>
  </div>

  <div class="field">
    <label class="label">Usia</label>
    <div class="control">
        <input class="input" type="number" name="usia" placeholder="Masukan Usia">
        @error('usia')
        <div class="message"><span>{{ $message }}</span></div>
        @enderror
    </div>
  </div>
  <div class="field">
    <label class="label">Hobi</label>
    <div class="control">
        <input class="input" type="hobi" name="hobi" placeholder="Masukan Hobi">
        @error('hobi')
        <div class="message"><span>{{ $message }}</span></div>
        @enderror
    </div>
  </div>
  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link">Tambah</button>
    </div>
    <div class="control">
      <button class="button is-link is-danger">
          
        <a href="/mahasiswa">Kembali</a></button></button>
    </div>
  </div>
      </form>
    </div>
  </section>

  </body>
</html>