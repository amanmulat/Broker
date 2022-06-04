<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $units = Unit::get();
        // dd($units);
        return view('unitedit' , [
            'units' => $units
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnitRequest $request)
    {
        //
        $request->validate([
            'status' => 'required',
            'unit_cover'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' , 
            'unit_image.*'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' , 
            'amenities_icon.*'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' , 
        ]);
        // dd($request->unit_image);
        $amenities_icon = [] ;
        $unit_cover_name = null ;
        $unit_image = [] ;
        if($request->file('unit_cover')){
            $unit_cover_name = $request->file('unit_cover')->getClientOriginalName();
            $icon_path1 = $request->unit_cover->move(public_path('images'), $unit_cover_name);
        }
        // dd($request->file('unit_image'));
        if($request->file('unit_image')){
            for($i=0; $i < count($request->file('unit_image')); $i++){
                if(array_key_exists($i, $request->file('unit_image'))){
                    $unit_image_name = $request->file('unit_image')[$i]->getClientOriginalName();
                    $bdg_cimg_path = $request->unit_image[$i]->move(public_path('images'), $unit_image_name);
                    $unit_image[] =  $unit_image_name;
                }
            }
        }
        // dd($request->file('amenities_icon'));
        if($request->file('amenities_icon')){
            for($i=0; $i < count($request->file('amenities_icon')); $i++){
                if(isset($request->file('amenities_icon')[$i])){
                    $amenities_icon_name = $request->file('amenities_icon')[$i]->getClientOriginalName();
                    $bdg_cimg_path = $request->amenities_icon[$i]->move(public_path('images'), $amenities_icon_name);
                    $amenities_icon[] =  [$amenities_icon_name , $request->amenities[$i]];
                }
            }
        }
        // dd($request);
        Unit::create([
            'unit_name' => $request->unit_name ,
            'bed' => $request->bedroom , 
            'bath'=> $request->bathroom ,
            'area' => $request->area ,
            'unit_cover' => $unit_cover_name ,
            'unit_image' => $unit_image ,
            'sorting' => $request->sorting ,
            'furnished'=> $request->furnished ,
            'status' => $request->status ,
            'sell' => [
                'sell' => $request->sell ,
                'sell_currency' => $request->sell_currency
            ],
            'rent' => [
                'rent' => $request->rent ,
                'rent_currency' => $request->rent_currency,
                'rent_period' => $request->rent_period,
            ],
            'desc' => $request->description ,
            'amenities'=> $amenities_icon ,
            'contact' => [
                'agent_name' => $request->agent_name ,
                'agent_phone' => $request->agent_phone,
                'contact_form_text' => $request->contact_form_text,
            ],
            'tour' => $request->tour ,
            'progress'=> $request->progress ,
            'kind'=> $request->kind ,
            'location'=> [
                'location_name' => $request->location_name ,
                'google_location' => $request->google_location
            ],
        ]);
        return back();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
        // error_log('stir it up');
        dd($unit);
        return view('components.unitcardedit' , [
            'unit' => $unit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
        // dd('sfsdka');
        // dd($unit);
        // $units = Unit::get();
        dd($units);
        return view('components.unitcardedit' , [
            'unit' => $unit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnitRequest  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        //
        
        // $unit::update([
        //     'unit_name' => $request->unit_name 
        // ]);
      $input = [$request->all() , 'furnished' =>'itsis '];
      $edits = [
          'sell' =>[
              'sell' => $request->sell ,
              'sell_currency' => $request->sell_currency ,
          ] ,
          'rent' =>[
              'rent' => $request->rent ,
              'rent_currency' => $request->rent_currency ,
              'rent_period' => $request->rent_period ,
          ],
          'location'  => [
              'location_name' => $request->location_name ,
              'google_location' => $request->google_location
          ],
          'contact'  => [
              'agent_name' => $request->agent_name ,
              'agent_phone' => $request->agent_phone,
              'agent_email' => $request->agent_email,
              'contact_form_text' => $request->contact_form_text,
          ],
          
      ];
        $replaced = array_replace($request->all(), $edits);
    //   $rep = array_replace($request->all()  , $edits);
    //   dd($replaced);
        $unit->fill($replaced)->save();;
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
