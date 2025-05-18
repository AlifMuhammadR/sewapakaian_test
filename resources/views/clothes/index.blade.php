@extends('be.master')
@section('sidebar')
    @include('be.sidebar')
@endsection
@section('navbar')
    @include('be.navbar')
@endsection
@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="mb-5 col-12 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Clothes:.index</h4>
                        <a href="{{ route('clothes.create') }}"><button type="button" class="btn btn-primary m-2">
                                <i class="fa fa-tshirt me-2"></i>Add New Clothes
                            </button></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Action</th>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Colour</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">1<sup>st</sup> Image</th>
                                    <th scope="col">2<sup>nd</sup> Image</th>
                                    <th scope="col">3<sup>rd</sup> Image</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Rental's Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $no => $data)
                                    <tr>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('clothes.edit', $data) }}" class="btn btn-warning"><i
                                                        class="fas fa-edit me-2"></i>Edit</a>
                                                <a href="{{ route('clothes.destroy', $data) }}" type="button"
                                                    class="btn btn-danger" onclick="hapus(event, this)"><i
                                                        class="fas fa-trash-alt me-2"></i>Delete</a>
                                            </div>
                                        </td>

                                        <th scope="row">{{ $no + 1 . '.' }}</th>
                                        @if (strlen($data['nama_pakaian']) > 10)
                                            <td data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-title="{{ $data['nama_pakaian'] }}">
                                                {{ substr($data['nama_pakaian'], 0, 10) . '...' }}
                                            </td>
                                        @else
                                            <td>{{ $data['nama_pakaian'] }}</td>
                                        @endif
                                        @if (strlen($data['jenis']) > 10)
                                            <td data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-title="{{ $data['jenis'] }}">
                                                {{ substr($data['jenis'], 0, 10) . '...' }}
                                            </td>
                                        @else
                                            <td>{{ $data['jenis'] }}</td>
                                        @endif
                                        @if (strlen($data['model']) > 10)
                                            <td data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-title="{{ $data['model'] }}">
                                                {{ substr($data['model'], 0, 10) . '...' }}
                                            </td>
                                        @else
                                            <td>{{ $data['model'] }}</td>
                                        @endif
                                        <td>{{ $data['warna'] }}</td>
                                        <td>{{ $data['ukuran'] }}</td>
                                        @if (strlen($data['bahan']) > 10)
                                            <td data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-title="{{ $data['bahan'] }}">
                                                {{ substr($data['bahan'], 0, 10) . '...' }}
                                            </td>
                                        @else
                                            <td>{{ $data['bahan'] }}</td>
                                        @endif
                                        @if (strlen($data['deskripsi']) > 10)
                                            <td data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-title="{{ $data['deskripsi'] }}">
                                                {{ substr($data['deskripsi'], 0, 10) . '...' }}
                                            </td>
                                        @else
                                            <td>{{ $data['deskripsi'] }}</td>
                                        @endif
                                        {{-- <td>
                                            @if ($data['foto1'])
                                                <img src="{{ asset('storage/' . $data['foto1']) }}" alt="Foto Produk 1"
                                                    width="50" height="50" class="image-thumbnail" role="button"
                                                    onclick="showModal('{{ asset('storage/' . $data['foto1']) }}', '{{ $data['deskripsi'] }}')">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data['foto2'])
                                                <img src="{{ asset('storage/' . $data['foto2']) }}" alt="Foto Produk 2"
                                                    width="50" height="50" class="image-thumbnail" role="button"
                                                    onclick="showModal('{{ asset('storage/' . $data['foto2']) }}', '{{ $data['deskripsi'] }}')">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data['foto3'])
                                                <img src="{{ asset('storage/' . $data['foto3']) }}" alt="Foto Produk 3"
                                                    width="100" height="50" class="image-thumbnail" role="button"
                                                    onclick="showModal('{{ asset('storage/' . $data['foto3']) }}', '{{ $data['deskripsi'] }}')">
                                            @endif
                                        </td> --}}
                                        <td>
                                            @if ($data['foto1'] !== '')
                                                <img src="{{ asset('storage/' . $data['foto1']) }}" alt="Foto Produk 1"
                                                    class="img-thumbnail" style="width: 100px; height: auto;" role="button"
                                                    data-bs-toggle="modal" data-bs-target="#foto1_{{ $data->id }}">
                                            @else
                                                <img class="img-thumbnail" alt="Foto Produk 1">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data['foto2'] !== '')
                                                <img src="{{ asset('storage/' . $data['foto2']) }}" alt="Foto Produk 2"
                                                    class="img-thumbnail" style="width: 100px; height: auto;" role="button"
                                                    data-bs-toggle="modal" data-bs-target="#foto2_{{ $data['id'] }}">
                                            @else
                                                <img class="img-thumbnail" alt="Foto Produk 2">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data['foto3'] !== '')
                                                <img src="{{ asset('storage/' . $data['foto3']) }}" alt="Foto Produk 3"
                                                    class="img-thumbnail" style="width: 100px; height: auto;" role="button"
                                                    data-bs-toggle="modal" data-bs-target="#foto3_{{ $data['id'] }}">
                                            @else
                                                <img class="img-thumbnail" alt="Foto Produk 3">
                                            @endif
                                        </td>
                                        <td>{{ $data['stok'] }}</td>
                                        <td>{{ 'Rp. ' . number_format($data['harga_sewa'], 0, ',', '.') }}</td>
                                        <!-- Menampilkan harga yang sudah diformat -->
                                    </tr>
                                    @php
                                        // Array berisi nama atribut foto yang akan ditampilkan
                                        $fotoList = ['foto1', 'foto2', 'foto3'];
                                    @endphp
                                    @foreach ($fotoList as $foto)
                                        @if (!empty($data[$foto]))
                                            <div class="modal fade" id="{{ $foto }}_{{ $data->id }}"
                                                tabindex="-1" aria-labelledby="{{ $foto }}_{{ $data->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5"
                                                                id="{{ $foto }}_{{ $data->id }} label">
                                                                @if (strlen($data['nama_pakaian']) > 40)
                                                                    {{ substr($data['nama_pakaian'], 0, 40) . '...' }}
                                                                @else
                                                                    {{ $data['nama_pakaian'] }}
                                                                @endif
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="{{ asset('storage/' . $data[$foto]) }}"
                                                                alt="Foto Produk {{ $loop->iteration }}" class="w-100">
                                                        </div>
                                                        <div class="modal-footer">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
    <form action="" method="POST" id="frmHapus">
        @csrf
        @method('DELETE')
    </form>
    <div id="pesan" class="invisible">
        @isset($pesan)
            {{ $pesan }}
        @endisset
    </div>

    <!-- Modal untuk menampilkan gambar -->



    {{-- <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content position-relative pt-5">
                <!-- Tambahkan padding-top untuk memberi ruang tombol close -->
                <!-- Tombol close di pojok kanan atas modal -->
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body text-center mt-2"> <!-- Tambahkan margin-top pada konten modal -->
                    <!-- Gambar ditampilkan di sini -->
                    <img id="modalImage" src="" alt="Image" class="img-fluid mb-3">
                    <!-- Deskripsi ditampilkan di sini dengan perataan justify -->
                    <p id="modalDescription" class="text-justify mx-3" style="text-align: justify;"></p>
                </div>
            </div>
        </div>
    </div> --}}
    <script>
        // function showModal(imageSrc, description) {
        //     document.getElementById("modalImage").src = imageSrc; // Set gambar di dalam modal
        //     document.getElementById("modalDescription").textContent = description; // Set deskripsi di dalam modal
        //     var imageModal = new bootstrap.Modal(document.getElementById("imageModal"), {}); // Inisialisasi modal
        //     imageModal.show(); // Tampilkan modal
        // }


        const body = document.getElementById('body');
        const status = document.getElementById('status');
        const pesan = document.getElementById('pesan');
        const form = document.getElementById('frmHapus');

        function tampil_pesan() {
            let pesan = "{{ session('pesan') }}";
            if (pesan.trim() !== '') {
                swal('Good Job!', pesan.trim(), 'success');
                // }
            }
        }

        function hapus(event, el) {
            event.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Your will delete the clothes Method permanently!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function() {
                    form.setAttribute('action', el.getAttribute('href'));
                    form.submit();
                });
        }


        body.onload = function() {
            tampil_pesan();
        }
    </script>
@endsection
