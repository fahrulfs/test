<h2>Edit</h2>
<form action="/product/{{ $product->id }}" method="post">
    @method("put")
    @csrf
    <label for="name">Nama</label><br>
    <input type="text" name="name" id="" value="{{ $product ->name }}"><br>

    <label for="description">Description</label><br>
    <input type="text" name="description" value="{{ $product->description }}"><br>
    
    <label for="price">Price</label><br>
    <input type="number" name="price" id="" value="{{ $product->price }}"><br>
    
    <input type="submit" value="Save">
</form>



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
      <form action="/mahasiswa/{{$mahasiswa->id  }}" method="post">
        @method('put')
   @csrf
   <div class="field">
    <label class="label">NIM</label>
    <div class="control">
        <input value="{{$mahasiswa->nim }}" class="input" type="number" name="nim">
    </div>
    <div class="field">
        <label class="label">Nama</label>
        <div class="control">
            <input value="{{$mahasiswa->nama }}" class="input" type="text" name="nama">
        </div>
        <div class="field">
            <label class="label">Alamat</label>
            <div class="control">
                <input value="{{$mahasiswa->alamat  }}" class="input" type="text" name="alamat">
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
  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>PRAKTIKUM PEMROGRAMAN FRAMEWORK</strong> | FAHRUL F.S | Laravel 8</a>.
      </p>
    </div>
  </footer>
  </body>
</html>