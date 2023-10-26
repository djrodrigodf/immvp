<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes, Tenantable;

    public $table = 'properties';

    public const IPTU_PAID_SELECT = [
        '1' => 'Sim',
        '0' => 'Não',
    ];

    public const EXCLUSIVITY_RADIO = [
        '1' => 'Sim',
        '0' => 'Não',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const FURNISHED_APARTMENT_RADIO = [
        '1' => 'Sim',
        '0' => 'Não',
    ];

    public const TYPE_OF_VACANCY_SELECT = [
        'fixa'     => 'Fixa',
        'rotativa' => 'Rotativa',
    ];

    public const TYPE_OF_AD_SELECT = [
        'SALE' => 'SALE',
        'RENT' => 'RENT',
        'BOTH' => 'BOTH',
    ];

    public const GOAL_SELECT = [
        'residencial' => 'residencial',
        'rual'        => 'rual',
        'comercial'   => 'comercial',
    ];

    public const PROPERTY_TYPE_SELECT = [
        'apartamento' => 'Apartamento',
        'casa'        => 'Casa',
        'chacara'     => 'Chacara',
    ];

    public const PROPERTY_CHARACTERISTICS_SELECT = [
        'edificio' => 'Edificio',
        'terreno'  => 'Terreno',
        'casa'     => 'Casa',
    ];

    public const WHO_LIVES_IN_THE_PROPERTY_SELECT = [
        'vago'                     => 'Vago',
        'disponibilidade-imediata' => 'Disponibilidade imediata',
    ];

    public const HIGHLIGHT_GRUPO_ZAP_SELECT = [
        'destaque'       => 'Destaque',
        'super destaque' => 'Super Destaque',
        'simples'        => 'Simples',
    ];

    public const HIGHLIGHT_CHAVES_NA_MAO_SELECT = [
        'destaque'       => 'destaque',
        'super destaque' => 'super destaque',
        'simples'        => 'simples',
    ];

    public const STATUS_SELECT = [
        'aguardando'   => 'Aguardando',
        'aprovacao'    => 'Aprovação',
        'publicado'    => 'Publicado',
        'despublicado' => 'Despublicado',
        'vendido'      => 'Vendido',
        'alugado'      => 'Alugado',
    ];

    protected $fillable = [
        'type_of_ad',
        'code',
        'goal',
        'status',
        'highlight_grupo_zap',
        'highlight_chaves_na_mao',
        'property_type',
        'property_characteristics',
        'cep_address',
        'city_address',
        'uf_address',
        'logradouro',
        'district_address',
        'number_address',
        'complement_address',
        'latitude',
        'longitude',
        'property_status',
        'who_lives_in_the_property',
        'useful_area',
        'rooms',
        'bedrooms',
        'bathrooms',
        'year_of_construction',
        'date_of_last_renovation',
        'how_many_floors',
        'apatments_peer_floor',
        'elevators',
        'type_of_keys',
        'key_location',
        'lock_password',
        'parking_spaces',
        'type_of_vacancy',
        'vacancy_number',
        'vacancy_location',
        'description',
        'title',
        'building_condominium',
        'observation',
        'property_paid_off',
        'debit_balance',
        'owner_name',
        'owner_email',
        'owner_phone',
        'owner_cpf',
        'condominium_value',
        'value_of_iptu',
        'additional_iptu',
        'iptu_paid',
        'value',
        'exclusivity',
        'furnished_apartment',
        'sunny_unit',
        'sunny_position',
        'first_rent_payment_value',
    ];

    public $orderable = [
        'id',
        'type_of_ad',
        'code',
        'goal',
        'status',
        'highlight_grupo_zap',
        'highlight_chaves_na_mao',
        'property_type',
        'property_characteristics',
        'cep_address',
        'city_address',
        'uf_address',
        'logradouro',
        'district_address',
        'number_address',
        'complement_address',
        'latitude',
        'longitude',
        'property_status',
        'who_lives_in_the_property',
        'useful_area',
        'rooms',
        'bedrooms',
        'bathrooms',
        'year_of_construction',
        'date_of_last_renovation',
        'how_many_floors',
        'apatments_peer_floor',
        'elevators',
        'type_of_keys',
        'key_location',
        'lock_password',
        'parking_spaces',
        'type_of_vacancy',
        'vacancy_number',
        'vacancy_location',
        'description',
        'title',
        'building_condominium',
        'observation',
        'property_paid_off',
        'debit_balance',
        'owner_name',
        'owner_email',
        'owner_phone',
        'owner_cpf',
        'condominium_value',
        'value_of_iptu',
        'additional_iptu',
        'iptu_paid',
        'value',
        'exclusivity',
        'furnished_apartment',
        'sunny_unit',
        'sunny_position',
        'first_rent_payment_value',
    ];

    public $filterable = [
        'id',
        'type_of_ad',
        'code',
        'goal',
        'status',
        'highlight_grupo_zap',
        'highlight_chaves_na_mao',
        'property_type',
        'property_characteristics',
        'cep_address',
        'city_address',
        'uf_address',
        'logradouro',
        'district_address',
        'number_address',
        'complement_address',
        'latitude',
        'longitude',
        'property_status',
        'who_lives_in_the_property',
        'useful_area',
        'rooms',
        'bedrooms',
        'bathrooms',
        'year_of_construction',
        'date_of_last_renovation',
        'how_many_floors',
        'apatments_peer_floor',
        'elevators',
        'type_of_keys',
        'key_location',
        'lock_password',
        'parking_spaces',
        'type_of_vacancy',
        'vacancy_number',
        'vacancy_location',
        'description',
        'title',
        'building_condominium',
        'observation',
        'property_paid_off',
        'debit_balance',
        'owner_name',
        'owner_email',
        'owner_phone',
        'owner_cpf',
        'condominium_value',
        'value_of_iptu',
        'additional_iptu',
        'iptu_paid',
        'value',
        'exclusivity',
        'furnished_apartment',
        'sunny_unit',
        'sunny_position',
        'first_rent_payment_value',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getTypeOfAdLabelAttribute($value)
    {
        return static::TYPE_OF_AD_SELECT[$this->type_of_ad] ?? null;
    }

    public function getGoalLabelAttribute($value)
    {
        return static::GOAL_SELECT[$this->goal] ?? null;
    }

    public function getStatusLabelAttribute($value)
    {
        return static::STATUS_SELECT[$this->status] ?? null;
    }

    public function getHighlightGrupoZapLabelAttribute($value)
    {
        return static::HIGHLIGHT_GRUPO_ZAP_SELECT[$this->highlight_grupo_zap] ?? null;
    }

    public function getHighlightChavesNaMaoLabelAttribute($value)
    {
        return static::HIGHLIGHT_CHAVES_NA_MAO_SELECT[$this->highlight_chaves_na_mao] ?? null;
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getPropertyTypeLabelAttribute($value)
    {
        return static::PROPERTY_TYPE_SELECT[$this->property_type] ?? null;
    }

    public function getPropertyCharacteristicsLabelAttribute($value)
    {
        return static::PROPERTY_CHARACTERISTICS_SELECT[$this->property_characteristics] ?? null;
    }

    public function getWhoLivesInThePropertyLabelAttribute($value)
    {
        return static::WHO_LIVES_IN_THE_PROPERTY_SELECT[$this->who_lives_in_the_property] ?? null;
    }

    public function getTypeOfVacancyLabelAttribute($value)
    {
        return static::TYPE_OF_VACANCY_SELECT[$this->type_of_vacancy] ?? null;
    }

    public function getIptuPaidLabelAttribute($value)
    {
        return static::IPTU_PAID_SELECT[$this->iptu_paid] ?? null;
    }

    public function getExclusivityLabelAttribute($value)
    {
        return static::EXCLUSIVITY_RADIO[$this->exclusivity] ?? null;
    }

    public function getFurnishedApartmentLabelAttribute($value)
    {
        return static::FURNISHED_APARTMENT_RADIO[$this->furnished_apartment] ?? null;
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
