<div class="col-md-12 col-md-offset-0">
<div class="panel panel-inverse">
  @if($rf->count()>0)
   <strong>REFEREES:</strong></br>
  <div class="panel-body">
      @foreach($rf as $rfee)
        <strong>Name:</strong>{{$rfee->refaname}}</br>
        <strong>Title:</strong>{{$rfee->title}}</br>
        <strong>Address:</strong>{{$rfee->address}}</br>
      @endforeach
    @else
  @endif
  </div>  
</div>
</div>
  