@extends('layouts.app')
@section('content')
<div class="container">
          <div class="jumbotron text-center">
          @foreach ($users as $val)
                        @if($val->id != Auth::user()->id)
                        <table class="table table-striped">
                            <tr>
                                <td><a href ="/eachUser/{{$val->id}}">{{$val->name}}</td>
                            </tr>
                        </table>
                        @endif
                    @endforeach
          </div>
        </div>
@endsection