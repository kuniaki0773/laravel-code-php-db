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
                <h3>Courses</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/courses/' . $course->id . '.png') }}" alt="course image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $course->category->title }}</h6>
                            <a href="{{ route('courses.show', ['id' => $course->id]) }}" class="btn btn-sm btn-outline-secondary">View</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    @include('_footer_view')
</body>
</html>
