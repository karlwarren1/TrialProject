<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
class MainController extends Controller
{
    // Controller for the Main Function of the Website




    //displaying blog list in Blog page
    public function displayBlog(){
    	$data = Blog::all();
    	return view('blog',['blog'=> $data]);
    }
	//displaying blog list in Blog page In ADMIN
    public function showAddBlog(){
        
        $data = Blog::select('blogs')
                ->join('users','users.id','=','blogs.userID')
                ->select('blogs.id','blogs.created_at','blogs.title','blogs.datePublish','blogs.image','users.name','blogs.content')
                ->orderBy('userID','ASC')
                ->orderBy('created_at','ASC')
                ->get();
        return view('admin/addBlog',['blog'=> $data]);
    }

    //displaying blog list in Blog page in Client
    public function showAddBlogClient($profileID){
        
        $data = Blog::where('userID',$profileID)->get();
        $user = User::find($profileID);
        return view('admin/clientDashboard',['blog'=> $data,'user'=> $user->id]);
    }



    

}
