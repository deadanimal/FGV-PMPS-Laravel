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

                <div class="mb-3 col-md-6">
                    {!! QrCode::generate(Request::url('https://fgv-pmps.prototype.com.my/pokok/{{ $pokok->id }}')); !!}
                </div>                    
            </div>

            <div class="row">


                <div class="col">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Kemaskini Pokok</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

                            <form action="/pokok/{{$pokok->id}}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>No Pokok</label>
                                        <input type="text" class="form-control" id="noPokok" name="noPokok" value="{{ $pokok->no_pokok }}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Jantina</label>
                                        <select class="form-select" id="jantina" name="jantina" value="{{ $pokok->jantina }}">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Baka</label>
                                        <input type="text" class="form-control" id="baka" name="baka" value="{{ $pokok->baka }}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Progeny</label>
                                        <input type="text" class="form-control" id="progeny" name="progeny" value="{{ $pokok->progeny }}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Blok</label>
                                        <input type="text" class="form-control" id="blok" name="blok" value="{{ $pokok->blok }}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Trial</label>
                                        <input type="text" class="form-control" id="trial" name="trial" value="{{ $pokok->trial }}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Status Pokok</label>
                                        <select class="form-select" id="statusPokok" name="statusPokok" value="{{ $pokok->status_pokok }}">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>

                                </div>

								<button type="submit" class="btn btn-primary">Kemaskini</button>
                            </form>



                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Cipta Tandan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

			
                            <form action="/pokok/{{$pokok->id}}/tandan" method="POST">
                                @csrf

                                <input type="hidden" name="pokok_id" value="{{ $pokok->id }}">
                                <div class="row">                                

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
                                        <label>umur</label>
                                        <input type="number" class="form-control" id="umur" name="umur">
                                    </div>


                                </div>

								<button type="submit" class="btn btn-primary">Cipta Tandan</button>
                            </form>



                        </div>
                    </div>                    

                </div>



            </div>

            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Senarai tandan</h5>
                            <h6 class="card-subtitle text-muted">- - -</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm tandan-datatable mb-5">
                                <thead>
                                    <tr>
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
            ajax: "/pokok/{{$pokok->id}}/tandan",
            columns: [{
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
