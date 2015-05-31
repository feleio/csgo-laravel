@extends('admin.admin')

@section('content')

    <div class="contaioner">
		<table class="table table-striped table-condensed">
	      <thead>
	        <tr>
	          <th>id</th>
	          <th>名</th>
	          <th>Link</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@foreach($groups as $group)
	        <tr>
	          <th scope="row">{{$group->id}}</th>
	          <td>{{$group->name}}</td>
	          <td><a href="{{$group->link}}" target="_blank">{{$group->link}}</a></td>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
     </div>

@endsection

@section('title', 'Groups')