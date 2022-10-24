@extends('layouts.master')

@section('content')
    @section('title', 'Create Company')
    <div class="card shadow mb-4">

        <div class="card-body">
            <form action="{{ route('company.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="name" class="col-form-label">Name</label>
                    </div>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                    </div>

                    @error('name')
                        <span class="text-sm text-danger space-y-1 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
