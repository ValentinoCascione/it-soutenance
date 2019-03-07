@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-sm-12">
    <div class="full-right">
    <h2>Stock</h2>
    </div>
</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th with="80px">No</th>
        <th>Objet</th>
        <th>Contenu</th>
        <th with="140px" class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success brtn-sm">
            <i class="glyphicon glyphicon-plus"></i>
        </a>
        </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($post as $key =>value)
    <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->objet }}</td>
        <td>{{ $value->contenu }}</td>
        <td>
            <a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
                <i class="glyphicon glyphicon-th-large"></i></a>
            <a class="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">
                <i class="glyphicon glyphicon-pensil"></i></a>
                {{ Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $value->id], 'style'=>'display'])}}
                <button type='submit' style='display: inline;' class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-arrow"></i></button>
                {{ Form:close() }}

        </td>
    </tr>
    @endforeach

</table>

@endsection