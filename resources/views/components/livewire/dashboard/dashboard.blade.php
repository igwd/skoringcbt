<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @section('title')
        Dashboard
    @endsection
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <div wire:ignore>
                    <select id="tahun" class="form-control select2" style="width:100%" wire:model.defer="tahunPendaftaranSelected">
                        <option value="0">Semua</option>
                        @foreach($tahunPendaftaran as $item)
                            <option wire:key="parent-{{ $item->Tahun }}" value="{{$item->Tahun}}" {{$tahunPendaftaranSelected == $item->Tahun ? 'selected' : '' }}>{{$item->Tahun}}</option>
                        @endforeach
                    </select>
                    @error('parent') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="periode">Periode</label>
                <div wire:ignore>
                    <select id="periode" class="form-control select2" style="width:100%" wire:model.defer="periodePendaftaranSelected">
                        <option value="0">Semua</option>
                        @foreach($periodePendaftaran as $item)
                            <option wire:key="parent-{{ $item->KodePendaftaran }}" value="{{$item->KodePendaftaran}}" {{$periodePendaftaranSelected == $item->KodePendaftaran ? 'selected' : '' }}>{{$item->NamaPendaftaran}}</option>
                        @endforeach
                    </select>
                    @error('parent') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden rounded-lg bg-white shadow grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
        @livewire('dashboard.chart')
    </div>
    @script
    <script>
        let elTahun = $('#tahun');
        let elPeriode = $('#periode');

        initSelect()

        Livewire.hook('message.processed', (message, component) => {
            initSelect()
        })

        elTahun.on('change', function (e) {
            @this.set('tahunPendaftaranSelected', elTahun.select2("val"));
            console.log('tahunPendaftaranSelected set to : ',elTahun.select2('val'));
        });

        elPeriode.on('change', function (e) {
            @this.set('periodePendaftaranSelected', elPeriode.select2("val"));
            console.log('periodePendaftaranSelected set to : ',elPeriode.select2('val'));
        });

        Livewire.on('updatedTahunPendaftaranSelected', values => {
            let data = values[0].values;
            elPeriode.empty();
            // Add the default option
            elPeriode.append(new Option('Select Role Access', '0'));
            // Add new options from the event data
            data.forEach(periode => {
                elPeriode.append(new Option(periode.NamaPendaftaran, periode.KodePendaftaran));
            });
            console.log(values[0].periodePendaftaranSelected);
            // Set the selected value
            elPeriode.val(values[0].periodePendaftaranSelected).trigger('change.select2');
        });

        function initSelect () {
            elTahun.select2({
                placeholder: '{{__('Select your option')}}',
                allowClear: !elTahun.attr('required'),
            });

            elPeriode.select2({
                placeholder: '{{__('Select your option')}}',
                allowClear: !elPeriode.attr('required'),
            })
        }
    </script>
    @endscript
</div>
