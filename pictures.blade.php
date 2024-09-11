@extends('layouts.app')

@section('title', 'Picture Page')

@section('content')
<div class="container mt-5">
    <h1>Pictures</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Picture 1">
                <div class="card-body">
                    <h5 class="card-title">Picture 1</h5>
                    <p class="card-text">Description of Picture 1.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Picture 2">
                <div class="card-body">
                    <h5 class="card-title">Picture 2</h5>
                    <p class="card-text">Description of Picture 2.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Picture 3">
                <div class="card-body">
                    <h5 class="card-title">Picture 3</h5>
                    <p class="card-text">Description of Picture 3.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
