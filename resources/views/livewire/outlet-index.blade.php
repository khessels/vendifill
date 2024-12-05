<div >
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @if(!empty( $outlets))
        <table class="table table-striped">
            <thead>
            <th>{{__('ID')}}</th>
            <th>{{__('Name')}}</th>
            <th>{{__('Contact')}}</th>
            <th>{{__('Outlet Type')}}</th>
            <th>{{__('Country Code')}}</th>
            <th>{{__('Active')}}</th>
            <th>{{__('Active')}}</th>
            </thead>
            <tbody>
                @foreach( $outlets as $outlet)
                    <tr>
                        <td>{{ $outlet->id }}</td>
                        <td>{{ $outlet->name }}</td>
                        <td>{{ $outlet->contact }}</td>
                        <td>{{ $outlet->outlet_type->outlet_type }}</td>
                        <td>{{ $outlet->country_code }}</td>
                        <td>{{ $outlet->active }}</td>
                        <td>
                            <button class="btn btn-outline-secondary btn-xs" wire:click="$dispatch('map-update',
                                [{
                                    id          : {{ $outlet->id }},
                                    name        : '{{ $outlet->name }}',
                                    className   : 'Outlet',
                                    latitude    : '{{ $outlet->coordinates->latitude }}',
                                    longitude   : '{{ $outlet->coordinates->longitude }}'
                                    }] )">
                                {{__('Show on map')}}
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    @else
        <span>No Outlets listed</span>
    @endif
</div>
@section('scripts-bottom')
    <script >
        $(function() {
            new DataTable('.table',  {
                pageLength: 15
            });
        });
    </script>
@endsection
