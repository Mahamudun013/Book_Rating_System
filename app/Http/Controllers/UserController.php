<?php

namespace App\Http\Controllers;
use App\User;
use App\Book;
use App\BookRating;
use Session;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userLoginForm()
    {
        return view('user.login.userLogin');
    }


    public function userLogin(Request $request)
    {
         $userName=$request->userName;
         $userPassword=$request->password;
         $authUser=User::where('userName',$userName)
                         ->where('password',$userPassword)->first();

         if($authUser){

             Session::put('userId',$authUser->userId);

         return redirect('/user/home');
 
         }

        else{

            return redirect('/user/login')->with('loginError','Sorry ! Wrong email/password.');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userRegisterForm()
    {
        return view('user.login.userRegister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveUserInfo(Request $request)
    {
        $this->validate($request,[
            'userName'=>'required',
            'password'=>'required',
            'userType'=>'required',
        ]);

        $user=new User();
        $user->userName=$request->userName;
        $user->password=$request->password;
        $user->userType=$request->userType;
        $user->save();

        $userId=$user->userId;
        Session::put('userId',$userId);

        return redirect('/user/home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userHomeContent()
    {
        $books = DB::table('books')
                ->leftJoin('book_ratings','book_ratings.bookId','=','books.bookId')
                ->select('books.bookId','books.title','books.author','books.publisher','books.price','books.bookImage','book_ratings.bookRating')
                ->orderBy('books.bookId')
                ->get();
 
        return view('user.home.homeContent',['books'=>$books]);
    }


    public function submitRating(Request $request)
    {
        $uId=Session::get('userId');
        $bkId=$request->bId;

        $check=BookRating::where('bookId',$bkId)->first();

        if($check)
        {
            $bookRating=BookRating::where('bookId',$bkId)->first();
            $bookRating->bookId=$request->bId;
            $bookRating->userId=$uId;
            $bookRating->bookRating=$request->bookRating;
            $bookRating->save();

         return redirect('/user/home');

        }

        else
        {
            $bookRating=new BookRating();
            $bookRating->bookId=$request->bId;
            $bookRating->userId=$uId;
            $bookRating->bookRating=$request->bookRating;
            $bookRating->save();

        return redirect('/user/home');

        }

        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userLogOut()
    {
        $userId=Session::get('userId');

        if ($userId)
        {
            Session::forget(['userId']);

            return redirect('/user/login')->with('message','Successfully Logout!');
        }
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
