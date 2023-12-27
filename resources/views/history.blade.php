<!DOCTYPE html>
<html lang="ja">
<head>
    @include('_head_view')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('_header_view')
    <div class="container py-4">
        @include('_message_view')
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Learning history</h3>
                <hr>
                <ul class="list-group">
                    {{-- @foreach ($histories as $history)
                        <li class="list-group-item">
                            <a href="{{ route('detail', ['course_id' => $history->course_id, 'section_id' => $history->section_id]) }}">
                                {{ $history->course_title }}
                                -
                                Section
                                {{ $history->section_no }}
                                :
                                {{ $history->section_title }}
                                (
                                {{ $history->created_at }}
                                )
                            </a>
                        </li>
                    @endforeach --}}
                </ul>
            </div>
        </div>
    </div>
    @include('_footer_view')
</body>
</html>
