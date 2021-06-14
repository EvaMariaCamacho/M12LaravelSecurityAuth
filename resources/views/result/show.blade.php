@include('partials.head')

@section('template_title')
{{ $result->name ?? 'Show Result' }}
@endsection

@include('partials.nav')

@include('partials.sidebar')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Show Result</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('result.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Local Gol:</strong>
                        {{ $result->local_gol }}
                    </div>
                    <div class="form-group">
                        <strong>Visitor Gol:</strong>
                        {{ $result->visitor_gol }}
                    </div>
                    <div class="form-group">
                        <strong>Date:</strong>
                        {{ $result->date }}
                    </div>
                    <div class="form-group">
                        <strong>Teams Id:</strong>
                        {{ $result->teams_id }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.footer')