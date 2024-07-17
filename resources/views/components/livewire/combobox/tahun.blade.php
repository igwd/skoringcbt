<div>
    {{-- Because you competes with no one, no one can compete with you. --}}
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <div wire:ignore>
            <select id="tahun" class="form-control select2" style="width:100%;" wire:model.defer="tahunPendaftaranSelected">
                <option value="0">Semua</option>
                @foreach($tahunPendaftaran as $item)
                    <option wire:key="parent-{{ $item->Tahun }}" value="{{$item->Tahun}}" {{$tahunPendaftaranSelected == $item->Tahun ? 'selected' : '' }}>{{$item->Tahun}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
@script
<script>
    let elTahun = $('#tahun');
    initSelect();

    Livewire.hook('message.processed', (message, component) => {
        initSelect()
    });

    elTahun.on('change', function (e) {
        @this.set('tahunPendaftaranSelected', elTahun.select2("val"));
        console.log('tahunPendaftaranSelected set to : ',elTahun.select2('val'),' from combobox component');
    });

    function initSelect () {
        elTahun.select2({
            placeholder: '{{__('Pilih Tahun Pendaftaran')}}',
            allowClear: !elTahun.attr('required'),
        });
    }
</script>
@endscript
