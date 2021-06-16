<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Resultados</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('result.index') }}">Home</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Local_gol:</strong>
                        {{ $result->local_gol }}
                    </div>
                    <div class="form-group">
                        <strong>Visitor_gol</strong>
                        {{ $result->visitor_gol }}
                    </div>
                    <div class="form-group">
                        <strong>Date:</strong>
                        {{ $result->date }}
                    </div>
                    <div class="form-group">
                        <strong>Teams:</strong>
                        {{ $result->team_id }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>