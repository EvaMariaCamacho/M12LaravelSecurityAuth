@include('partials.head')

@include('partials.nav')

@include('partials.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listados de los Equipos</h1><br>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Result') }}
                                </span>
                                @can('result-admin')
                                <div class="float-right">
                                    <a href="{{ route('result.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                        {{ __('Create New') }}
                                    </a>
                                </div>
                                @endcan
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>

                                            <th>Local Gol</th>
                                            <th>Visitor Gol</th>
                                            <th>Date</th>
                                            <th>Teams Id</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($results as $result)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $result->local_gol }}</td>
                                            <td>{{ $result->visitor_gol }}</td>
                                            <td>{{ $result->date }}</td>
                                            <td>{{ $result->teams_id }}</td>

                                            <td>
                                                <form action="{{ route('result.destroy',$result->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('team.index',$result->teams_id) }}"><i class="fa fa-fw fa-eye"></i> Teams</a>
                                                    @can('result-admin')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('result.show',$result->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('result.edit',$result->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('result-admin')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $results->links() !!}
                </div>
            </div>
        </div>
    </section>
</div>

@include('partials.footer')