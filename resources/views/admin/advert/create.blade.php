@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Создание объявления @endslot
    @slot('parent') Главная @endslot
    @slot('active') Объявления @endslot
  @endcomponent

  <hr>
  @if(!empty($errors->first()))
      
  <script>alert("{{ $errors->first() }}");</script>

@endif 
<hr>

  <form class="form-horizontal" 
        action="{{route('admin.advert.store')}}" 
           method="post"
           enctype="multipart/form-data">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.advert.partials.form')

    </form>
</div>

@endsection