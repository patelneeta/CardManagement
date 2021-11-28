@extends('web')
@section('content')

<div class="row">

@foreach($cards as $card)
<div class="col-md-6">
<div class="card bg-light">
  <div class="card-header"><strong>Name:</strong> {{$card->person_name}}</div>
  <div class="card-body">
    <h5 class="card-title"><strong>Email:</strong> {{$card->email}}</h5>
    <p class="card-text"><strong>Description:</strong> {{$card->description}}</p>
    <p class="card-text"><strong>Contact:</strong> {{$card->contact_number}}</p>
    <p class="card-text"><strong>Address:</strong> {{$card->address}}</p>
    <a href="{{url('cards/'.$card->id . '/edit')}}" class="btn btn-warning">Edit</a>
    {{ Form::open(array('url' => 'cards/' . $card->id, 'class' => 'pull-right')) }}
      {{ Form::hidden('_method', 'DELETE') }}
      {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
    {{ Form::close() }}
  </div>
</div>
</div>
@endforeach
</div>
@endsection


