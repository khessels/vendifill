<div>
    <script>
        var table = undefined;
    </script>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @if(!empty( $locations))
        @can('locations-manage')
            <div class="row">
                <div class="col-md-12">
                    <button id="add-location" type="button" class="btn btn-primary btn-lg">
                        {{__('Add location')}}
                    </button>
                    <button id="delete-location" type="button" class="btn btn-outline-danger btn-lg">
                        {{__('Delete selected')}}
                    </button>
                </div>
            </div>
            <div class="row add-location hidable" style="display: none">
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="name">{{__('Name')}}</label>
                        <input type="text" wire:model="name" class="form-control" id="name" name="name" placeholder="{{__('Name of location\company')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Email')}}</label>
                        <input type="email" wire:model="email" class="form-control" id="email" name="email" placeholder="{{__('Email')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Address')}}</label>
                        <input type="text" wire:model="address" class="form-control" id="address" name="address" placeholder="{{__('Address of location\company')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('City')}}</label>
                        <input type="text" wire:model="city" class="form-control" id="city" name="city" placeholder="{{__('City of location\company')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Zip')}}</label>
                        <input type="text" wire:model="zip" class="form-control" id="zip" name="zip" placeholder="{{__('Zip of location\company')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Country Code')}}</label>
                        <input type="text" wire:model="country_code" class="form-control" id="country_code" name="country_code" placeholder="{{__('506')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Description')}}</label>
                        <input type="text" wire:model="description" class="form-control" id="description" name="description" placeholder="{{__('Description of location')}}">
                    </div>

                    <div class="form-group">
                        <label for="name">{{__('Province')}}</label>
                        <input type="text" wire:model="province" class="form-control" id="province" name="province" placeholder="{{__('San Josè')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Canton')}}</label>
                        <input type="text" wire:model="canton" class="form-control" id="canton" name="canton" placeholder="{{__('San Josè')}}">
                    </div>
                    <div class="form-group">
                        <label for="managed_by">{{__('Managed by')}}</label>
                        <input type="text" wire:model="managed_by" class="form-control" id="managed_by" name="managed_by" placeholder="{{__('Name of person responsible')}}">
                    </div>
                    <div class="form-group">
                        <label for="contact_details">{{__('Contact Details')}}</label>
                        <input type="text" wire:model="contact_details" class="form-control" id="contact_details" name="contact_details" placeholder="{{__('contact details')}}">
                    </div>
                    <div class="form-group">
                        <label for="active">{{__('Active')}}</label>
                        <select class="form-control" wire:model="active" id="active" name="active">
                            <option value="yes">{{__('Yes')}}</option>
                            <option value="no" selected>{{__('No')}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="active">{{__('Access')}}</label>
                        <select class="form-control" wire:model="access" id="access" name="access">
                            <option value="PRIVATE">{{__('Private')}}</option>
                            <option value="PUBLIC" selected>{{__('Public')}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="coordinates">{{__('Coordinates')}}</label>
                        <input type="text" wire:model="coordinates" class="form-control" id="coordinates" name="coordinates" placeholder="{{__('lat, long')}}">
                    </div>

                    <button type="button" class="btn btn-secondary cancel-add-location">{{__('Cancel')}}</button>
                    <button wire:click.prevent="save()" class="btn btn-primary">{{__('Save changes')}}</button>
                </form>
            </div>
            <div class="row edit-location hidable" style="display: none">
                <form>
                    <div class="form-group">
                        <label for="name">{{__('Id')}}</label>
                        <input type="text" wire:model="id" class="form-control" id="edit-id" name="id" placeholder="{{__('Id of location')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Name')}}</label>
                        <input type="text" wire:model="name" class="form-control" id="edit-name" name="name" placeholder="{{__('Name of location\company')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Email')}}</label>
                        <input type="email" wire:model="email" class="form-control" id="edit-email" name="email" placeholder="{{__('Email')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Address')}}</label>
                        <input type="text" wire:model="address" class="form-control" id="edit-address" name="address" placeholder="{{__('Address of location\company')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('City')}}</label>
                        <input type="text" wire:model="city" class="form-control" id="edit-city" name="city" placeholder="{{__('City of location\company')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Zip')}}</label>
                        <input type="text" wire:model="zip" class="form-control" id="edit-zip" name="zip" placeholder="{{__('Zip of location\company')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Country Code')}}</label>
                        <input type="text" wire:model="country_code" class="form-control" id="edit-country_code" name="country_code" placeholder="{{__('506')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Description')}}</label>
                        <input type="text" wire:model="description" class="form-control" id="edit-description" name="description" placeholder="{{__('Description of location')}}">
                    </div>

                    <div class="form-group">
                        <label for="name">{{__('Province')}}</label>
                        <input type="text" wire:model="province" class="form-control" id="edit-province" name="province" placeholder="{{__('San Josè')}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('Canton')}}</label>
                        <input type="text" wire:model="canton" class="form-control" id="edit-canton" name="canton" placeholder="{{__('San Josè')}}">
                    </div>
                    <div class="form-group">
                        <label for="managed_by">{{__('Managed by')}}</label>
                        <input type="text" wire:model="managed_by" class="form-control" id="edit-managed_by" name="managed_by" placeholder="{{__('Name of person responsible')}}">
                    </div>
                    <div class="form-group">
                        <label for="contact_details">{{__('Contact Details')}}</label>
                        <input type="text" wire:model="contact_details" class="form-control" id="edit-contact_details" name="contact_details" placeholder="{{__('contact details')}}">
                    </div>
                    <div class="form-group">
                        <label for="active">{{__('Active')}}</label>
                        <select class="form-control" wire:model="active" id="edit-active" name="active">
                            <option value="YES">{{__('Yes')}}</option>
                            <option value="NO">{{__('No')}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="active">{{__('Access')}}</label>
                        <select class="form-control" wire:model="access" id="edit-access" name="access">
                            <option value="PRIVATE">{{__('Private')}}</option>
                            <option value="PUBLIC" selected>{{__('Public')}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="coordinates">{{__('Coordinates')}}</label>
                        <input type="text" wire:model="coordinates" class="form-control" id="edit-coordinates" name="coordinates" placeholder="{{__('lat, long')}}">
                    </div>

                    <button type="button" class="btn btn-secondary cancel-edit-location">{{__('Cancel')}}</button>
                    <button wire:click.prevent="update()" class="btn btn-primary">{{__('Save changes')}}</button>
                </form>
            </div>
        @endcan
        <div class="row table-location hidable">
            <div class="col-md-12">
                <table class="table table-striped" >
                    <thead>
                    <th>{{__('Select')}}</th>
                    <th>{{__('ID')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Contact name')}}</th>
                    <th>{{__('Contact details')}}</th>
                    <th>{{__('Active')}}</th>
                    <th>{{__('Actions')}}</th>

                    </thead>
                    <tbody>
                        @foreach( $locations as $index => $location)
                            <tr >
                                <td><input class="cb-delete" type="checkbox" data-id="{{ $location->id }}"> </td>
                                <td>{{ $location->id }}</td>
                                <td>{{ $location->name }}</td>
                                <td>{{ $location->managed_by }}</td>
                                <td>{{ $location->contact_details }}</td>
                                <td>{{ $location->active }}</td>
                                <td>
                                    <button class="btn btn-outline-primary btn-xs edit location" data-id="{{ $location->id  }}" data-index="{{ $index }}">
                                        {{__('More \ Edit')}}
                                    </button>
                                    <button class="btn btn-outline-secondary btn-xs" wire:click="$dispatch('map-update',
                                    [{
                                        id          : {{ $location->id }},
                                        name        : '{{ $location->name }}',
                                        component   : 'location-index',
                                        latitude    : '{{ $location->coordinates->latitude }}',
                                        longitude   : '{{ $location->coordinates->longitude }}'
                                        }] )">
                                        {{__('Show on map')}}
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @else
        <div class="row">
            <div class="col-md-12">
                <span>No locations</span>
            </div>
        </div>
    @endif
</div>
@script
    <script>
        $wire.on('location-updated', () => {
            window.location.reload()
        });

        $('#delete-location').on('click', function(){
            let ids = [];
            for(let index = 0; index < $('.cb-delete').length; index++){
                if($('.cb-delete')[index].checked) {
                    ids.push($('.cb-delete')[index].dataset.id);
                }
            }
            $wire.dispatch('location-delete',[ids]);
        })
    </script>
@endscript
@section('scripts-bottom')

    <script >
        let locations = {!! $locations !!};

        function populateEditForm( location){

            $('#edit-id').val( location['id'])
            //update livewire id model
            document.getElementById("edit-id").dispatchEvent(new Event('input'));

            $('#edit-name').val( location['name'])
            $('#edit-email').val( location['email'])
            $('#edit-address').val( location['address'])
            $('#edit-city').val( location['city'])
            $('#edit-zip').val( location['zip'])
            $('#edit-country_code').val( location['country_code'])
            $('#edit-description').val( location['description'])
            $('#edit-province').val( location['province'])
            $('#edit-canton').val( location['canton'])
            $('#edit-managed_by').val( location['managed_by'])
            $('#edit-contact_details').val( location['contact_details'])
            $('#edit-active').val( location['active'])
            $('#edit-access').val( location['access'])
            $('#edit-coordinates').val( location['coordinates']['coordinates'][1] + ', ' + location['coordinates']['coordinates'][0])
        }

        table = new DataTable('.table',  {
            pageLength: 15,
            stateSave: true
        });

        $('#add-location').on('click', function(){
            $('.hidable').hide()
            //this.$wire.dispatch('map-hide')
            $('.add-location').show();

        })
        $('.cancel-add-location').on('click', function(){
            $('.hidable').hide()
            //this.$wire.dispatch('map-show')
            $('.table-location').show();
        })

        $('.edit.location').on('click', function(evnt){
            let locationIndex = evnt.currentTarget.dataset.index;
            let location = locations[locationIndex];
            populateEditForm(location)
            $('.hidable').hide()

            //this.$wire.dispatch('map-hide')
            $('.edit-location').show();
        })
        $('.cancel-edit-location').on('click', function(){
            $('.hidable').hide()
            //this.$wire.dispatch('map-show')
            $('.table-location').show();
        })

    </script>

@endsection
