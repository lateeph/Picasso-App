@foreach ($images as $image)
  <div>
    <p> <a href="{{$image->urls->full}}"> <img src="{{$image->urls->small}}"> </a> </p>
    <p>by:{{$image->user->name}}</p>
  </div>
@endforeach

