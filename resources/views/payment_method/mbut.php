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
                    <div class="row mb-5">
                        <div class="col-auto me-auto mb-4 h3 text-black-50">Payment Method:.index </div>
                        <div class="col-auto">
                            <a href="{{ route('payment_method.create') }}" class="btn btn-primary m-2 justify-content-end"><i
                                    class="fas fa-money-check-alt me-2"></i>Add New Payment Method </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
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

    <form action="" method="POST" id="frmhapus">
        @method('delete')
        @csrf
    </form>
    <div id="pesan" class="invisible">
        @isset($pesan)
            {{ $pesan }}
        @endisset
    </div>

    <script>
        const body = document.getElementById('body')
        const status = document.getElementById('status')
        const pesan = document.getElementById('pesan')
        const form = document.getElementById('frmhapus')


        function tampil_pesan() {
            // if(status.innerHTML.trim() == 'simpan'){
            //     swal('Good Job', pesan.innerHTML, 'success')
            // }else if(status.innerHTML.trim() == 'edit') {
            //     swal('Good Job', pesan.innerHTML, 'success')
            // }
            if (pesan.innerHTML.trim() !== '') {
                swal('Good Job', pesan.innerHTML, 'success')
            }

        }

        function hapus(event, el) {
            event.preventDefault()
            swal({
                    title: "Are you sure?",
                    text: "You will delete the Payment Method data permanently!",
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

        body.onpageshow = function() {
            tampil_pesan()
        }
    </script>
@endsection
