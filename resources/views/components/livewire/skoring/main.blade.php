<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @section('title')
        Skoring
    @endsection
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
            @livewire('combobox.tahun')
            @livewire('combobox.periode')
        </div>
    </div>
    <div class="overflow-hidden rounded-lg bg-white shadow grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
        @livewire('dayatampung.table')
    </div>
</div>
