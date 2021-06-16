<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Listado Team</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('team.index') }}">Home</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Stadium:</strong>
                        {{ $team->stadium }}
                    </div>
                    <div class="form-group">
                        <strong>Foundation_year</strong>
                        {{ $team->fundation_year }}
                    </div>
                    <div class="form-group">
                        <strong>City:</strong>
                        {{ $team->city }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>