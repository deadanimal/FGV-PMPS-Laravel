@extends('layouts.app')
 
@section('title', 'Pokok')
 
@section('content')

	<main class="content">

		<div class="container-fluid">

			<div class="header">
				<h1 class="header-title">
					Pokok
				</h1>
				<p class="header-subtitle">---</p>
			</div>

			<div class="row">


				<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Cipta Pokok</h5>
									<h6 class="card-subtitle text-muted">- - - </h6>
								</div>
								<div class="card-body">
		
								</div>
							</div>								
				</div>	
                
				<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Cari Pokok</h5>
									<h6 class="card-subtitle text-muted">- - - </h6>
								</div>
								<div class="card-body">
		
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
								<table class="table table-striped">
									<thead>
										<tr>
											<th style="width:10%;">ID</th>
											<th style="width:20%;">Date</th>
											<th style="width:45%">Buyer</th>
											<th style="width:5%">Level</th>											
											<th class="d-none d-md-table-cell" style="width:20%">Amount</th>
											
										</tr>
									</thead>
									<tbody>

								 
									</tbody>
								</table>
							</div>				
					
				</div>
			</div>			
					

			
		</div>



	</main>

@endsection	

@section('script')

@endsection