<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <table class="table">
        <thead>
        <th>{{__('ID')}}</th>
        <th>{{__('Name')}}</th>
        <th>{{__('Contact name')}}</th>
        <th>{{__('Contact details')}}</th>
        <th>{{__('Active')}}</th>
        <th>{{__('Coordinates')}}</th>

        </thead>
        <tbody>
        @if(!empty( $locations))
            @foreach( $locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->name }}</td>
                    <td>{{ $location->managed_by }}</td>
                    <td>{{ $location->contact_details }}</td>
                    <td>{{ $location->active }}</td>
                    <td>{{ $location->coordinates }}</td>
                </tr>
            @endforeach
        @else
            <tr><td colspan="5">No locations</td></tr>
        @endif
        </tbody>
    </table>
</div>
