<?php

namespace App\Http\Requests;

use App\Models\Property;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePropertyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('property_edit'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'type_of_ad' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::TYPE_OF_AD_SELECT)),
            ],
            'code' => [
                'string',
                'nullable',
            ],
            'goal' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::GOAL_SELECT)),
            ],
            'status' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::STATUS_SELECT)),
            ],
            'highlight_grupo_zap' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::HIGHLIGHT_GRUPO_ZAP_SELECT)),
            ],
            'highlight_chaves_na_mao' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::HIGHLIGHT_CHAVES_NA_MAO_SELECT)),
            ],
            'property_type' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::PROPERTY_TYPE_SELECT)),
            ],
            'property_characteristics' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::PROPERTY_CHARACTERISTICS_SELECT)),
            ],
            'cep_address' => [
                'string',
                'nullable',
            ],
            'city_address' => [
                'string',
                'nullable',
            ],
            'uf_address' => [
                'string',
                'nullable',
            ],
            'logradouro' => [
                'string',
                'nullable',
            ],
            'district_address' => [
                'string',
                'nullable',
            ],
            'number_address' => [
                'string',
                'nullable',
            ],
            'complement_address' => [
                'string',
                'nullable',
            ],
            'latitude' => [
                'string',
                'nullable',
            ],
            'longitude' => [
                'string',
                'nullable',
            ],
            'property_status' => [
                'string',
                'nullable',
            ],
            'who_lives_in_the_property' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::WHO_LIVES_IN_THE_PROPERTY_SELECT)),
            ],
            'useful_area' => [
                'string',
                'nullable',
            ],
            'rooms' => [
                'string',
                'nullable',
            ],
            'bedrooms' => [
                'string',
                'nullable',
            ],
            'bathrooms' => [
                'string',
                'nullable',
            ],
            'year_of_construction' => [
                'string',
                'nullable',
            ],
            'date_of_last_renovation' => [
                'string',
                'nullable',
            ],
            'how_many_floors' => [
                'string',
                'nullable',
            ],
            'apatments_peer_floor' => [
                'string',
                'nullable',
            ],
            'elevators' => [
                'string',
                'nullable',
            ],
            'type_of_keys' => [
                'string',
                'nullable',
            ],
            'key_location' => [
                'string',
                'nullable',
            ],
            'lock_password' => [
                'string',
                'nullable',
            ],
            'parking_spaces' => [
                'string',
                'nullable',
            ],
            'type_of_vacancy' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::TYPE_OF_VACANCY_SELECT)),
            ],
            'vacancy_number' => [
                'string',
                'nullable',
            ],
            'vacancy_location' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'title' => [
                'string',
                'nullable',
            ],
            'building_condominium' => [
                'string',
                'nullable',
            ],
            'observation' => [
                'string',
                'nullable',
            ],
            'property_paid_off' => [
                'string',
                'nullable',
            ],
            'debit_balance' => [
                'string',
                'nullable',
            ],
            'owner_name' => [
                'string',
                'nullable',
            ],
            'owner_email' => [
                'string',
                'nullable',
            ],
            'owner_phone' => [
                'string',
                'nullable',
            ],
            'owner_cpf' => [
                'string',
                'nullable',
            ],
            'condominium_value' => [
                'string',
                'nullable',
            ],
            'value_of_iptu' => [
                'string',
                'nullable',
            ],
            'additional_iptu' => [
                'string',
                'nullable',
            ],
            'iptu_paid' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::IPTU_PAID_SELECT)),
            ],
            'value' => [
                'numeric',
                'nullable',
            ],
            'exclusivity' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::EXCLUSIVITY_RADIO)),
            ],
            'furnished_apartment' => [
                'nullable',
                'in:' . implode(',', array_keys(Property::FURNISHED_APARTMENT_RADIO)),
            ],
            'sunny_unit' => [
                'string',
                'nullable',
            ],
            'sunny_position' => [
                'string',
                'nullable',
            ],
            'first_rent_payment_value' => [
                'numeric',
                'nullable',
            ],
        ];
    }
}
