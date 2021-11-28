@extends('web')
@section('content')
<div class="row">
  <hr>
  <div class="col-md-6">
      {{ Form::model($cards, array('route' => array('cards.update', $cards->id), 'method' => 'PUT')) }}

       @csrf
      <div class="form-group">
        <label for="person_name">Person Name</label>
        <input type="text" name="person_name" value="{{$cards->person_name}}" class="form-control" id="person_name"/>
        @if ($errors->has('person_name'))
            <span class="text-danger">{{ $errors->first('person_name') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="{{$cards->email}}" class="form-control" id="email"/>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="description">Short Description</label>
        <textarea  name="description" class="form-control" id="description">{{$cards->description}}</textarea>
        @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="contact_number">Contacts</label>
        <input type="text"  name="contact_number" value="{{$cards->contact_number}}" class="form-control" id="contact_number"/>
        @if ($errors->has('contact_number'))
            <span class="text-danger">{{ $errors->first('contact_number') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="address">Single Address</label>
        <input type="text"  name="address" value="{{$cards->address}}" class="form-control" id="address"/>
        @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
        @endif
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection