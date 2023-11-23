@extends('layouts.app')

@section('title')

@endsection

@section('content')

@if ($item)

        <div class="col">
          <div class="card shadow-sm">
       
          <img class="bd-placeholder-img card-img-top"    width="80%" height="320" src="{{ url('storage/' . $item->image) }}">
            <div class="card-body">
              <h5 class="card-title">{{ $item->name }}</h5>
              <p class="card-text">{{ $item->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
               
                </div>
                <small class="text-body-secondary">{{ $item->price }} LYD</small>
              </div>
            </div>
          </div>
        </div>

@else

<div class="alert alert-warning"> This product does not exists </div>

@endif

@endsection