<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QUERY SELECTOR</title>
<style>
  h2{
    text-align: center;
  }
 table{
   width: 100%;
 } 
  
</style>
  </head>
<body>
  {{-- @php
      $kembali=$nominal_bayar-$nominal_beli;
  @endphp --}}
    <div class="container">
            <h1>{{ $status  }}</h1>
              <table border="1">  
                <thead>        
                  <th>No HP</th>
                  <th>Provider</th>
                  <th>Nonimal Pulsa</th>
                  <th>Kembalian</th>
                  {{-- LIMIT 10 --}}
                  {{-- <th>Data Emial</th>
                  <th>Password</th>
                  <th>Token Terakhir</th>
                  <th>Waktu Data Terdaftar</th>
                  <th>Waktu Ubah Data Dilakukan</th> --}}
                </thead>
              
              
  
 
              @foreach ($data_pulsa as $pulsa)
             
             
              <tr>
                  <td>{{ $pulsa->no_hp }}</td>
                  <td>{{ $pulsa->nama_provider }}</td>
                  <td>{{ $pulsa->nominal_beli }}</td> 
                  {{-- <td>{{$kembaali  }}</td> --}}
             
        
                  {{-- DENGAN LIMIT 10 --}}
        
                  {{-- <td>{{ $users->email_verified_at }}</td>
                  <td>{{ $users->password }}</td>
                  <td>{{ $users->remember_token }}</td>
                  <td>{{ $users->created_at }}</td>
                  <td>{{ $users->updated_at }}</td> --}}
                  
                </tr>
              @endforeach  
            
            </table>
        </div>
</body>
</html>