<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <table class="table">
        <thead>
        <th>{{__('ID')}}</th>
        <th>{{__('Name')}}</th>
        <th>{{__('Contact')}}</th>
        <th>{{__('Outlet Type')}}</th>
        <th>{{__('Country Code')}}</th>
        <th>{{__('Active')}}</th>
        </thead>
        <tbody>
        @if(!empty( $outlets))
            @foreach( $outlets as $outlet)
                <tr>
                    <td>{{ $outlet->id }}</td>
                    <td>{{ $outlet->name }}</td>
                    <td>{{ $outlet->contact }}</td>
                    <td>{{ $outlet->outlet_type->outlet_type }}</td>
                    <td>{{ $outlet->country_code }}</td>
                    <td>{{ $outlet->active }}</td>
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
