<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="form-group">
        <label for="periode">Periode</label>
        <div wire:ignore>
            <select id="periode" class="form-control select2" style="width:100%" wire:model.defer="periodePendaftaranSelected">
                <option value="0">Semua</option>
                @foreach($periodePendaftaran as $item)
                    <option wire:key="parent-{{ $item->KodePendaftaran }}" value="{{$item->KodePendaftaran}}" {{$periodePendaftaranSelected == $item->KodePendaftaran ? 'selected' : '' }}>{{$item->NamaPendaftaran}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
@script
    <script>
        let elPeriode = $('#periode');

        initSelect()

        Livewire.hook('message.processed', (message, component) => {
            initSelect()
        })

        elPeriode.on('change', function (e) {
            @this.set('periodePendaftaranSelected', elPeriode.select2("val"));
            console.log('periodePendaftaranSelected set to : ',elPeriode.select2('val'), 'from component periode');
        });

        Livewire.on('updateComboboxPeriode', values => {
            let data = values[0].options;
            elPeriode.empty();
            // Add the default option
            elPeriode.append(new Option('Pilih Periode Pendaftaran', '0'));
            // Add new options from the event data
            data.forEach(periode => {
                elPeriode.append(new Option(periode.NamaPendaftaran, periode.KodePendaftaran));
            });
            console.log(values[0].selected);
            // Set the selected value
            elPeriode.val(values[0].selected).trigger('change.select2');
        });

        function initSelect () {
            elPeriode.select2({
                placeholder: '{{__('Pilih Periode Pendaftaran')}}',
                allowClear: !elPeriode.attr('required'),
            })
        }
    </script>
@endscript
