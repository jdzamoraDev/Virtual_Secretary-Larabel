@extends('layouts.app')

@section('template_title')
    Team
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Team') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('teams.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        
										<th>Teama</th>
										<th>Stadium</th>
										<th>Time</th>
										<th>Price1</th>
										<th>Price2</th>
										<th>Price3</th>
										<th>Teamb</th>
										<th>Imga</th>
										<th>Imgb</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $team->teamA }}</td>
											<td>{{ $team->stadium }}</td>
											<td>{{ $team->time }}</td>
											<td>{{ $team->price1 }}</td>
											<td>{{ $team->price2 }}</td>
											<td>{{ $team->price3 }}</td>
											<td>{{ $team->teamB }}</td>
											<td>{{ $team->imgA }}</td>
											<td>{{ $team->imgB }}</td>

                                            <td>
                                                <form action="{{ route('teams.destroy',$team->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('teams.show',$team->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('teams.edit',$team->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
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
@endsection
