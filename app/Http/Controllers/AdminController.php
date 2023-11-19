<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Book;
use DB;
use Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginForm()
    {
        return view('admin.login.adminLogin');
    }


    public function adminLogin(Request $request){

        $adminName=$request->userName;
        $adminPassword=$request->password;
        $authAdmin=Admin::where('userName',$adminName)
                                ->where('password',$adminPassword)->first();

        if($authAdmin){

            Session::put('adminId',$authAdmin->id);

        return redirect('/admin/home');
 
        }

        else{

            return redirect('/admin/login')->with('loginError','Sorry ! Wrong email/password.');
        }

  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminHome()
    {
        $books = DB::table('books')
                ->leftJoin('book_ratings','book_ratings.bookId','=','books.bookId')
                ->select('books.bookId','books.title','books.author','books.publisher','books.price','books.bookImage','book_ratings.bookRating')
                ->orderBy('books.bookId')
                ->get();

        return view('admin.home.homeContent',['books'=>$books]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminLogout()
    {
        $adminId=Session::get('adminId');

        if ($adminId)
        {
            Session::forget(['adminId']);

            return redirect('/admin/login')->with('message','Successfully Logout!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
