<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="{{asset('css/adminStyles/CRUDmitra.css')}}" rel="stylesheet">
    <title>Admin SIPTEK</title>
</head>
<body>
  <nav>
    <div class="container-fluid" style="padding: 0;">
        <div class="navbar" style="background-color: #2563EB; height: 100px;">
            <div class="d-flex justify-content-start align-items-left">
                <a href="{{ route('adminMenu')}}" target="_blank" style="padding-left: 20px;">
                    <img src="{{asset('img/rshdLogo.png')}}" alt="rshd" class="image" style="height: 70px; padding-right: 0px;">
                </a>
                <h1 style="color: white; font-weight: bold;padding-top: 10px; padding-left: 0px;">SIPTEKin</h1>
            </div>
            <ul>
                <li>
                    <a href="{{ route('CRUDMitra.index') }}">MITRA</a>
                </li>
                <li>
                    <a href="{{ route('admin.CRUDObat')}}">OBAT</a>
                </li>
                <li>
                    <a href="{{ route('landingPage')}}">LOGOUT</a>
                </li>
            </ul>            
        </div>
    </div>
  </nav>

  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h1 class="modal-title fs-5" id="modalLabel">Add Mitra</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="mitraForm" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="mb-3">
                        <label for="inputNamaMitra" class="form-label">Nama Mitra</label>
                        <input type="text" class="form-control" id="inputNamaMitra" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="inputSejak" class="form-label">Mitra  sejak</label>
                        <input type="text" class="form-control" id="inputSejak" name="sejak">
                    </div>
                    <div class="mb-3">
                        <label for="inputLink" class="form-label">Link Mitra</label>
                        <input type="text" class="form-control" id="inputLink" name="link">
                    </div>
                    <div class="mb-3">
                        <label for="imageUpload" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="imageUpload" name="img_src" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <img id="imagePreview" src="#" alt="Your Image" class="img-thumbnail" style="display: none; width: 200px; height: auto;">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="modalSaveButton">Add Mitra</button>
                <button type="submit" class="btn btn-primary" id="modalUpdateButton" style="display:none;">Update Mitra</button> 
            </div>
        </div>
    </div>
  </div>

  <div style="border-bottom: 2px solid black;"></div>

  <div class="container d-flex align-items-center">
      <div class="flex-grow-1 text-center">
          <h1>MITRA</h1>
      </div>
  </div>
  <div class="container-fluid custom-container d-flex justify-content-end mb-3">
      <button type="button" class="btn btn-primary me-2 addBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
      <button type="button" class="btn btn-primary me-2 editBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>Edit</button>
      <button class="btn btn-primary deleteBtn" disabled>Delete</button>
  </div> -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel">Add Mitra</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="modal-body">
            <form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namaMitra" class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" id="namaMitra" name="namaMitra" required>
                </div>
                <div class="mb-3">
                    <label for="sejak" class="form-label">Mitra Sejak</label>
                    <input type="text" class="form-control" id="sejak" name="sejak" required>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link Mitra</label>
                    <input type="url" class="form-control" id="link" name="link">
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Upload Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>

<div style="border-bottom: 2px solid black;"></div>

<div class="container d-flex align-items-center">
    <div class="flex-grow-1 text-center">
        <h1>MITRA</h1>
    </div>
</div>
<div class="container-fluid custom-container d-flex justify-content-end mb-3">
    <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
    <!-- <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>Edit</button> -->
    <!-- <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" disabled>Delete</button> -->
</div>

  <div class="container-fluid">
    <table class="table  table-primary table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Mitra Sejak</th>
            <th scope="col">LinkMitra</th>
            <th scope="col">Logo</th>
            <th scope="col"></th> 
          </tr>
        </thead>
        <tbody>
        @foreach ($mitras as $mitra)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mitra->namaMitra }}</td>
                <td>{{ $mitra->sejak }}</td>
                <td><a href="{{ $mitra->link }}" target="_blank">{{ $mitra->link }}</a></td>
                <td>
                    @if ($mitra->logo)
                        <img src="{{ asset('storage/' .$mitra->logo) }}" alt="Logo" style="height: 40px;">
                    @else
                        Tidak ada logo
                    @endif
                </td>
            </tr>
        @endforeach
          <!-- Data Tabel ditambah melalui AJAX -->
        </tbody>
    </table>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('js/adminScripts/CRUDmitra.js')}}"></script> 
</body>
</html>