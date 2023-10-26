<?php

namespace App\Http\Livewire\Property;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\Property;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithSorting, WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'desc';
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new Property())->orderable;
    }

    public function render()
    {
        $query = Property::with(['team'])->advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $properties = $query->paginate($this->perPage);

        return view('livewire.property.index', compact('properties', 'query'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('property_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Property::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(Property $property)
    {
        abort_if(Gate::denies('property_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $property->delete();
    }
}
