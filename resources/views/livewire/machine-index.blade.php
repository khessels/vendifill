<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <table class="table">
        <thead>
        <th>{{__('ID')}}</th>
        <th>{{__('Location')}}</th>
        <th>{{__('Machine Type')}}</th>
        <th>{{__('Coordinates')}}</th>
        <th>{{__('Brand')}}</th>
        <th>{{__('Model')}}</th>
        <th>{{__('Year')}}</th>
        </thead>
        <tbody>
        @if(!empty( $machines))
            @foreach( $machines as $machine)
                <tr>
                    <td>{{ $machine->id }}</td>
                    <td>{{ $machine->location->name }}</td>
                    <td>{{ $machine->machine_type->machine_type }}</td>
                    <td>{{ $machine->coordinates }}</td>
                    <td>{{ $machine->brand }}</td>
                    <td>{{ $machine->brand_model }}</td>
                    <td>{{ $machine->year }}</td>
                </tr>
            @endforeach
        @else
            <tr><td colspan="8">No machines listed</td></tr>
        @endif
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
