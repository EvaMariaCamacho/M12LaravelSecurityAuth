
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Result</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('result.update', $result->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('result.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>

