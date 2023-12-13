@if (isset($message) && $message !== false)
    <div class="alert alert-info" role="alert">
        {{ $message }}
    </div>
@endif
