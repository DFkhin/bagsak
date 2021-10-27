<div class="table-responsive">
    <table class="table" id="lsis-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Citizenship</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lsis as $lsi)
            <tr>
                <td>{{ $lsi->Firstname }}</td>
            <td>{{ $lsi->Middlename }}</td>
            <td>{{ $lsi->Lastname }}</td>
            <td>{{ $lsi->Birthdate }}</td>
            <td>{{ $lsi->Gender }}</td>
            <td>{{ $lsi->Address }}</td>
            <td>{{ $lsi->Citizenship }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['lsis.destroy', $lsi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lsis.show', [$lsi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('lsis.edit', [$lsi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
