<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
public function liste_hotel(){

    $hotels= Hotel::paginate(6);
    return view('hotel.liste',compact('hotels'));
}

public function ajouter_hotel(){
    return view('hotel.ajouter');
}

public function ajouter_hotel_traitement(Request $request){

    $request->validate([
        'nom_hotel' => 'required',
        'description' => 'required',
        'nom_chambre' => 'required',
        'Prix' => 'required',
        'Nombre_lits' => 'required',
        'Max_adult' => 'required',
        'Enfant_max' => 'required',
        'Attribut' => 'required',
        'Status' => 'required',
    ]);
    

    $hotel = new Hotel();
    $hotel->nom_hotel = $request->nom_hotel;
    $hotel->description = $request->description;
    $hotel->nom_chambre = $request->nom_chambre;
    $hotel->Prix = $request->Prix;
    $hotel->Nombre_lits = $request->Nombre_lits;
    $hotel->Max_adult = $request->Max_adult;
    $hotel->Enfant_max = $request->Enfant_max;
    $hotel->Attribut = $request->Attribut;
    $hotel->Status = $request->Status;
    $hotel->save();

    return redirect('/ajouter')-> with('status','L\'étudiant a bien été ajouter avec succes');
}

public function update_hotel($id){
    $hotels = Hotel::find($id);

    return view('hotel.update',compact('hotels'));
}

public function update_hotel_traitement(Request $request){

    $request->validate([
        'nom_hotel' => 'required',
        'description' => 'required',
        'nom_chambre' => 'required',
        'Prix' => 'required',
        'Nombre_lits' => 'required',
        'Max_adult' => 'required',
        'Enfant_max' => 'required',
        'Attribut' => 'required',
        'Status' => 'required',
    ]);
    


    $hotel = Hotel::find($request->id);
    $hotel->nom_hotel = $request->nom_hotel;
    $hotel->description = $request->description;
    $hotel->nom_chambre = $request->nom_chambre;
    $hotel->Prix = $request->Prix;
    $hotel->Nombre_lits = $request->Nombre_lits;
    $hotel->Max_adult = $request->Max_adult;
    $hotel->Enfant_max = $request->Enfant_max;
    $hotel->Attribut = $request->Attribut;
    $hotel->Status = $request->Status;
    $hotel->update();

    return redirect('/hotel')-> with('status','L\'étudiant a bien été modifié avec succes');

}

public function delete_hotel($id){
    $hotel = Hotel::find($id);
    $hotel->delete();

    return redirect('/hotel')-> with('status','L\'étudiant a bien été supprimé avec succes');
}

}
