<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/index-style.css') }}" />
</head>
<body>

<div id="table-wrapper">
  <div id="table-scroll">
    <table class="table">
      <tr>
        <th scope="col">Country</th>
        <th scope="col">Cases</th>
        <th scope="col">Details</th>
      </tr>
      @foreach($covid19 as $covid19)
        <tr>
            <td scope="row" >{{$covid19->country}}</td>
            <td scope="row">{{$covid19->cases}}</td>
            <td scope="row"><a href="{{route('fill_data.show', $covid19)}}" class="btn btn-primary"> Details </a></td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
<br><br>
<a id="create" href="{{route('fill_data.create')}}"  class="btn"> Insert </a>
