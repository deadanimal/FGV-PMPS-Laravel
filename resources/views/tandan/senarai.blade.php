@extends('layouts.app')

@section('title', 'Tandan')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Tandan
                </h1>
                {{-- <p class="header-subtitle">---</p> --}}
            </div>

            <div class="row">


                <div class="col">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Cipta Tandan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

                            <form action="/tandan" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>Pokok ID</label>
                                        <input type="text" class="form-control" id="pokok_id" name="pokok_id">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>No Daftar</label>
                                        <input type="text" class="form-control" id="noDaftar" name="noDaftar">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Kitaran</label>
                                        <input type="text" class="form-control" id="kitaran" name="kitaran">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Deskripsi Kitaran</label>
                                        <input type="text" class="form-control" id="deskripsiKitaran"
                                            name="deskripsiKitaran">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Status Tandan</label>
                                        <input type="text" class="form-control" id="statusTandan" name="statusTandan">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Catatan</label>
                                        <input type="text" class="form-control" id="catatan" name="catatan">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Umur</label>
                                        <input type="number" class="form-control" id="umur" name="umur">
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary">Cipta</button>
                            </form>



                        </div>
                    </div>
                </div>



            </div>

            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Senarai Tandan</h5>
                            <h6 class="card-subtitle text-muted">- - -</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm tandan-datatable mb-5">
                                <thead>
                                    <tr>
                                        <th>No Pokok</th>
                                        <th>No Daftar</th>
                                        <th>Kitaran</th>
                                        <th>Deskripsi Kitaran</th>
                                        <th>Status Tandan</th>
                                        <th>Catatan</th>
                                        <th>Umur</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>



        </div>



    </main>

@endsection

@section('script')
    <script type="text/javascript">
        $(function() {

            var table = $('.tandan-datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                order: [
                    [0, 'asc']
                ],
                ajax: "/tandan",
                columns: [{
                        data: 'no_pokok',
                        name: 'no_pokok'
                    },
                    {
                        data: 'no_daftar',
                        name: 'no_daftar'
                    },
                    {
                        data: 'kitaran',
                        name: 'kitaran'
                    },
                    {
                        data: 'deskripsi_kitaran',
                        name: 'deskripsi_kitaran'
                    },
                    {
                        data: 'status_tandan',
                        name: 'status_tandan'
                    },
                    {
                        data: 'catatan',
                        name: 'catatan'
                    },
                    {
                        data: 'umur',
                        name: 'umur'
                    },
                    {
                        data: 'link',
                        name: 'link'
                    },
                ]
            });


        });
    </script>
@endsection
