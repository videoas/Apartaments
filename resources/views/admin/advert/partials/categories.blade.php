@foreach ($categories as $category)

  <option value="{{$category->id or ""}}"

    @isset($advert->id)
      @foreach ($advert->categories as $category_advert)
        @if ($category->id == $category_advert->id)
          selected="selected"
        @endif
      @endforeach
    @endisset

    >
    {!! $delimiter or "" !!}{{$category->title_ru or ""}}
  </option>

  @if (count($category->children) > 0)

    @include('admin.advert.partials.categories', [
      'categories' => $category->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach
