@extends('layouts.main');

@section('css')

@endsection
@section('main')
<form action="" method="update">
  <select>
    @foreach ($accounts as $account)
    <option value="{{ $account->role_id }}">{{}}</option>
    @endforeach
  </select>
  <button type="submit">Submit</button>
</form>
{{ Form::hidden(‘_method’, ‘PUT’) }}
{{ Form::select() }}
{{ Form::submit('Update', ['class' => 'btn']) }}
{!! Form::close() !!}}
@endsection