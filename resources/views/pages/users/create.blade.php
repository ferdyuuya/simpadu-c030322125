@extends('layouts.app')

@section('title','New User')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>New User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Users</a></div>
                <div class="breadcrumb-item">New User</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="card-header">
                        <h4>New User</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                        <!-- Rest of your form goes here -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection