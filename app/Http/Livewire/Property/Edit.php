<?php

namespace App\Http\Livewire\Property;

use App\Models\Property;
use Livewire\Component;

class Edit extends Component
{
    public Property $property;

    public array $listsForFields = [];

    public function mount(Property $property)
    {
        $this->property = $property;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.property.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->property->save();

        return redirect()->route('admin.properties.index');
    }

    protected function rules(): array
    {
        return [
            'property.type_of_ad' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['type_of_ad'])),
            ],
            'property.code' => [
                'string',
                'nullable',
            ],
            'property.goal' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['goal'])),
            ],
            'property.status' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['status'])),
            ],
            'property.highlight_grupo_zap' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['highlight_grupo_zap'])),
            ],
            'property.highlight_chaves_na_mao' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['highlight_chaves_na_mao'])),
            ],
            'property.property_type' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['property_type'])),
            ],
            'property.property_characteristics' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['property_characteristics'])),
            ],
            'property.cep_address' => [
                'string',
                'nullable',
            ],
            'property.city_address' => [
                'string',
                'nullable',
            ],
            'property.uf_address' => [
                'string',
                'nullable',
            ],
            'property.logradouro' => [
                'string',
                'nullable',
            ],
            'property.district_address' => [
                'string',
                'nullable',
            ],
            'property.number_address' => [
                'string',
                'nullable',
            ],
            'property.complement_address' => [
                'string',
                'nullable',
            ],
            'property.latitude' => [
                'string',
                'nullable',
            ],
            'property.longitude' => [
                'string',
                'nullable',
            ],
            'property.property_status' => [
                'string',
                'nullable',
            ],
            'property.who_lives_in_the_property' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['who_lives_in_the_property'])),
            ],
            'property.useful_area' => [
                'string',
                'nullable',
            ],
            'property.rooms' => [
                'string',
                'nullable',
            ],
            'property.bedrooms' => [
                'string',
                'nullable',
            ],
            'property.bathrooms' => [
                'string',
                'nullable',
            ],
            'property.year_of_construction' => [
                'string',
                'nullable',
            ],
            'property.date_of_last_renovation' => [
                'string',
                'nullable',
            ],
            'property.how_many_floors' => [
                'string',
                'nullable',
            ],
            'property.apatments_peer_floor' => [
                'string',
                'nullable',
            ],
            'property.elevators' => [
                'string',
                'nullable',
            ],
            'property.type_of_keys' => [
                'string',
                'nullable',
            ],
            'property.key_location' => [
                'string',
                'nullable',
            ],
            'property.lock_password' => [
                'string',
                'nullable',
            ],
            'property.parking_spaces' => [
                'string',
                'nullable',
            ],
            'property.type_of_vacancy' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['type_of_vacancy'])),
            ],
            'property.vacancy_number' => [
                'string',
                'nullable',
            ],
            'property.vacancy_location' => [
                'string',
                'nullable',
            ],
            'property.description' => [
                'string',
                'nullable',
            ],
            'property.title' => [
                'string',
                'nullable',
            ],
            'property.building_condominium' => [
                'string',
                'nullable',
            ],
            'property.observation' => [
                'string',
                'nullable',
            ],
            'property.property_paid_off' => [
                'string',
                'nullable',
            ],
            'property.debit_balance' => [
                'string',
                'nullable',
            ],
            'property.owner_name' => [
                'string',
                'nullable',
            ],
            'property.owner_email' => [
                'string',
                'nullable',
            ],
            'property.owner_phone' => [
                'string',
                'nullable',
            ],
            'property.owner_cpf' => [
                'string',
                'nullable',
            ],
            'property.condominium_value' => [
                'string',
                'nullable',
            ],
            'property.value_of_iptu' => [
                'string',
                'nullable',
            ],
            'property.additional_iptu' => [
                'string',
                'nullable',
            ],
            'property.iptu_paid' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['iptu_paid'])),
            ],
            'property.value' => [
                'numeric',
                'nullable',
            ],
            'property.exclusivity' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['exclusivity'])),
            ],
            'property.furnished_apartment' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['furnished_apartment'])),
            ],
            'property.sunny_unit' => [
                'string',
                'nullable',
            ],
            'property.sunny_position' => [
                'string',
                'nullable',
            ],
            'property.first_rent_payment_value' => [
                'numeric',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['type_of_ad']                = $this->property::TYPE_OF_AD_SELECT;
        $this->listsForFields['goal']                      = $this->property::GOAL_SELECT;
        $this->listsForFields['status']                    = $this->property::STATUS_SELECT;
        $this->listsForFields['highlight_grupo_zap']       = $this->property::HIGHLIGHT_GRUPO_ZAP_SELECT;
        $this->listsForFields['highlight_chaves_na_mao']   = $this->property::HIGHLIGHT_CHAVES_NA_MAO_SELECT;
        $this->listsForFields['property_type']             = $this->property::PROPERTY_TYPE_SELECT;
        $this->listsForFields['property_characteristics']  = $this->property::PROPERTY_CHARACTERISTICS_SELECT;
        $this->listsForFields['who_lives_in_the_property'] = $this->property::WHO_LIVES_IN_THE_PROPERTY_SELECT;
        $this->listsForFields['type_of_vacancy']           = $this->property::TYPE_OF_VACANCY_SELECT;
        $this->listsForFields['iptu_paid']                 = $this->property::IPTU_PAID_SELECT;
        $this->listsForFields['exclusivity']               = $this->property::EXCLUSIVITY_RADIO;
        $this->listsForFields['furnished_apartment']       = $this->property::FURNISHED_APARTMENT_RADIO;
    }
}
