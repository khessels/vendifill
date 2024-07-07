<div>
    {{-- Be like water. --}}
    @if(!empty( $machineStock))
        @foreach( $machineStock as $stock)
            @can('machines-experiment')
                <a href="/machine/experiment/{{$machine->uuid}}">{{__('Experiment')}}</a>
            @endcan
        @endforeach
    @else
        <span>Machine has no stock</span>
    @endif
</div>
@section('scripts-bottom')
    <script >
        $(function() {
            new DataTable('.table');
        });
    </script>
@endsection
