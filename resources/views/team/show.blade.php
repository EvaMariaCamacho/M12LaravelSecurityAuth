@include('partials.head')

@include('partials.nav')

@include('partials.sidebar')


<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Show Team</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('team.index') }}"> Back</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

@include('partials.footer')



