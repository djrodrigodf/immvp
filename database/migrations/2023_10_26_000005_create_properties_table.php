<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_of_ad')->nullable();
            $table->string('code')->nullable();
            $table->string('goal')->nullable();
            $table->string('status')->nullable();
            $table->string('highlight_grupo_zap')->nullable();
            $table->string('highlight_chaves_na_mao')->nullable();
            $table->string('property_type')->nullable();
            $table->string('property_characteristics')->nullable();
            $table->string('cep_address')->nullable();
            $table->string('city_address')->nullable();
            $table->string('uf_address')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('district_address')->nullable();
            $table->string('number_address')->nullable();
            $table->string('complement_address')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('property_status')->nullable();
            $table->string('who_lives_in_the_property')->nullable();
            $table->string('useful_area')->nullable();
            $table->string('rooms')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('year_of_construction')->nullable();
            $table->string('date_of_last_renovation')->nullable();
            $table->string('how_many_floors')->nullable();
            $table->string('apatments_peer_floor')->nullable();
            $table->string('elevators')->nullable();
            $table->string('type_of_keys')->nullable();
            $table->string('key_location')->nullable();
            $table->string('lock_password')->nullable();
            $table->string('parking_spaces')->nullable();
            $table->string('type_of_vacancy')->nullable();
            $table->string('vacancy_number')->nullable();
            $table->string('vacancy_location')->nullable();
            $table->longText('description')->nullable();
            $table->string('title')->nullable();
            $table->string('building_condominium')->nullable();
            $table->longText('observation')->nullable();
            $table->string('property_paid_off')->nullable();
            $table->string('debit_balance')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_email')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('owner_cpf')->nullable();
            $table->string('condominium_value')->nullable();
            $table->string('value_of_iptu')->nullable();
            $table->string('additional_iptu')->nullable();
            $table->string('iptu_paid')->nullable();
            $table->decimal('value', 15, 2)->nullable();
            $table->string('exclusivity')->nullable();
            $table->string('furnished_apartment')->nullable();
            $table->string('sunny_unit')->nullable();
            $table->string('sunny_position')->nullable();
            $table->decimal('first_rent_payment_value', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
