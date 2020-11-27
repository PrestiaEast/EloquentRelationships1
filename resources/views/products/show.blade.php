@extends('layout.main')

@section('content')
<div class="container">
	<h5>H&M {{ $products-> name }} </h5>
	<table class="table">
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Status</th>
				<th>Date</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products->inventories as $inventory)
			<tr>
				<!-- this will display all the inventory or transaction of each product -->
			<!-- the view will be showed from the products model having a relationship to the inventory model function products -->
				<td> {{ $inventory->products->product_name }}</td>
				<td> {{ $inventory->status }} </td>
				<td> {{ $inventory->date }} </td>
				<td> {{ $inventory->amount }} </td>

			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection