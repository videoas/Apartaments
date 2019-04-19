@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Редактирование объявления @endslot
    @slot('parent') Главная @endslot
    @slot('active') Объявления @endslot
  @endcomponent

  <hr>
   @if(session()->has('message'))
        <h1 class="alert alert-success"> {{session()->get('message')}}</h1>  
    @endif           
    <hr>

  <form class="form-horizontal" action="{{route('admin.advert.update', $advert)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.advert.partials.form')
   
  </form>
</div>

@endsection
