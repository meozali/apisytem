@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                    <div class=col-md-12>
                        <div class="col-md-6">
                            {{ Form::open(array('url' => 'post','method'=>'post','name'=>'post')) }}
                      <?php  echo Form::token(); ?>
                            <label>Title</label>
                            <input class="form-control" name="title">
                            <div class="row">
                                 <label>Body</label>
                           <textarea class="form-control" name="body">Title</textarea>
                            </div>
                            {{Form::submit('Click Me!')}}

                            {{ Form::close() }}
                        </div>

                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
