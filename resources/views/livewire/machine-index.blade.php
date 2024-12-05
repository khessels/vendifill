
<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if(!empty( $machines))
        <table class="table table-striped">
            <thead>
            <th>{{__('ID')}}</th>
            <th>{{__('Location')}}</th>
            <th>{{__('Machine Type')}}</th>

            <th>{{__('Brand')}}</th>
            <th>{{__('Model')}}</th>
            <th>{{__('Year')}}</th>
            <th>{{__('Actions')}}</th>
            </thead>
            <tbody>
                @foreach( $machines as $machine)
                    <tr>
                        <td>{{ $machine->id }}</td>
                        <td>{{ $machine->location->name }}</td>
                        <td>{{ $machine->machine_type->machine_type }}</td>
                        <td>{{ $machine->brand }}</td>
                        <td>{{ $machine->brand_model }}</td>
                        <td>{{ $machine->year }}</td>
                        <td>
                            <a href="/machine/stock/{{$machine->uuid}}">{{ __('Stock')}}</a>&nbsp;
                            @can('machines-experiment')
                                <a href="/machine/experiment/{{$machine->uuid}}">{{__('Experiment')}}</a>
                            @endcan
                            @if( ! empty( $machine->coordinates->latitude) && !empty( $machine->coordinates->longitude))
                                <button class="btn btn-outline-secondary btn-xs" wire:click="$dispatch('map-update',
                                    [{
                                        id          : {{ $machine->id }},
                                        name        : '{{ $machine->location->name }}',
                                        className   : 'Machine',
                                        latitude    : '{{ $machine->coordinates->latitude }}',
                                        longitude   : '{{ $machine->coordinates->longitude }}'
                                        }] )">
                                    {{__('Show on map')}}
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    @else
        <span>No machines listed</span>
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
