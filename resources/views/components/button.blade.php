<!-- resources/views/components/button.blade.php -->
@props(['type' => 'primary', 'size' => 'medium'])

@php
$typeClasses = [
    'primary' => 'bg-blue-500 hover:bg-blue-600 text-white',
    'secondary' => 'bg-gray-400 hover:bg-gray-500 text-gray-800',
];

$sizeClasses = [
    'small' => 'py-1 px-2 text-sm',
    'medium' => 'py-2 px-4 text-base',
    'large' => 'py-3 px-6 text-lg',
];

$typeClass = $typeClasses[$type] ?? $typeClasses['primary'];
$sizeClass = $sizeClasses[$size] ?? $sizeClasses['medium'];
@endphp

<button {{ $attributes->merge(['class' => "rounded $typeClass $sizeClass"]) }}>
    {{ $slot }}
</button>
