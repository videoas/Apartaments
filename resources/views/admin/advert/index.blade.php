@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Список объявлений @endslot
    @slot('parent') Главная @endslot
    @slot('active') Объявления @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.advert.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать объявление</a>
 <br>
 
  <h1>VIP Объявления</h1>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>   
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      <hr>
       @if(session()->has('message'))
        <h1 class="alert alert-success"> {{session()->get('message')}}</h1>  
    @endif           
    <hr>
     @forelse ($adverts as $advert)
        @if ($advert->grade == "VIP объяление")
        <tr>
          <td>{{$advert->title_ru}}</td>
          <td>{{$advert->published}}</td>
          <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.advert.destroy', $advert)}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">

              <a class="btn btn-default" href="{{route('admin.advert.edit', $advert)}}"><i class="fa fa-edit"></i></a>

              <button type="submit" class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>
        @endif
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
    
  </table>
    <h1>Слайдер объявление</h1>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      <hr>
       @if(session()->has('message'))
        <h1 class="alert alert-success"> {{session()->get('message')}}</h1>  
    @endif           
    <hr>
      
      @forelse ($adverts as $advert)
        @if ($advert->grade == "Слайдер объявления")
        <tr>
          <td>{{$advert->title_ru}}</td>
          <td>{{$advert->published}}</td>
          <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.advert.destroy', $advert)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

              <a class="btn btn-default" href="{{route('admin.advert.edit', $advert)}}"><i class="fa fa-edit"></i></a>

              <button type="submit" class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>
        @endif
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
    
  </table>
 <hr>
  <h1>Объявления</h1>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      
      @forelse ($adverts as $advert)
        @if ($advert->grade == "Объявление")
        <tr>
          <td>{{$advert->title_ru}}</td>
          <td>{{$advert->published}}</td>
          <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.advert.destroy', $advert)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

              <a class="btn btn-default" href="{{route('admin.advert.edit', $advert)}}"><i class="fa fa-edit"></i></a>

              <button type="submit" class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>
        @endif
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination pull-right">
            {{$adverts->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>
  </table>
</div>

@endsection
