@if(count($errors) > 0)
@foreach($errors->all() as $error)
  <p class="alert alert-danger">{{ $error }}</p>
@endforeach
@endif
@if(session()->has('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
@if(session()->has('error'))
<p class="alert alert-danger">{{ session('error') }}</p>
@endif
@if(session()->has('warning'))
<p class="alert alert-warning">{{ session('warning') }}</p>
@endif