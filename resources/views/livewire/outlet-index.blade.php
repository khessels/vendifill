<div>
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
            new DataTable('.table');
        });
    </script>
@endsection
