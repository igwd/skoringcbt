<div>
@php
    $alertClasses = [
        'success' => 'bg-green-100 border border-green-400 text-green-700',
        'error' => 'bg-red-100 border border-red-400 text-red-700',
        'warning' => 'bg-yellow-100 border border-yellow-400 text-yellow-700',
        'info' => 'bg-blue-100 border border-blue-400 text-blue-700',
    ];
    $iconClasses = [
        'success' => 'text-green-500',
        'error' => 'text-red-500',
        'warning' => 'text-yellow-500',
        'info' => 'text-blue-500',
    ];
    $positionClasses = [
        'bottom-right' => 'fixed bottom-4 right-4',
        'top-right' => 'fixed top-4 right-4',
        'top-left' => 'fixed top-4 left-4',
        'bottom-left' => 'fixed bottom-4 left-4',
        'center' => 'fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2',
    ];
@endphp
@if($visible)
    <div 
        x-data="{ visible: @entangle('visible'), hide: false }"
        x-init="$watch('visible', value => {
            if (value) {
                setTimeout(() => visible = false, 3000);
            }
        })"
        x-show="visible"
        x-transition
        {{-- @auto-hide-alert.window="setTimeout(() => $wire.hideAlert(), $event.detail.duration)" --}}
        class="w-auto mb-4 {{ $positionClasses[$position] }} z-50"
        style="display: none;"
        role="alert"
    >
        <div class="{{ $alertClasses[$type] }} px-4 py-3 rounded relative">
            <strong class="font-bold">{{ $title }}</strong>
            <span class="block">{{ $message }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="visible = false">
                <svg class="fill-current h-6 w-6 {{ $iconClasses[$type] }}" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    </div>
@endif
</div>
