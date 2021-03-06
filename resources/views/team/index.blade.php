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
                </div>s
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Team') }}
                                </span>
                            @can('team-admin')
                                <div class="float-right">
                                    <a href="{{ route('team.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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

                                            <th>Stadium</th>
                                            <th>Fundation Year</th>
                                            <th>City</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teams as $team)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $team->stadium }}</td>
                                            <td>{{ $team->fundation_year }}</td>
                                            <td>{{ $team->city }}</td>
                                        @can('team-admin')
                                            <td>
                                                <form action="{{ route('team.destroy',$team->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('team.show',$team->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('team.edit',$team->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        @endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $teams->links() !!}
                </div>
            </div>
        </div>
    </section>
</div>


@include('partials.footer')