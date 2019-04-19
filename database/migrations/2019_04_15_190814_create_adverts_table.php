<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->boolean('published');
            $table->string('title_ru'); // заголовок  
            $table->string('title_ro'); // заголовок  
            $table->text('description_ru'); //новое описание
            $table->text('description_ro'); //новое описание
            $table->float('price', 8, 2)->nullable(); //высота потолков
            $table->string('grade', 25); //какому классу принадлежит vip или др.
            $table->string('region', 25)->nullable(); //регион
            $table->string('sentence', 25)->nullable(); //тип предложения
            $table->string('housing', 15)->nullable(); //жилой фонд
            $table->string('nrooms', 25)->nullable(); //Количество комнат
            $table->string('state', 27)->nullable(); //состояние
            $table->string('layout', 20)->nullable(); //планировка
            $table->float('area', 6, 2)->nullable(); //общая площадь
            $table->integer('floor')->nullable()->unsigned(); //этаж
            $table->integer('floors')->nullable()->unsigned(); //количество этажей
            $table->string('building', 20)->nullable(); //тип здания
            $table->float('waiting', 5, 2)->nullable(); //жилая площадь
            $table->float('kitchen', 5, 2)->nullable(); //площадь кухни
            $table->string('balcony', 10)->nullable(); //балкон
            $table->float('ceiling', 5, 2)->nullable(); //высота потолков
            $table->string('bathroom', 10)->nullable(); //санузел
            $table->string('parking', 25)->nullable(); //парковачное место
            $table->string('meta_title')->nullable();         //meta загаловок 
            $table->string('meta_description')->nullable();   //meta описанеие
            $table->string('meta_keyword')->nullable();       //ключевые слова
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}
