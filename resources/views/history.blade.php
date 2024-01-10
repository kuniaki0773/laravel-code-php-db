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
                    @forelse ($histories as $history)
                        <li class="list-group-item">
                            <a href="{{ route('sections.show', ['course_id' => $history->section->course->id, 'section_id' => $history->section_id]) }}">
                                {{ $history->section->course->title }}
                                - Section
                                {{ $history->section->no }}
                                : {{ $history->section->title }}
                                ({{ $history->created_at }})
                            </a>
                        </li>
                    @empty
                        <li class="list-group-item">No learning history available.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    @include('_footer_view')
</body>
</html>
