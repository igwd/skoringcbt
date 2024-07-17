<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @section('title')
        Dashboard
    @endsection
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
            @livewire('combobox.tahun')
            @livewire('combobox.periode')
        </div>
    </div>
    <div class="overflow-hidden rounded-lg bg-white shadow mt-2 dark:border-strokedark dark:bg-boxdark">
        @livewire('dashboard.chart')
    </div>
</div>
