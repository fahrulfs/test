<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateProductsTable extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->longtext('descriptions');
            $table->string('tags');
            $table->bigInteger('categories_id')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }
    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
