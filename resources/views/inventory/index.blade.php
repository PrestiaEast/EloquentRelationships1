@extends('layout.main')
@section('content')

<!-- this view will be displayed if /index from inventory controller is called -->
<div class="container">
	<h5>Inventory</h5>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Status</th>
				<th>Date</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tbody>
			@foreach($inventories as $inventory)
			<tr>
				<td> {{ $inventory->id }} </td>
				<td> {{ $inventory->status }} </td>
				<td> {{ $inventory->date }} </td>
				<td> {{ $inventory->amount }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection