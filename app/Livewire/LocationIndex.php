<?php

namespace App\Livewire;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\On;
use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;


class LocationIndex extends Component
{
    use WithPagination;
    public $id, $name, $address, $city, $zip, $country_code, $province,
        $canton, $email, $description, $access = "PUBLIC", $location_emergency,
        $managed_by, $contact_details, $active, $coordinates="9.934739, -84.087502";

    //protected $paginationTheme = 'bootstrap';
    public function resetFields(): void
    {
        $this->id = null;
        $this->name = null;
        $this->address = null;
        $this->city = null;
        $this->zip = null;
        $this->country_code = "506";
        $this->province = null;
        $this->canton = null;
        $this->email = null;
        $this->description = null;
        $this->access = "PUBLIC";
        $this->managed_by = null;
        $this->contact_details = null;
        $this->location_emergency = null;
        $this->active = "YES";
        $this->coordinates = "9.934739, -84.087502";
    }
    #[NoReturn] #[On('location-delete')]
    public function eventDelete($ids = null):void
    {
        Location::whereIn( 'id', $ids)->delete();
        session()->flash( 'message', 'Location(s) deleted.');
        $this->dispatch('location-updated');
    }
    #[NoReturn] #[On('location-coordinates-save')]
    public function coordinatesSave($data):void
    {
        Location::where('id', $data['id'])->update(['coordinates' => DB::raw("(ST_GeomFromText('POINT(" . trim($data['latitude']) . " " . trim($data['longitude']) .  ")', 4326))")]);
        session()->flash('message','Coordinates successfully updated.');
        $this->dispatch('location-updated');
    }
    public function update($data = null): void
    {
        try {
            $location = Location::find($this->id)->first();

            if(!empty($this->name)) $location->name = $this->name;
            if(!empty($this->email)) $location->email = $this->email;
            if(!empty($this->address)) $location->address = $this->address;
            if(!empty($this->city)) $location->city = $this->city;
            if(!empty($this->zip)) $location->zip = $this->zip;
            if(!empty($this->country_code)) $location->country_code = $this->country_code;
            if(!empty($this->description)) $location->description = $this->description;
            if(!empty($this->province)) $location->province = $this->province;
            if(!empty($this->canton)) $location->canton = $this->canton;
            if(!empty($this->managed_by)) $location->managed_by = $this->managed_by;
            if(!empty($this->contact_details)) $location->contact_details = $this->contact_details;
            if(!empty($this->active)) $location->active = $this->active;
            if(!empty($this->access)) $location->access = $this->access;

            if (!empty($this->coordinates)) {
                $separator = ' ';
                if (str_contains($this->coordinates, ',')) {
                    $separator = ',';
                }
                $points = explode($separator, $this->coordinates);
                $location->coordinates = DB::raw("(ST_GeomFromText('POINT(" . trim($points[0]) . " " . trim($points[1]) . ")', 4326))");
            }

            $location->save();
        }catch(\Exception $e){
            error_log($e->getMessage());
        }
    }
    public function save(): void
    {
        try{
            $coordinates = trim($this->coordinates);
            if(!empty($coordinates)){
                $separator = ' ';
                if( str_contains($coordinates, ',')){
                    $separator = ',';
                }
                $points = explode($separator, $coordinates);
                Location::create([
                    'name' => $this->name,
                    'address' => $this->address,
                    'city' => $this->city,
                    'zip' => $this->zip,
                    'country_code' => $this->country_code,
                    'province' => $this->province,
                    'canton' => $this->canton,
                    'email' => $this->email,
                    'description' => $this->description,
                    'access' => $this->access,
                    'managed_by' => $this->managed_by,
                    'contact_details' => $this->contact_details,
                    'active' => $this->active,
                    'coordinates' => DB::raw("(ST_GeomFromText('POINT(" . trim($points[0]) . " " . trim($points[1]) .  ")', 4326))")
                ]);
                $this->resetFields();
                session()->flash('message','Location created successfully.');
                $this->dispatch('location-updated');
            }else{
                session()->flash('error','Coordinates are missing');
            }
        }catch(\Exception $e){
            session()->flash('error','Location NOT added');
        }
        // $this->validate();
    }
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        //$this->locations = Location::whereNotNull('id')->paginate(15);
        $locations = Location::with('machines')->get();
        $this->resetFields();

        return view('livewire.location-index')->with('locations', $locations);
    }

}
