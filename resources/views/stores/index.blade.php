@extends('layout.main')
@section('content')

<!-- this view will be displayed if /index from store controller is called -->
<div class="container">
	<h5>Stores</h5>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Location</th>
			</tr>
		</thead>
		<tbody>
			@foreach($stores as $store)
			<tr>
				<td> {{ $store->id }} </td>
				<td> {{ $store->name }} </td>
				<td> {{ $store->location }}</td> 
				<!-- this is a link to redirect from the store and show the list of products sold by each branch -->
				<td>
					<a href="/stores/{{ $store->id }}">Show Products</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection