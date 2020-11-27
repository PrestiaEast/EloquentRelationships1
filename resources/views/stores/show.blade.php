@extends('layout.main')


@section('content')
<div class="container">
	<h5>H&M {{ $stores-> location}} Branch</h5>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Product Name</th>
				<th>Store Name</th>
				<th>Store Location</th>
			</tr>
		</thead>
		<tbody>
			<!-- this will display all the products of each branch of store when a store is clicked -->
			<!-- the view will be showed fromthe store model having a relationship to the products model function products -->
			@foreach($stores->products as $product)
			<tr>
				<td>{{ $product->id }} </td>
				<td>{{ $product->product_name }}</td>
				<td> {{ $product->stores->name }}</td>
				<td> {{ $product->stores->location }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection