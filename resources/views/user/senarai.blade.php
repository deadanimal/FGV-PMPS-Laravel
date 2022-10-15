@extends('layouts.app')

@section('title', 'User')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    User Management
                </h1>
                {{-- <p class="header-subtitle">---</p> --}}
            </div>

            <div class="row">


                <div class="col">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Cipta User</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

                            <form action="/user" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" id="name" name="name">
									</div>

                                    <div class="mb-3 col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>No Kakitangan</label>
                                        <input type="text" class="form-control" id="noKakitangan" name="noKakitangan">
                                    </div>
         

                                    <div class="mb-3 col-md-6">
                                        <label>Role</label>
                                        <select class="form-select" id="role_id" name="role_id">
											@foreach($roles as $role)
												<option value="{{$role->id}}">{{$role->display_name}}</option>
											@endforeach                                        
                                        </select>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary">Cipta User</button>
                            </form>



                        </div>
                    </div>
                </div>



            </div>

            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Senarai User</h5>
                            <h6 class="card-subtitle text-muted">- - -</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm user-datatable mb-5">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Kakitangan</th>
                                        <th>Peranan</th>
                                        <th></th>
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

            var table = $('.user-datatable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                order: [
                    [0, 'asc']
                ],
                ajax: "/user",
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },		
                    {
                        data: 'no_kakitangan',
                        name: 'no_kakitangan'
                    },
                    {
                        data: 'peranan',
                        name: 'peranan'
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
