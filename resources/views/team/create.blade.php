@include('partials.head')

@include('partials.nav')

@include('partials.sidebar')

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Create Team</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('team.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('team.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')