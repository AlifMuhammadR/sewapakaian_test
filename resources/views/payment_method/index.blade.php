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
                        <h4 class="mb-0">Payment Method:.index</h4>
                        <a href="{{ route('payment_method.create') }}"><button type="button" class="btn btn-primary m-2">
                                <i class="fab fa-cc-visa me-2"></i>Add New Payment Method
                            </button></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $no => $data)
                                    <tr>
                                        <th scope="row">{{ $no + 1 . '.' }}</th>
                                        <td>{{ $data['metode_pembayaran'] }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('payment_method.edit', $data) }}"
                                                    class="btn btn-warning"><i class="fas fa-edit me-2"></i>Edit</a>
                                                <a href="{{ route('payment_method.destroy', $data) }}" type="button"
                                                    class="btn btn-danger" onclick="hapus(event, this)"><i
                                                        class="fas fa-trash-alt me-2"></i>Delete</a>
                                            </div>
                                        </td>
                                    </tr>
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

    <script>
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
