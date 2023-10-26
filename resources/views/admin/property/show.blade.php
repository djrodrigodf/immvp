@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.property.title_singular') }}:
                    {{ trans('cruds.property.fields.id') }}
                    {{ $property->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.id') }}
                            </th>
                            <td>
                                {{ $property->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.type_of_ad') }}
                            </th>
                            <td>
                                {{ $property->type_of_ad_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.code') }}
                            </th>
                            <td>
                                {{ $property->code }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.goal') }}
                            </th>
                            <td>
                                {{ $property->goal_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.status') }}
                            </th>
                            <td>
                                {{ $property->status_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.highlight_grupo_zap') }}
                            </th>
                            <td>
                                {{ $property->highlight_grupo_zap_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.highlight_chaves_na_mao') }}
                            </th>
                            <td>
                                {{ $property->highlight_chaves_na_mao_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.property_type') }}
                            </th>
                            <td>
                                {{ $property->property_type_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.property_characteristics') }}
                            </th>
                            <td>
                                {{ $property->property_characteristics_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.cep_address') }}
                            </th>
                            <td>
                                {{ $property->cep_address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.city_address') }}
                            </th>
                            <td>
                                {{ $property->city_address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.uf_address') }}
                            </th>
                            <td>
                                {{ $property->uf_address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.logradouro') }}
                            </th>
                            <td>
                                {{ $property->logradouro }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.district_address') }}
                            </th>
                            <td>
                                {{ $property->district_address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.number_address') }}
                            </th>
                            <td>
                                {{ $property->number_address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.complement_address') }}
                            </th>
                            <td>
                                {{ $property->complement_address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.latitude') }}
                            </th>
                            <td>
                                {{ $property->latitude }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.longitude') }}
                            </th>
                            <td>
                                {{ $property->longitude }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.property_status') }}
                            </th>
                            <td>
                                {{ $property->property_status }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.who_lives_in_the_property') }}
                            </th>
                            <td>
                                {{ $property->who_lives_in_the_property_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.useful_area') }}
                            </th>
                            <td>
                                {{ $property->useful_area }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.rooms') }}
                            </th>
                            <td>
                                {{ $property->rooms }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.bedrooms') }}
                            </th>
                            <td>
                                {{ $property->bedrooms }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.bathrooms') }}
                            </th>
                            <td>
                                {{ $property->bathrooms }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.year_of_construction') }}
                            </th>
                            <td>
                                {{ $property->year_of_construction }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.date_of_last_renovation') }}
                            </th>
                            <td>
                                {{ $property->date_of_last_renovation }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.how_many_floors') }}
                            </th>
                            <td>
                                {{ $property->how_many_floors }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.apatments_peer_floor') }}
                            </th>
                            <td>
                                {{ $property->apatments_peer_floor }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.elevators') }}
                            </th>
                            <td>
                                {{ $property->elevators }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.type_of_keys') }}
                            </th>
                            <td>
                                {{ $property->type_of_keys }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.key_location') }}
                            </th>
                            <td>
                                {{ $property->key_location }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.lock_password') }}
                            </th>
                            <td>
                                {{ $property->lock_password }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.parking_spaces') }}
                            </th>
                            <td>
                                {{ $property->parking_spaces }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.type_of_vacancy') }}
                            </th>
                            <td>
                                {{ $property->type_of_vacancy_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.vacancy_number') }}
                            </th>
                            <td>
                                {{ $property->vacancy_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.vacancy_location') }}
                            </th>
                            <td>
                                {{ $property->vacancy_location }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.description') }}
                            </th>
                            <td>
                                {{ $property->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.title') }}
                            </th>
                            <td>
                                {{ $property->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.building_condominium') }}
                            </th>
                            <td>
                                {{ $property->building_condominium }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.observation') }}
                            </th>
                            <td>
                                {{ $property->observation }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.property_paid_off') }}
                            </th>
                            <td>
                                {{ $property->property_paid_off }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.debit_balance') }}
                            </th>
                            <td>
                                {{ $property->debit_balance }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.owner_name') }}
                            </th>
                            <td>
                                {{ $property->owner_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.owner_email') }}
                            </th>
                            <td>
                                {{ $property->owner_email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.owner_phone') }}
                            </th>
                            <td>
                                {{ $property->owner_phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.owner_cpf') }}
                            </th>
                            <td>
                                {{ $property->owner_cpf }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.condominium_value') }}
                            </th>
                            <td>
                                {{ $property->condominium_value }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.value_of_iptu') }}
                            </th>
                            <td>
                                {{ $property->value_of_iptu }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.additional_iptu') }}
                            </th>
                            <td>
                                {{ $property->additional_iptu }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.iptu_paid') }}
                            </th>
                            <td>
                                {{ $property->iptu_paid_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.value') }}
                            </th>
                            <td>
                                {{ $property->value }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.exclusivity') }}
                            </th>
                            <td>
                                {{ $property->exclusivity_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.furnished_apartment') }}
                            </th>
                            <td>
                                {{ $property->furnished_apartment_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.sunny_unit') }}
                            </th>
                            <td>
                                {{ $property->sunny_unit }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.sunny_position') }}
                            </th>
                            <td>
                                {{ $property->sunny_position }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.property.fields.first_rent_payment_value') }}
                            </th>
                            <td>
                                {{ $property->first_rent_payment_value }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('property_edit')
                    <a href="{{ route('admin.properties.edit', $property) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.properties.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection