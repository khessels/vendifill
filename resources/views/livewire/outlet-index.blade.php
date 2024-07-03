<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
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
        @if(!empty( $outlets))
            @foreach( $outlets as $outlet)
                <tr>
                    <td>{{ $outlet->id }}</td>
                    <td>{{ $outlet->location->name }}</td>
                    <td>{{ $outlet->location_type->location_type }}</td>
                    <td>{{ $outlet->coordinates }}</td>
                </tr>
            @endforeach
        @else
            <tr><td colspan="8">No Outlets listed</td></tr>
        @endif
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
