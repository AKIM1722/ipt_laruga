@extends('layouts.app')

@section('title', 'Item Page')

@section('content')
<div class="container mt-5">
    <h1>Items</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Item 1">
                <div class="card-body">
                    <h5 class="card-title">Item 1</h5>
                    <p class="card-text">Description of Item 1.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Item 2">
                <div class="card-body">
                    <h5 class="card-title">Item 2</h5>
                    <p class="card-text">Description of Item 2.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Item 3">
                <div class="card-body">
                    <h5 class="card-title">Item 3</h5>
                    <p class="card-text">Description of Item 3.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
