<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\restaurant;
use App\syanMenu;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view ('adminUsers.systemAdmin.addRes');
    }

   //syankoRolles admin dashboard

    public function syanDas(){
        $syanMenus = syanMenu::all()->toArray();
        return view ('adminUsers.syanAdmin', compact('syanMenus'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
