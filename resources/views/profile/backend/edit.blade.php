@extends('layouts.dashboard')

@section('title', 'Edit Profile - Website Bukit Damar')

@php
  $header = 'Edit Profile';
@endphp

@section('content')

  <div class="row">
    <div class="col-lg-8">
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-4">
          @include('profile.backend.partials.update-profile-information-form')
        </div>
      </div>

      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-4">
          @include('profile.backend.partials.update-password-form')
        </div>
      </div>
    </div>
  </div>

@endsection
