@extends('admin.admin')

@section('content')

    <div class="contaioner">
		<table class="table table-striped table-condensed">
	      <thead>
	        <tr>
	          <th>ID</th>
	          <th>圖片</th>
	          <th>名字</th>
	          <th>更新時間</th>
	          <th>平均價錢</th>
	          <th>最新價錢</th>
	          <th>相差</th>
	          <th>通知數</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@foreach($weapons as $weapon)
	        <tr>
	          <th scope="row">{{$weapon->id}}</th>
	          <td><img src="{{$weapon->img_link}}"/></td>
	          <td><a href="{{$weapon->link}}" target="_blank">{{$weapon->name}}</a></td>
	          <td>{{$weapon->updated_at}}</td>
	          <td><strong>{{$weapon->avg_price}}</strong> USD</td>
	          <td><strong>{{$weapon->last_price}}</strong> USD</td>
	          <?php 
	          	if($weapon->avg_price != 0)
	          	{
		          	$diff =($weapon->last_price - $weapon->avg_price ) *100 
		          		/ $weapon->avg_price;
	          	}
	          	else
	          		$diff = 0;
	          ?>
	          <td style="color:{{($diff>0)?'#5cb85c':'#d9534f'}}"><strong>{{formatNum($diff)}}</strong> %</td>
	          <td><a href="{{url('/back/notifications',[$weapon->id])}}">
	          {{sizeof($weapon->notifications)}}
	          </a></td>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
     </div>
    <?php
    function formatNum($num){
    	return sprintf("%+0.2f",$num);
	}
    ?>

@endsection

@section('title', 'Weapons')