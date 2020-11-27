@extends('layout.main')
@section('content')

<div class="container">
	<h5>Products</h5>
	<table class="table">
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Store Name</th>
				<th>Store Location</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td> {{ $product->id }} </td>
				<td> {{ $product->product_name }} </td>
				<td> {{ $product->stores->name }}</td>
				<td> {{ $product->stores->location }}</td>
				<td>
					<a href="/inventories/{{ $product->id }}">Inventory</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection