 <label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($advert->id))
    <option value="0" @if ($advert->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($advert->published == 1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>

<label for="" Style= "color:red">Заголовок</label>
<input type="text" class="form-control" name="title_ru" placeholder="Заголовок новости" value="{{$advert->title_ru or ""}}" required>

<label for="" Style= "color:red">Titlu</label>
<input type="text" class="form-control" name="title_ro" placeholder="Publicitate Titlu" value="{{$advert->title_ro or ""}}" required>


<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$advert->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
  @include('admin.advert.partials.categories', ['categories' => $categories])
</select>

<label for="" Style= "color:red">Класс объявлений</label>
<select class="form-control" size="4" name="grade" multiple="" Style= "color:red">
  <option value="{{$advert->grade or ""}}">
  <option value="Объявление">Объявление</option>
 <option value="Слайдер объявления">Слайдер объявление</option>
 <option value="VIP объяление">VIP объявление </option>
</select>

<label for="">Прайс</label>
<input type="text" class="form-control" name="price" placeholder="Цена" value="{{$advert->price or " "}}" required>


<label for="">Регион</label>
<select class="form-control" size="6" name="region" multiple="">
 <option value="{{$advert->region or ""}}">
 <option value="мун. Хынчешть">мун. Хынчешть </option>
 <option value="мун.Кишинэу">мун. Кишинэу </option>
 <option value="Яловень">Яловень </option>
 <option value="Леова">Леова </option>
 <option value="Чимишлия">Чимишлия </option>

</select>

<label for="">Тип предложения</label>
<select class="form-control" size="6" name="sentence" multiple="">
   <option value="{{$advert->sentence or ""}}">
   <option value="Продам">Продам </option>
   <option value="Куплю">Куплю </option>
   <option value="Сдаю помесячно">Сдаю помесячно</option>
   <option value="Сдаю посуточно">Сдаю посуточно</option>
   <option value="Меняю">Меняю</option>
</select>

<label for="">Жилой фонд</label>
 <select class="form-control" size="3" name="housing" multiple="">
   <option value="{{$advert->housing or ""}}">
   <option value="Вторичный">Вторичный </option>
   <option value="Новострой">Новострой </option>
 </select>

 <label for="">Количество комнат</label>
 <select class="form-control" size="9" name="nrooms" multiple="">
   <option value="{{$advert->nrooms or ""}}">
   <option value="Комната">Комната </option>
   <option value="1 комнатная квартира">1 комнатная квартира </option>
   <option value="2-х комнатная квартира">2-х комнатная квартира</option>
   <option value="3-х комнатная квартира">3-х комнатная квартира</option>
   <option value="4-х комнатная квартира">4-х комнатная квартира</option>
   <option value="5-и комнатные квартиры">4-х комнатная квартира</option>
   <option value="Сдаю посуточно">Сдаю посуточно</option>
   <option value="Меняю">Меняю</option>
</select>

<label for="">Состояние квартиры</label>
<select class="form-control"size="10" name="state" multiple="">
   <option value="{{$advert->state or ""}}">
  <option value="Дом под снос">Дом под снос</option>
  <option value="Индивидуальный дизайн">Индивидуальный дизайн</option>
  <option value="Без ремонта">Без ремонта</option>
  <option value="Незавершенное cтроительство"> Незавершенное cтроительство</option>
  <option value="Нуждается в ремонте">Нуждается в ремонте</option>
  <option value="Cерый вариант">Cерый вариант</option>
  <option value="Белый вариант">Белый вариант</option>
  <option value="Косметический pемонт">Косметический pемонт</option>
  <option value="Eвроремонт">Eвроремонт</option>
</select> 

<label for="">Дополнительно</label>
<select class="form-control" size="27" name="additionallies[]" multiple="">
  @include('admin.advert.partials.additionallies', ['additionallies' => $additionallies])
</select> 

<label for="">Планировка</label>
<select class="form-control" size="15" name="layout" multiple="">
  <option value="{{$advert->layout or ""}}">
  <option value="102">102</option>
  <option value="135">135</option>
  <option value="140">140</option>
  <option value="Брежневка">Брежневка</option>
  <option value="Варницккая">Варницкая</option>
  <option value="Гостинка">Гостинка</option>
  <option value="Индивидуальная">Индивидуальная</option>
  <option value="Малосемейка">Малосемейка</option>
  <option value="Молд.Серия">Молд.серия</option>
  <option value="На земле">На земле</option>
  <option value="Рубашка">Рубашка</option>
  <option value="Сталинка">Сталинка</option>
  <option value="Хрущевка">Хрущевка</option>
  <option value="Чешка">Чешка</option>
</select> 

<label for="">Общая площадь</label>
<input type="text" class="form-control" name="area" placeholder="Общая площадь" value="{{$advert->area or " "}}" required>

<label for="">Этаж</label>
<input type="text" class="form-control" name="floor" placeholder="Этаж" value="{{$advert->floor or " "}}" required>

<label for="">Количество этажей</label>
<input type="text" class="form-control" name="floors" placeholder="Количество этажей" value="{{$advert->floors or " "}}" required>


<label for="">Тип здания</label>
<select class="form-control" size="11" name="building" multiple="">
  <option value="{{$advert->building or ""}}">
  <option value="Панельный">Панельный</option>
  <option value="Kотельцовый">Kотельцовый</option>
  <option value="Kирпичный">Kирпичный</option>
  <option value="Блочный">Блочный</option>
  <option value="Mонолитный">Mонолитный</option>
  <option value="Гостинка">Гостинка</option>
  <option value="Бетон">Бетон</option>
  <option value="Kомбинированный">Kомбинированный</option>
  <option value="Ячеистый Бетон">Ячеистый Бетон</option>
  <option value="Дерево">Дерево</option>
 </select>

 <label for="">Жилая площадь</label>
 <input type="text" class="form-control" name="waiting" placeholder="Жилая площадь" value="{{$advert->waiting or " "}}" required>

 <label for="">Площадь кухни</label>
 <input type="text" class="form-control" name="kitchen" placeholder="Плщадь кухни" value="{{$advert->kitchen or " "}}" required>

 <label for="">Балкон/Лоджия</label>
 <input type="text" class="form-control" name="balcony" placeholder="Балкон/Лоджия" value="{{$advert->balcony or " "}}" required>

 <label for="">Высота потолка</label>
 <input type="text" class="form-control" name="ceiling" placeholder="Плщадь кухни" value="{{$advert->ceiling or " "}}" required>

 <label for="">Санузел</label>
 <input type="text" class="form-control" name="bathroom" placeholder="Санузел" value="{{$advert->bathroom or " "}}" required>

<label for="">Парковачное Место</label>
 <select class="form-control" name="parking" size="5" multiple="">
  <option value="{{$advert->parking or ""}}">
   <option value="Под навесом">Под навесом</option>
   <option value="Подземная">Подземная</option>
   <option value="Гараж">Гараж</option>
   <option value="Oткрытое">Oткрытое</option>
 </select>

 <label for="" Style= "color:red">Полное описание</label>
<textarea class="form-control" id="description_ru" name="description_ru">{{$advert->description_ru or " "}}</textarea>

<label for="" Style= "color:red">Descrierea desfasurata</label>
<textarea class="form-control" id="description_ro" name="description_ro">{{$advert->description_ro or " "}}</textarea> 



<h4>Загрузка Фото </h4> 
     
 <label for="exampleInputFile"> Введите файлы</label>
 <input type="file" name="picture[]" id="exampleInputFile" multiple>
  <hr>

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$advert->meta_title or ""}}">
<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$advert->meta_description or ""}}">
<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$advert->meta_keyword or ""}}">
<hr>
<input class="btn btn-primary" type="submit" value="Сохранить"> 
