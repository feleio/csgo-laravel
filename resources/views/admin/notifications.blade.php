@extends('admin.admin')

@section('content')

    <div class="contaioner">
		<table class="table table-striped table-condensed">
	      <thead>
	        <tr>
	          <th>ID</th>
	          <th>圖片</th>
	          <th>名字</th>
	          <th>時間</th>
	          <th>訊息</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@foreach($notifications as $notification)
	        <tr>
	          <th scope="row">{{$notification->id}}</th>
	          <td><img src="{{$notification->weapon->img_link}}"/></td>
	          <td><a href="{{$notification->weapon->link}}" target="_blank">
	          	{{$notification->weapon->name}}
	          </a></td>
	          <td>{{$notification->updated_at}}</td>
	          <td>{{$notification->content}}</td>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
     </div>


@endsection

@section('title', 'Notifications')