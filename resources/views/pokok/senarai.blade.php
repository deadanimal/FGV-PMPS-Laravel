@extends('layouts.app')

@section('title', 'Pokok')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Pokok
                </h1>
                {{-- <p class="header-subtitle">---</p> --}}
            </div>

            <div class="row">


                <div class="col">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Cipta Pokok</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

                            <form action="/pokok" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>No Pokok</label>
                                        <input type="text" class="form-control" id="noPokok" name="noPokok">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Jantina</label>
                                        <select class="form-select" id="jantina" name="jantina">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Baka</label>
                                        <input type="text" class="form-control" id="baka" name="baka">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Progeny</label>
                                        <input type="text" class="form-control" id="progeny" name="progeny">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Blok</label>
                                        <input type="text" class="form-control" id="blok" name="blok">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Trial</label>
                                        <input type="text" class="form-control" id="trial" name="trial">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Status Pokok</label>
                                        <select class="form-select" id="statusPokok" name="statusPokok">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
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
