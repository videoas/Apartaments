
    
  <option value="Автономное отопление" 
  @isset($advert->id)  
   @if (in_array("Автономное отопление", $additionallies))
                selected="selected"
        @endif
  @endisset      
  
   >Автономное отопление</option>

  <option value="Больница/поликлиника"
  @isset($advert->id)
   @if (in_array("Больница/поликлиника", $additionallies))
                selected="selected"
        @endif
  @endisset      
  >Больница/поликлиника</option>
  <option value="Бронированная дверь"
  @isset($advert->id)
  @if (in_array("Бронированная дверь", $additionallies))
                selected="selected"
        @endif
  @endisset      
  >Бронированная дверь</option>
  <option value="Видеонаблюдение"
  @isset($advert->id)
    @if (in_array("Видеонаблюдение", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Видеонаблюдение</option>
  <option value="Готов к въезду"
  @isset($advert->id)
    @if (in_array("Готов к въезду", $additionallies))
                selected="selected"
        @endif
  @endisset       
  >Готов к въезду</option>
  <option value="Детская площадка"
  @isset($advert->id)
    @if (in_array("Детская площадка", $additionallies))
                selected="selected"
        @endif
  @endisset      
  >Детская площадка</option>
  <option value="Детский сад"
  @isset($advert->id)
   @if (in_array("Детский сад", $additionallies))
                selected="selected"
        @endif
  @endisset      
  >Детский сад</option>
  <option value="Домофон"
  @isset($advert->id)
   @if (in_array("Домофон", $additionallies))
                selected="selected"
        @endif
  @endisset      
  >Домофон</option>
  <option value="Интернет"
  @isset($advert->id)
   @if (in_array("Интернет", $additionallies))
                selected="selected"
        @endif
  @endisset      
  >Интернет</option>
  <option value="Кондиционер"
  @isset($advert->id)
  @if (in_array("Кондиционер", $additionallies))
                selected="selected"
        @endif
  @endisset      
  >Кондиционер</option>
  <option value="Лифт"
  @isset($advert->id)
  @if (in_array("Лифт", $additionallies))
                selected="selected"
        @endif
  @endisset  
  >Лифт</option>
  <option value="Мебелирована"
  @isset($advert->id)
  @if (in_array("Мебелирована", $additionallies))
                selected="selected"
        @endif
  @endisset 
  >Мебелирована</option>
  <option value="Отдельный вход"
  @isset($advert->id)
   @if (in_array("Отдельный вход", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Отдельный вход</option>
  <option value="Паркет"
  @isset($advert->id)
   @if (in_array("Паркетд", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Паркет</option>
  <option value="Парковая зона"
  @isset($advert->id)
   @if (in_array("Парковая зона", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Парковая зона</option>
  <option value="Пристройка"
  @isset($advert->id)
   @if (in_array("Пристройка", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Пристройка</option>
  <option value="Продуктовый рынок"
   @isset($advert->id)
   @if (in_array("Продуктовый рынок", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Продуктовый рынок</option>
  <option value="С бытовой техникой"
  @isset($advert->id)
   @if (in_array("С бытовой техникой", $additionallies))
                selected="selected"
        @endif
  @endisset
  >С бытовой техникой</option>
  <option value="Сигнализация"
   @isset($advert->id)
  @if (in_array("Сигнализация", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Сигнализация</option>
  <option value="Система умный дом"
   @isset($advert->id)
   @if (in_array("Система умный дом", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Система умный дом</option>
  <option value="Стеклопакет"
   @isset($advert->id)
   @if (in_array("Стеклопакет", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Стеклопакет</option>
  <option value="Супермаркет"
  @isset($advert->id)
   @if (in_array("Супермаркет", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Супермаркет</option>
  <option value="ТВ кабель"
   @isset($advert->id)
   @if (in_array("ТВ кабель", $additionallies))
                selected="selected"
        @endif
  @endisset
  >ТВ кабель</option>
  <option value="Телефонная линия"
  @isset($advert->id)
   @if (in_array("Телефонная линия", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Телефонная линия</option>
  <option value="Теплые полы"
   @isset($advert->id)
   @if (in_array("Теплые полы", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Теплые полы</option>
  <option value="Школа"
   @isset($advert->id)
   @if (in_array("Школа", $additionallies))
                selected="selected"
        @endif
  @endisset
  >Школа</option>

   
    {!! $delimiter or "" !!}{{$additionally->name or ""}}
  </option>

  
