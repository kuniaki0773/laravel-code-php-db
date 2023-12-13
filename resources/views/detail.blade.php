<!DOCTYPE html>
<html lang="ja">
<head>
    @include('_head_view')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('_header_view')
    <main class="container py-4">
        <div class="row mt-3">
            <div class="col-12">
                <h3>Sections</h3>
                <hr>
            </div>
        </div>
        @include('_message_view')
        <div class="row mt-3">
            <div class="col-md-3 mb-4">
                <!-- ... その他のコード ... -->
            </div>
            <div class="col-md-9 mb-4">
                @if ($current_section)
                    <video src="{{ $current_section['url'] }}" playsinline controls class="section-video"></video>
                    <!-- ... その他のコード ... -->
                @else
                    <p>No video available</p>
                @endif
            </div>
        </div>
    </main>
    @include('_footer_view')
</body>
</html>
