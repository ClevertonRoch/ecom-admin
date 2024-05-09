@props(['fieldName'])

@if ($errors->has($fieldName))
    <div class="alert-error text-red-600">
        <p>{{ $errors->first($fieldName) }}</p>
    </div>
@endif
