{{-- <!DOCTYPE html>
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
    <div class="container">
              <h2>USERS DATA</h2>
              <button type="submit"><a href="/users/tambah_data">TAMBAH DATA BARU</a></button>
            <table border="1">  
                <thead>        
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Usename</th>
                  <th>No Telepon</th>
                  <th>Roles</th>
                  <th>Action</th>

                </thead> 
              
              
            
              <?php $i = 1; ?> 

              @foreach ($data as $users)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $users->name }}</td>
                  <td>{{ $users->email }}</td>
                  <td>{{ $users->username }}</td>    
                  <td>{{ $users->phone }}</td>
                  <td>{{ $users->roles}}</td> 
                  <td><a href='/users/detail/{{$users->id}}'>Details</a></td>
                  <td>Rubah</td> 
                  <td>Hapus</td>
     
              </tr>
              @endforeach   
            
            </table>
        </div>
</body>
</html> --}}


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
            <h1><strong>DATA USERS</strong></h1>

        </div>
        <div class="container">
            <div class="table-container">
                <div class="buttons is-left">
                    <button class="button is-link is-success"><a href="/users/tambah_data">Tambah Data</a></button>
                </div>
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>No Telepon</th>
                        <th>Roles</th>
                        <th>Action</th>
                    </thead>
                    <?php $i = 1; ?>

                    @foreach ($data as $users)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->username }}</td>
                            <td>{{ $users->phone }}</td>
                            <td>{{ $users->roles }}</td>
                            <td>

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
                            </td>

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
