<!DOCTYPE html>
<html lang="ja">
<head>
    @include('_head_view')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('_header_view')
    <main class="container py-4">
        @include('_message_view')
        <div class="row mt-3">
            <div class="col-12">
                <h3>Sections</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset("img/courses/{$course['id']}.png") }}" alt="course image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $course->category->title}}</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($sections as $section)
                            <li class="list-group-item">
                                <a href="{{ route('sections.show', ['course_id' => $course['id'], 'section_id' => $section['id']]) }}">
                                    Section {{ $section['no'] }} : {{ $section['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9 mb-4">
                @if ($current_section)
                    <video src="{{ $current_section['url'] }}" playsinline controls class="section-video"></video>
                    <hr>
                    <h5 class="my-4">
                        {{ $course['title'] }} - Section {{ $current_section['no'] }} :
                        {{ $current_section['title'] }}
                    </h5>
                    {{-- サインインしている場合のみ表示 --}}
                    {{-- <form action="{{ route('history.post') }}" method="post">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course['id'] }}">
                        <input type="hidden" name="section_id" value="{{ $current_section['id'] }}">
                        <button type="submit" class="btn btn-primary" {{ $current_section['created_at'] != null ? 'disabled' : '' }}>Finish</button>
                    </form> --}}
                @else
                    <p>No video available</p>
                @endif
            </div>
        </div>
    </main>
    @include('_footer_view')
</body>
</html>
