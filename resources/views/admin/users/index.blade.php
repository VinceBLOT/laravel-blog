@extends('admin.layouts.app')

@section('content')
    <div class="page-header">
      <h1>{{ __('dashboard.users') }}</h1>
    </div>

    @include ('admin/users/_list')
@endsection
