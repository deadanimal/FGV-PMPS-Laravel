@extends('layouts.app')

@section('title', 'Tandan')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Tugasan
                </h1>
                {{-- <p class="header-subtitle">---</p> --}}
            </div>

            <div class="row">


                <div class="col">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Cipta Tugasan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

                            <form action="/tugasan" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="mb-3 col-md-3">
                                        <label>Tandan ID</label>
                                        <input type="text" class="form-control" id="tandan_id" name="tandan_id">
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label>Tarikh Mula Kerja</label>
                                        <input type="date" class="form-control" id="tarikh_kerja_mula" name="tarikh_kerja_mula">
                                    </div>                                    

                                    <div class="mb-3 col-md-6">
                                        <label>Jenis Kerja</label>
                                        <select class="form-control" id="jenis" name="jenis">
                                            <option value="bagging">Bagging</option>
                                            <option value="control">Control Pollination</option>
                                            <option value="quality">Quality Control</option>
                                            <option value="harvest">Harvest</option>
                                            <option value="pollen">Pollen Preparation</option>
                                            <option value="pollen-usage">Pollen Usage</option>
                                        </select>                                        
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>No Tugasan</label>
                                        <input type="text" class="form-control" id="no_tugasan" name="no_tugasan">
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label>Nama Tugasan</label>
                                        <input type="text" class="form-control" id="nama_tugasan" name="nama_tugasan">
                                    </div>                                    

                                    <div class="mb-3 col-md-6">
                                        <label>Pekerja ID</label>
                                        <input type="text" class="form-control" id="assignee_id" name="assignee_id">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Supervisor ID</label>
                                        <input type="text" class="form-control" id="pengesah_id" name="pengesah_id">
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
                            <h5 class="card-title">Senarai Tugasan</h5>
                            <h6 class="card-subtitle text-muted">- - -</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm tugasan-datatable mb-5">
                                <thead>
                                    <tr>
                                        <th>Tarikh Kerja</th>
                                        <th>Tandan ID</th>
                                        <th>Jenis</th>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Pekerja</th>
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

            var table = $('.tugasan-datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                order: [
                    [0, 'asc']
                ],
                ajax: "/tugasan",
                columns: [{
                        data: 'tarikh_kerja_mula',
                        name: 'tarikh_kerja_mula'
                    },
                    {
                        data: 'tandan_id',
                        name: 'tandan_id'
                    },                    
                    {
                        data: 'jenis',
                        name: 'jenis'
                    },
                    {
                        data: 'no_tugasan',
                        name: 'no_tugasan'
                    },
                    {
                        data: 'nama_tugasan',
                        name: 'nama_tugasan'
                    },
                    {
                        data: 'assignee_id',
                        name: 'assignee_id'
                    },
                    {
                        data: 'link',
                        name: 'link'
                    }
                ]
            });


        });
    </script>
@endsection
