<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @if( ! empty( $products))
        <table class="table table-striped">
            <thead>
                <th>{{__('ID')}}</th>
                <th>{{__('Name')}}</th>
                <th>{{__('Active')}}</th>
                <th>{{__('MSRP')}}</th>
                <th>{{__('Actions')}}</th>
            </thead>
            <tbody>
                @foreach( $products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->active }}</td>
                        <td>{{ $product->msrp }}</td>
                        <td>
                            <a href="#">{{ __('Edit') }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    @else
        <span>{{ __('No products listed') }}</span>
    @endif
</div>
@section('scripts-bottom')
    <script >
        $(function() {
            new DataTable('.table');
        });
    </script>
@endsection
