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
                                        <input type="text" class="form-control" id="deskripsiKitaran" name="deskripsiKitaran">
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
                            <h5 class="card-title">Senarai Pokok</h5>
                            <h6 class="card-subtitle text-muted">- - -</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm pokok-datatable mb-5">
                                <thead>
                                    <tr>
                                        <th>No Pokok</th>
                                        <th>Jantina</th>
                                        <th>Baka</th>
                                        <th>Progeny</th>
                                        <th>Blok</th>
                                        <th>Trial</th>
                                        <th>Status</th>
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

            var table = $('.pokok-datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                order: [
                    [0, 'asc']
                ],
                ajax: "/pokok",
                columns: [{
                        data: 'no_pokok',
                        name: 'no_pokok'
                    },
                    {
                        data: 'jantina',
                        name: 'jantina'
                    },
                    {
                        data: 'baka',
                        name: 'baka'
                    },
                    {
                        data: 'progeny',
                        name: 'progeny'
                    },
                    {
                        data: 'blok',
                        name: 'blok'
                    },
                    {
                        data: 'trial',
                        name: 'trial'
                    },
                    {
                        data: 'status_pokok',
                        name: 'status_pokok'
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
