<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('property.type_of_ad') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.type_of_ad') }}</label>
        <select class="form-control" wire:model="property.type_of_ad">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['type_of_ad'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.type_of_ad') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.type_of_ad_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.code') ? 'invalid' : '' }}">
        <label class="form-label" for="code">{{ trans('cruds.property.fields.code') }}</label>
        <input class="form-control" type="text" name="code" id="code" wire:model.defer="property.code">
        <div class="validation-message">
            {{ $errors->first('property.code') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.code_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.goal') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.goal') }}</label>
        <select class="form-control" wire:model="property.goal">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['goal'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.goal') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.goal_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.status') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.status') }}</label>
        <select class="form-control" wire:model="property.status">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['status'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.highlight_grupo_zap') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.highlight_grupo_zap') }}</label>
        <select class="form-control" wire:model="property.highlight_grupo_zap">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['highlight_grupo_zap'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.highlight_grupo_zap') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.highlight_grupo_zap_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.highlight_chaves_na_mao') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.highlight_chaves_na_mao') }}</label>
        <select class="form-control" wire:model="property.highlight_chaves_na_mao">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['highlight_chaves_na_mao'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.highlight_chaves_na_mao') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.highlight_chaves_na_mao_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.property_type') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.property_type') }}</label>
        <select class="form-control" wire:model="property.property_type">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['property_type'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.property_type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.property_type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.property_characteristics') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.property_characteristics') }}</label>
        <select class="form-control" wire:model="property.property_characteristics">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['property_characteristics'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.property_characteristics') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.property_characteristics_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.cep_address') ? 'invalid' : '' }}">
        <label class="form-label" for="cep_address">{{ trans('cruds.property.fields.cep_address') }}</label>
        <input class="form-control" type="text" name="cep_address" id="cep_address" wire:model.defer="property.cep_address">
        <div class="validation-message">
            {{ $errors->first('property.cep_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.cep_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.city_address') ? 'invalid' : '' }}">
        <label class="form-label" for="city_address">{{ trans('cruds.property.fields.city_address') }}</label>
        <input class="form-control" type="text" name="city_address" id="city_address" wire:model.defer="property.city_address">
        <div class="validation-message">
            {{ $errors->first('property.city_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.city_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.uf_address') ? 'invalid' : '' }}">
        <label class="form-label" for="uf_address">{{ trans('cruds.property.fields.uf_address') }}</label>
        <input class="form-control" type="text" name="uf_address" id="uf_address" wire:model.defer="property.uf_address">
        <div class="validation-message">
            {{ $errors->first('property.uf_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.uf_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.logradouro') ? 'invalid' : '' }}">
        <label class="form-label" for="logradouro">{{ trans('cruds.property.fields.logradouro') }}</label>
        <input class="form-control" type="text" name="logradouro" id="logradouro" wire:model.defer="property.logradouro">
        <div class="validation-message">
            {{ $errors->first('property.logradouro') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.logradouro_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.district_address') ? 'invalid' : '' }}">
        <label class="form-label" for="district_address">{{ trans('cruds.property.fields.district_address') }}</label>
        <input class="form-control" type="text" name="district_address" id="district_address" wire:model.defer="property.district_address">
        <div class="validation-message">
            {{ $errors->first('property.district_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.district_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.number_address') ? 'invalid' : '' }}">
        <label class="form-label" for="number_address">{{ trans('cruds.property.fields.number_address') }}</label>
        <input class="form-control" type="text" name="number_address" id="number_address" wire:model.defer="property.number_address">
        <div class="validation-message">
            {{ $errors->first('property.number_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.number_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.complement_address') ? 'invalid' : '' }}">
        <label class="form-label" for="complement_address">{{ trans('cruds.property.fields.complement_address') }}</label>
        <input class="form-control" type="text" name="complement_address" id="complement_address" wire:model.defer="property.complement_address">
        <div class="validation-message">
            {{ $errors->first('property.complement_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.complement_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.latitude') ? 'invalid' : '' }}">
        <label class="form-label" for="latitude">{{ trans('cruds.property.fields.latitude') }}</label>
        <input class="form-control" type="text" name="latitude" id="latitude" wire:model.defer="property.latitude">
        <div class="validation-message">
            {{ $errors->first('property.latitude') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.latitude_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.longitude') ? 'invalid' : '' }}">
        <label class="form-label" for="longitude">{{ trans('cruds.property.fields.longitude') }}</label>
        <input class="form-control" type="text" name="longitude" id="longitude" wire:model.defer="property.longitude">
        <div class="validation-message">
            {{ $errors->first('property.longitude') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.longitude_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.property_status') ? 'invalid' : '' }}">
        <label class="form-label" for="property_status">{{ trans('cruds.property.fields.property_status') }}</label>
        <input class="form-control" type="text" name="property_status" id="property_status" wire:model.defer="property.property_status">
        <div class="validation-message">
            {{ $errors->first('property.property_status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.property_status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.who_lives_in_the_property') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.who_lives_in_the_property') }}</label>
        <select class="form-control" wire:model="property.who_lives_in_the_property">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['who_lives_in_the_property'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.who_lives_in_the_property') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.who_lives_in_the_property_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.useful_area') ? 'invalid' : '' }}">
        <label class="form-label" for="useful_area">{{ trans('cruds.property.fields.useful_area') }}</label>
        <input class="form-control" type="text" name="useful_area" id="useful_area" wire:model.defer="property.useful_area">
        <div class="validation-message">
            {{ $errors->first('property.useful_area') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.useful_area_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.rooms') ? 'invalid' : '' }}">
        <label class="form-label" for="rooms">{{ trans('cruds.property.fields.rooms') }}</label>
        <input class="form-control" type="text" name="rooms" id="rooms" wire:model.defer="property.rooms">
        <div class="validation-message">
            {{ $errors->first('property.rooms') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.rooms_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.bedrooms') ? 'invalid' : '' }}">
        <label class="form-label" for="bedrooms">{{ trans('cruds.property.fields.bedrooms') }}</label>
        <input class="form-control" type="text" name="bedrooms" id="bedrooms" wire:model.defer="property.bedrooms">
        <div class="validation-message">
            {{ $errors->first('property.bedrooms') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.bedrooms_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.bathrooms') ? 'invalid' : '' }}">
        <label class="form-label" for="bathrooms">{{ trans('cruds.property.fields.bathrooms') }}</label>
        <input class="form-control" type="text" name="bathrooms" id="bathrooms" wire:model.defer="property.bathrooms">
        <div class="validation-message">
            {{ $errors->first('property.bathrooms') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.bathrooms_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.year_of_construction') ? 'invalid' : '' }}">
        <label class="form-label" for="year_of_construction">{{ trans('cruds.property.fields.year_of_construction') }}</label>
        <input class="form-control" type="text" name="year_of_construction" id="year_of_construction" wire:model.defer="property.year_of_construction">
        <div class="validation-message">
            {{ $errors->first('property.year_of_construction') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.year_of_construction_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.date_of_last_renovation') ? 'invalid' : '' }}">
        <label class="form-label" for="date_of_last_renovation">{{ trans('cruds.property.fields.date_of_last_renovation') }}</label>
        <input class="form-control" type="text" name="date_of_last_renovation" id="date_of_last_renovation" wire:model.defer="property.date_of_last_renovation">
        <div class="validation-message">
            {{ $errors->first('property.date_of_last_renovation') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.date_of_last_renovation_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.how_many_floors') ? 'invalid' : '' }}">
        <label class="form-label" for="how_many_floors">{{ trans('cruds.property.fields.how_many_floors') }}</label>
        <input class="form-control" type="text" name="how_many_floors" id="how_many_floors" wire:model.defer="property.how_many_floors">
        <div class="validation-message">
            {{ $errors->first('property.how_many_floors') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.how_many_floors_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.apatments_peer_floor') ? 'invalid' : '' }}">
        <label class="form-label" for="apatments_peer_floor">{{ trans('cruds.property.fields.apatments_peer_floor') }}</label>
        <input class="form-control" type="text" name="apatments_peer_floor" id="apatments_peer_floor" wire:model.defer="property.apatments_peer_floor">
        <div class="validation-message">
            {{ $errors->first('property.apatments_peer_floor') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.apatments_peer_floor_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.elevators') ? 'invalid' : '' }}">
        <label class="form-label" for="elevators">{{ trans('cruds.property.fields.elevators') }}</label>
        <input class="form-control" type="text" name="elevators" id="elevators" wire:model.defer="property.elevators">
        <div class="validation-message">
            {{ $errors->first('property.elevators') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.elevators_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.type_of_keys') ? 'invalid' : '' }}">
        <label class="form-label" for="type_of_keys">{{ trans('cruds.property.fields.type_of_keys') }}</label>
        <input class="form-control" type="text" name="type_of_keys" id="type_of_keys" wire:model.defer="property.type_of_keys">
        <div class="validation-message">
            {{ $errors->first('property.type_of_keys') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.type_of_keys_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.key_location') ? 'invalid' : '' }}">
        <label class="form-label" for="key_location">{{ trans('cruds.property.fields.key_location') }}</label>
        <input class="form-control" type="text" name="key_location" id="key_location" wire:model.defer="property.key_location">
        <div class="validation-message">
            {{ $errors->first('property.key_location') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.key_location_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.lock_password') ? 'invalid' : '' }}">
        <label class="form-label" for="lock_password">{{ trans('cruds.property.fields.lock_password') }}</label>
        <input class="form-control" type="text" name="lock_password" id="lock_password" wire:model.defer="property.lock_password">
        <div class="validation-message">
            {{ $errors->first('property.lock_password') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.lock_password_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.parking_spaces') ? 'invalid' : '' }}">
        <label class="form-label" for="parking_spaces">{{ trans('cruds.property.fields.parking_spaces') }}</label>
        <input class="form-control" type="text" name="parking_spaces" id="parking_spaces" wire:model.defer="property.parking_spaces">
        <div class="validation-message">
            {{ $errors->first('property.parking_spaces') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.parking_spaces_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.type_of_vacancy') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.type_of_vacancy') }}</label>
        <select class="form-control" wire:model="property.type_of_vacancy">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['type_of_vacancy'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.type_of_vacancy') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.type_of_vacancy_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.vacancy_number') ? 'invalid' : '' }}">
        <label class="form-label" for="vacancy_number">{{ trans('cruds.property.fields.vacancy_number') }}</label>
        <input class="form-control" type="text" name="vacancy_number" id="vacancy_number" wire:model.defer="property.vacancy_number">
        <div class="validation-message">
            {{ $errors->first('property.vacancy_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.vacancy_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.vacancy_location') ? 'invalid' : '' }}">
        <label class="form-label" for="vacancy_location">{{ trans('cruds.property.fields.vacancy_location') }}</label>
        <input class="form-control" type="text" name="vacancy_location" id="vacancy_location" wire:model.defer="property.vacancy_location">
        <div class="validation-message">
            {{ $errors->first('property.vacancy_location') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.vacancy_location_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.property.fields.description') }}</label>
        <textarea class="form-control" name="description" id="description" wire:model.defer="property.description" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('property.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.property.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="property.title">
        <div class="validation-message">
            {{ $errors->first('property.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.building_condominium') ? 'invalid' : '' }}">
        <label class="form-label" for="building_condominium">{{ trans('cruds.property.fields.building_condominium') }}</label>
        <input class="form-control" type="text" name="building_condominium" id="building_condominium" wire:model.defer="property.building_condominium">
        <div class="validation-message">
            {{ $errors->first('property.building_condominium') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.building_condominium_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.observation') ? 'invalid' : '' }}">
        <label class="form-label" for="observation">{{ trans('cruds.property.fields.observation') }}</label>
        <textarea class="form-control" name="observation" id="observation" wire:model.defer="property.observation" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('property.observation') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.observation_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.property_paid_off') ? 'invalid' : '' }}">
        <label class="form-label" for="property_paid_off">{{ trans('cruds.property.fields.property_paid_off') }}</label>
        <input class="form-control" type="text" name="property_paid_off" id="property_paid_off" wire:model.defer="property.property_paid_off">
        <div class="validation-message">
            {{ $errors->first('property.property_paid_off') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.property_paid_off_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.debit_balance') ? 'invalid' : '' }}">
        <label class="form-label" for="debit_balance">{{ trans('cruds.property.fields.debit_balance') }}</label>
        <input class="form-control" type="text" name="debit_balance" id="debit_balance" wire:model.defer="property.debit_balance">
        <div class="validation-message">
            {{ $errors->first('property.debit_balance') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.debit_balance_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.owner_name') ? 'invalid' : '' }}">
        <label class="form-label" for="owner_name">{{ trans('cruds.property.fields.owner_name') }}</label>
        <input class="form-control" type="text" name="owner_name" id="owner_name" wire:model.defer="property.owner_name">
        <div class="validation-message">
            {{ $errors->first('property.owner_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.owner_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.owner_email') ? 'invalid' : '' }}">
        <label class="form-label" for="owner_email">{{ trans('cruds.property.fields.owner_email') }}</label>
        <input class="form-control" type="text" name="owner_email" id="owner_email" wire:model.defer="property.owner_email">
        <div class="validation-message">
            {{ $errors->first('property.owner_email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.owner_email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.owner_phone') ? 'invalid' : '' }}">
        <label class="form-label" for="owner_phone">{{ trans('cruds.property.fields.owner_phone') }}</label>
        <input class="form-control" type="text" name="owner_phone" id="owner_phone" wire:model.defer="property.owner_phone">
        <div class="validation-message">
            {{ $errors->first('property.owner_phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.owner_phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.owner_cpf') ? 'invalid' : '' }}">
        <label class="form-label" for="owner_cpf">{{ trans('cruds.property.fields.owner_cpf') }}</label>
        <input class="form-control" type="text" name="owner_cpf" id="owner_cpf" wire:model.defer="property.owner_cpf">
        <div class="validation-message">
            {{ $errors->first('property.owner_cpf') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.owner_cpf_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.condominium_value') ? 'invalid' : '' }}">
        <label class="form-label" for="condominium_value">{{ trans('cruds.property.fields.condominium_value') }}</label>
        <input class="form-control" type="text" name="condominium_value" id="condominium_value" wire:model.defer="property.condominium_value">
        <div class="validation-message">
            {{ $errors->first('property.condominium_value') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.condominium_value_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.value_of_iptu') ? 'invalid' : '' }}">
        <label class="form-label" for="value_of_iptu">{{ trans('cruds.property.fields.value_of_iptu') }}</label>
        <input class="form-control" type="text" name="value_of_iptu" id="value_of_iptu" wire:model.defer="property.value_of_iptu">
        <div class="validation-message">
            {{ $errors->first('property.value_of_iptu') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.value_of_iptu_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.additional_iptu') ? 'invalid' : '' }}">
        <label class="form-label" for="additional_iptu">{{ trans('cruds.property.fields.additional_iptu') }}</label>
        <input class="form-control" type="text" name="additional_iptu" id="additional_iptu" wire:model.defer="property.additional_iptu">
        <div class="validation-message">
            {{ $errors->first('property.additional_iptu') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.additional_iptu_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.iptu_paid') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.iptu_paid') }}</label>
        <select class="form-control" wire:model="property.iptu_paid">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['iptu_paid'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('property.iptu_paid') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.iptu_paid_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.value') ? 'invalid' : '' }}">
        <label class="form-label" for="value">{{ trans('cruds.property.fields.value') }}</label>
        <input class="form-control" type="number" name="value" id="value" wire:model.defer="property.value" step="0.01">
        <div class="validation-message">
            {{ $errors->first('property.value') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.value_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.exclusivity') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.exclusivity') }}</label>
        @foreach($this->listsForFields['exclusivity'] as $key => $value)
            <label class="radio-label"><input type="radio" name="exclusivity" wire:model="property.exclusivity" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('property.exclusivity') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.exclusivity_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.furnished_apartment') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.property.fields.furnished_apartment') }}</label>
        @foreach($this->listsForFields['furnished_apartment'] as $key => $value)
            <label class="radio-label"><input type="radio" name="furnished_apartment" wire:model="property.furnished_apartment" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('property.furnished_apartment') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.furnished_apartment_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.sunny_unit') ? 'invalid' : '' }}">
        <label class="form-label" for="sunny_unit">{{ trans('cruds.property.fields.sunny_unit') }}</label>
        <input class="form-control" type="text" name="sunny_unit" id="sunny_unit" wire:model.defer="property.sunny_unit">
        <div class="validation-message">
            {{ $errors->first('property.sunny_unit') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.sunny_unit_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.sunny_position') ? 'invalid' : '' }}">
        <label class="form-label" for="sunny_position">{{ trans('cruds.property.fields.sunny_position') }}</label>
        <input class="form-control" type="text" name="sunny_position" id="sunny_position" wire:model.defer="property.sunny_position">
        <div class="validation-message">
            {{ $errors->first('property.sunny_position') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.sunny_position_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('property.first_rent_payment_value') ? 'invalid' : '' }}">
        <label class="form-label" for="first_rent_payment_value">{{ trans('cruds.property.fields.first_rent_payment_value') }}</label>
        <input class="form-control" type="number" name="first_rent_payment_value" id="first_rent_payment_value" wire:model.defer="property.first_rent_payment_value" step="0.01">
        <div class="validation-message">
            {{ $errors->first('property.first_rent_payment_value') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.property.fields.first_rent_payment_value_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.properties.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>