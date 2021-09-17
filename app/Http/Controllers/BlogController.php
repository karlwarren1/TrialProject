<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;
class BlogController extends Controller
{
    
    // display the selected blog in the Blog page with comments
    public function BlogView(Request $req, $id){
        date_default_timezone_set('Asia/Singapore');
        $blog = Blog::find($id);
        $blogCount = Blog::all();
         // get previous user id
    $previous = Blog::where('id', '<', $blog->id)->max('id');

    // get next user id
    $next = Blog::where('id', '>', $blog->id)->min('id');

    
        
        return view('viewBlog',['blog'=> $blog,'blogCount'=>$blogCount])->with('previous', $previous)->with('next', $next);
        // dump($data);
    }
    //add blog
    public function addBlogForm(Request $req){
    	 


        $blog = Blog::where('title', $req->title)->get();



        //ADDING a blog
        if ($req->id=="") {
            if (count($blog)==0) {

            $blog = new Blog;
            $blog->title=strip_tags( trim($req->title));
            $blog->datePublish=date('l jS F, Y');
            // moving file image to the folder storage in resource/storage
             $req->file('picture')->storeAs('public/'.$blog->title, $req->file('picture')->getClientOriginalName());
            $blog->image=strip_tags( trim($req->file('picture')->getClientOriginalName()));
            $blog->userID=Auth::user()->id;

            $blog->content=$req->content;
            $blog->save();
                //redirecting page 
                if (Auth::user()->id!=1) {
                    //for user
                    return redirect()->route('profile',Auth::user()->id)->with('success', 'Thank you'); 
                  }else{
                    //for admin
                    return redirect()->route('addBlog')->with('success', 'Thank you'); 
                  }
                
            }else{
                //admin
                return redirect()->route('addBlog')->with('alert', 'Thank you'); 
            }//end else
        }else{
            // UPDATING
            $blog = Blog::find($req->id);
            //remove the the folder in the storage if the title is not the same
            if ($blog->title!=$req->title) {
                //remove the the image in the storage folder according to the title
                $path = 'storage/'.$blog->title."/".$blog->image;
                    unlink(public_path($path));
                //remove the folder based on the title
                $path = 'storage/'.$blog->title;
                    rmdir(public_path($path));
                
            }else{
                //if the image is not the same 
                if ($blog->image!=$req->image) {
                    //remove the image in the storage folder based on the title
                    $path = 'storage/'.$blog->title."/".$blog->image;
                    unlink(public_path($path));
                }
            }
            
            $blog->title=strip_tags( trim($req->title));
            $blog->datePublish=date('l jS F, Y');
            // moving file image to the folder storage in resource/storage
             $req->file('picture')->storeAs('public/'.$blog->title, $req->file('picture')->getClientOriginalName());
            $blog->image=strip_tags( trim($req->file('picture')->getClientOriginalName()));

            $blog->userID=Auth::user()->id;
            $blog->content=$req->content;
            $blog->save();

            return redirect()->route('addBlog')->with('success1', 'Thank you'); 
        }//end else
        //end if



    }
    //delete blog
    public function deleteBlog($blogID){
        
     
        $blog = Blog::find($blogID);
        $blog->delete();
        //note user ID 1 is the admin account
        if (Auth::user()->id!=1) {
            return redirect()->route('profile',Auth::user()->id)->with('success2', 'Thank you'); 
        }else{
            return redirect()->route('addBlog')->with('success2', 'Thank you'); 
        }
            
        

        
    }

    //get the data of the blog based on the ID
    public function displayInEditForm(Request $req, $blogID){
    
        if ($blogID !=0) {
           
           $blog = Blog::find($blogID);
           

        }else{
            $blog='';
         
            
        }
        $replyData['data1'] = $blog;
       
        
        
        echo json_encode($replyData);
        exit;
   }
}
