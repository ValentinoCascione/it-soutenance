@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6 col-mdd-offset-3">
    {{ Form:model($post;['route' =>['posts.update'$posts->id], 'method'=>'PATCH']) !!}}
    @incude('posts.form_master')
    </div>
</div>
@endsection