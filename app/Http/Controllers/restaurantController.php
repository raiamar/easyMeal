<?php

namespace App\Http\Controllers;
use Validator;
Use Redirect;
use Illuminate\Http\Request;
use App\syanMenu; 
use App\syanOrder;
use view\Restaurants\SyankoKattiRolls\homePage;

class restaurantController extends Controller
{
    

 //syanko-katthi-Rolls


 public function sayanHome(){
 	$syanMenus = syanMenu::all()->toArray();
 	return view('Restaurants.SyankoKattiRolls.homePage', compact('syanMenus'));
 }



 //menu part
  public function syanMenu(){
 	return view('Restaurants.SyankoKattiRolls.syankoMenu');
 }



//syan order
 public function syanOrder(){
  
  $syanOrders = syanOrder::all()->toArray();
  $syanOrder = new \App\syanOrder();
            $syanOrder->item =request('item');
            $syanOrder->unit =request('unit');
            $syanOrder->orderType =request('orderType');
            $syanOrder->name =request('name');
            $syanOrder->address =request('address');
            $syanOrder->contact =request('contact');
            $syanOrder->table =request('table');
            $syanOrder->subject =request('subject');
            $syanOrder-> save();


            return redirect()-> route('sayanHome', compact('syanOrder'))->with('success','Your order is been received. Thank you!!');

 }

public function destroy($id){
 // $syanOrder = syanOrder::find($id);
 // $syanOrder->delete();
  syanOrder::find($id)->delete();
  return view('adminUsers.syanAdmin')->with('success', 'Data Deleted');
}


 //syanKo CRUD
   public function storeMenu(Request $request, $id){

$syanMenus = syanMenu::all()->toArray();
          $validator = Validator::make($request->all(), [
            'name' => 'required|char',
            'price' => 'required|intiger|max:4',
            'cat_id' => 'required|intiger|max:4',
        ]);
   	$syanMenu = new \App\syanMenu();
   	$syanMenu->name = request('name');
   	$syanMenu->price = request('price');
   	$syanMenu->cat_id = request('cat_id');
   	$syanMenu -> save();

   	return view('adminUsers.syanAdmin', compact('syanMenus'))->with('success','New product is added successfully to your list');
 }

    public function deleteMenu($id)
    {
        syanMenu::find($id)->delete();
        return view('adminUsers.syanAdmin')->with('success','Data successfuly Deleted');
    }

    public function editSyan(Request $request,$id)
    {
        $syanMenu = syanMenu::find($id);
        return view('Restaurants.SyankoKattiRolls.syanEdit', compact('syanMenu','id'));
    }

    public function updateSyan(Request $request, $id)
    {
            $syanMenu = syanMenu::find($id);
            $syanMenu->name = request ('name');
            $syanMenu->price = request ('price');
            $syanMenu->cat_id = request ('cat_id');
            $syanMenu->save();
            return view ('Restaurants.SyankoKattiRolls.syanEdit', compact('syanMenu'));
            //return redirect() -> route('events.index')->with('success', 'Data update success');
    }





}
