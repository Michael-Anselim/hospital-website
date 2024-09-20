@props(['status' => '', 'type' => 'info'])

@if ($status)
    <!-- Alert info is the default -->
    <!-- types == error, success, warning, and info -->
    <div class="mb-4 alert {{ $type === 'error' ? 'alert-danger' : ($type === 'success' ? 'alert-success' : ($type === 'warning' ? 'alert-warning' : 'alert-info')) }}">
        {{ $status }}
    </div>
@endif
