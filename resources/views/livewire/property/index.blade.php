<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('property_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Property" format="csv" />
                <livewire:excel-export model="Property" format="xlsx" />
                <livewire:excel-export model="Property" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.property.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.type_of_ad') }}
                            @include('components.table.sort', ['field' => 'type_of_ad'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.code') }}
                            @include('components.table.sort', ['field' => 'code'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.goal') }}
                            @include('components.table.sort', ['field' => 'goal'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.status') }}
                            @include('components.table.sort', ['field' => 'status'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.highlight_grupo_zap') }}
                            @include('components.table.sort', ['field' => 'highlight_grupo_zap'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.highlight_chaves_na_mao') }}
                            @include('components.table.sort', ['field' => 'highlight_chaves_na_mao'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.property_type') }}
                            @include('components.table.sort', ['field' => 'property_type'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.property_characteristics') }}
                            @include('components.table.sort', ['field' => 'property_characteristics'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.cep_address') }}
                            @include('components.table.sort', ['field' => 'cep_address'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.city_address') }}
                            @include('components.table.sort', ['field' => 'city_address'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.uf_address') }}
                            @include('components.table.sort', ['field' => 'uf_address'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.logradouro') }}
                            @include('components.table.sort', ['field' => 'logradouro'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.district_address') }}
                            @include('components.table.sort', ['field' => 'district_address'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.number_address') }}
                            @include('components.table.sort', ['field' => 'number_address'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.complement_address') }}
                            @include('components.table.sort', ['field' => 'complement_address'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.latitude') }}
                            @include('components.table.sort', ['field' => 'latitude'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.longitude') }}
                            @include('components.table.sort', ['field' => 'longitude'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.property_status') }}
                            @include('components.table.sort', ['field' => 'property_status'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.who_lives_in_the_property') }}
                            @include('components.table.sort', ['field' => 'who_lives_in_the_property'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.useful_area') }}
                            @include('components.table.sort', ['field' => 'useful_area'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.rooms') }}
                            @include('components.table.sort', ['field' => 'rooms'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.bedrooms') }}
                            @include('components.table.sort', ['field' => 'bedrooms'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.bathrooms') }}
                            @include('components.table.sort', ['field' => 'bathrooms'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.year_of_construction') }}
                            @include('components.table.sort', ['field' => 'year_of_construction'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.date_of_last_renovation') }}
                            @include('components.table.sort', ['field' => 'date_of_last_renovation'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.how_many_floors') }}
                            @include('components.table.sort', ['field' => 'how_many_floors'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.apatments_peer_floor') }}
                            @include('components.table.sort', ['field' => 'apatments_peer_floor'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.elevators') }}
                            @include('components.table.sort', ['field' => 'elevators'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.type_of_keys') }}
                            @include('components.table.sort', ['field' => 'type_of_keys'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.key_location') }}
                            @include('components.table.sort', ['field' => 'key_location'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.lock_password') }}
                            @include('components.table.sort', ['field' => 'lock_password'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.parking_spaces') }}
                            @include('components.table.sort', ['field' => 'parking_spaces'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.type_of_vacancy') }}
                            @include('components.table.sort', ['field' => 'type_of_vacancy'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.vacancy_number') }}
                            @include('components.table.sort', ['field' => 'vacancy_number'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.vacancy_location') }}
                            @include('components.table.sort', ['field' => 'vacancy_location'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.description') }}
                            @include('components.table.sort', ['field' => 'description'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.title') }}
                            @include('components.table.sort', ['field' => 'title'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.building_condominium') }}
                            @include('components.table.sort', ['field' => 'building_condominium'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.observation') }}
                            @include('components.table.sort', ['field' => 'observation'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.property_paid_off') }}
                            @include('components.table.sort', ['field' => 'property_paid_off'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.debit_balance') }}
                            @include('components.table.sort', ['field' => 'debit_balance'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.owner_name') }}
                            @include('components.table.sort', ['field' => 'owner_name'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.owner_email') }}
                            @include('components.table.sort', ['field' => 'owner_email'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.owner_phone') }}
                            @include('components.table.sort', ['field' => 'owner_phone'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.owner_cpf') }}
                            @include('components.table.sort', ['field' => 'owner_cpf'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.condominium_value') }}
                            @include('components.table.sort', ['field' => 'condominium_value'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.value_of_iptu') }}
                            @include('components.table.sort', ['field' => 'value_of_iptu'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.additional_iptu') }}
                            @include('components.table.sort', ['field' => 'additional_iptu'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.iptu_paid') }}
                            @include('components.table.sort', ['field' => 'iptu_paid'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.value') }}
                            @include('components.table.sort', ['field' => 'value'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.exclusivity') }}
                            @include('components.table.sort', ['field' => 'exclusivity'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.furnished_apartment') }}
                            @include('components.table.sort', ['field' => 'furnished_apartment'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.sunny_unit') }}
                            @include('components.table.sort', ['field' => 'sunny_unit'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.sunny_position') }}
                            @include('components.table.sort', ['field' => 'sunny_position'])
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.first_rent_payment_value') }}
                            @include('components.table.sort', ['field' => 'first_rent_payment_value'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($properties as $property)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $property->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $property->id }}
                            </td>
                            <td>
                                {{ $property->type_of_ad_label }}
                            </td>
                            <td>
                                {{ $property->code }}
                            </td>
                            <td>
                                {{ $property->goal_label }}
                            </td>
                            <td>
                                {{ $property->status_label }}
                            </td>
                            <td>
                                {{ $property->highlight_grupo_zap_label }}
                            </td>
                            <td>
                                {{ $property->highlight_chaves_na_mao_label }}
                            </td>
                            <td>
                                {{ $property->property_type_label }}
                            </td>
                            <td>
                                {{ $property->property_characteristics_label }}
                            </td>
                            <td>
                                {{ $property->cep_address }}
                            </td>
                            <td>
                                {{ $property->city_address }}
                            </td>
                            <td>
                                {{ $property->uf_address }}
                            </td>
                            <td>
                                {{ $property->logradouro }}
                            </td>
                            <td>
                                {{ $property->district_address }}
                            </td>
                            <td>
                                {{ $property->number_address }}
                            </td>
                            <td>
                                {{ $property->complement_address }}
                            </td>
                            <td>
                                {{ $property->latitude }}
                            </td>
                            <td>
                                {{ $property->longitude }}
                            </td>
                            <td>
                                {{ $property->property_status }}
                            </td>
                            <td>
                                {{ $property->who_lives_in_the_property_label }}
                            </td>
                            <td>
                                {{ $property->useful_area }}
                            </td>
                            <td>
                                {{ $property->rooms }}
                            </td>
                            <td>
                                {{ $property->bedrooms }}
                            </td>
                            <td>
                                {{ $property->bathrooms }}
                            </td>
                            <td>
                                {{ $property->year_of_construction }}
                            </td>
                            <td>
                                {{ $property->date_of_last_renovation }}
                            </td>
                            <td>
                                {{ $property->how_many_floors }}
                            </td>
                            <td>
                                {{ $property->apatments_peer_floor }}
                            </td>
                            <td>
                                {{ $property->elevators }}
                            </td>
                            <td>
                                {{ $property->type_of_keys }}
                            </td>
                            <td>
                                {{ $property->key_location }}
                            </td>
                            <td>
                                {{ $property->lock_password }}
                            </td>
                            <td>
                                {{ $property->parking_spaces }}
                            </td>
                            <td>
                                {{ $property->type_of_vacancy_label }}
                            </td>
                            <td>
                                {{ $property->vacancy_number }}
                            </td>
                            <td>
                                {{ $property->vacancy_location }}
                            </td>
                            <td>
                                {{ $property->description }}
                            </td>
                            <td>
                                {{ $property->title }}
                            </td>
                            <td>
                                {{ $property->building_condominium }}
                            </td>
                            <td>
                                {{ $property->observation }}
                            </td>
                            <td>
                                {{ $property->property_paid_off }}
                            </td>
                            <td>
                                {{ $property->debit_balance }}
                            </td>
                            <td>
                                {{ $property->owner_name }}
                            </td>
                            <td>
                                {{ $property->owner_email }}
                            </td>
                            <td>
                                {{ $property->owner_phone }}
                            </td>
                            <td>
                                {{ $property->owner_cpf }}
                            </td>
                            <td>
                                {{ $property->condominium_value }}
                            </td>
                            <td>
                                {{ $property->value_of_iptu }}
                            </td>
                            <td>
                                {{ $property->additional_iptu }}
                            </td>
                            <td>
                                {{ $property->iptu_paid_label }}
                            </td>
                            <td>
                                {{ $property->value }}
                            </td>
                            <td>
                                {{ $property->exclusivity_label }}
                            </td>
                            <td>
                                {{ $property->furnished_apartment_label }}
                            </td>
                            <td>
                                {{ $property->sunny_unit }}
                            </td>
                            <td>
                                {{ $property->sunny_position }}
                            </td>
                            <td>
                                {{ $property->first_rent_payment_value }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('property_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.properties.show', $property) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('property_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.properties.edit', $property) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('property_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $property->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $properties->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush