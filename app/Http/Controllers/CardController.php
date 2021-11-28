<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index(){
        $cards = Card::all();
        return view('cards.index',compact('cards'));
    }

    public function create(){
        return view('cards.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'person_name' => 'required',
            'email' => 'required|email|unique:cards',
            'description' => 'required|max:151',
            'contact_number' => 'required|numeric|digits:10',
            'address' => 'required',
        ]);
        
        $user = Card::create($validatedData);
      
        return redirect('cards')->with('success', 'Card created successfully.');
    }

    public function edit($id){
        $cards = Card::findorfail($id);
        return view('cards.edit',compact('cards'));
    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'person_name' => 'required',
            'email' => 'required|email',
            'description' => 'required|max:151',
            'contact_number' => 'required|numeric',
            'address' => 'required',
        ]);
        
        $user = Card::where('id',$id)->update($validatedData);
      
        return redirect('cards')->with('success', 'Card updated successfully.');
    }

    public function destroy($id){
        
        $cards = Card::find($id);
        $cards->delete();

        return back()->with('success', 'Card deleted successfully.');
    }
}
