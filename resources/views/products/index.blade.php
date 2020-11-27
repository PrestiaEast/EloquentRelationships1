@extends('layout.main')
@section('content')

<div class="container">
	<h5>Products</h5>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Product Name</th>
				<th>Store Name</th>
				<th>Store Location</th>
				<th>Latest Transaction</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td> {{ $product->id }} </td>
				<td> {{ $product->product_name }} </td>
				<td> {{ $product->stores->name }}</td>
				<td> {{ $product->stores->location }}</td>
				<!-- this indicates the latest transaction made by each product -->
				<!-- it has a relationship betweek the product model and the inventory model function inventories -->
				<td> @foreach($product->inventories as $inventory)
						@if($loop->last)
						<p> {{ \Carbon\Carbon::parse($inventory->date)->isoFormat('MMMM Do YYYY') }} </p>
						@endif
						@endforeach
				</td>
				<!-- this is a link to redirect from the products and show the list of transaction or the inventory of each product selected -->
				<td>
					<a href="/products/{{ $product->id }}">Show Inventory</a>
				</td>
			@endforeach
		</tbody>
	</table>
</div>

@endsection