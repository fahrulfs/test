<!DOCTYPE html>
<html lang="en">
<head>
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
   <form action="/pulsa/proses_tambah_pulsa" method="post">
@csrf
{{-- <input type="number" name="saldo" placeholder="Saldo">
@error('saldo')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br> --}}
<input type="number" name="no_hp" placeholder="Masukkan NO HP">
@error('no_hp')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br>
<input type="text" name="nama_provider" placeholder="Masukkan Nama Provider">
@error('nama_provider')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br>
<label for="nominal_beli">Pilih Nominal</label><br>
<select name="nominal_beli" id="">
    <option value="2000">2000</option>
    <option value="5000">5000</option>
    <option value="5000">10000</option>
    <option value="5000">15000</option>
</select>
<br>
<input type="text" name="nominal_bayar" placeholder="Maukkan Nominal Bayar">
@error('nominal_bayar')
<div class="message"><span style="color: red">{{ $message }}</span></div>
@enderror
<br>
<input type="submit" name="submit" value="BELI">
   </form>
    </div>
  
 </body>
</html>