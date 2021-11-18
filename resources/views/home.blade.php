@extends('layouts.app')

@section('content')
    <div class="row">
        <div class ="col-lg6 offset-lg-3">
            @foreach ($status as $item)
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <p>{{$item->description}}</p>
                </div>
                <div class="card-footer">
                    <button class="btn text-info"><i class="fas fa-share"></button>
                </div>
            </div>
                
            @endforeach
    </div>


</div>
@endsection
