@include('layouts/header');
<script src="{{asset('js/jquery-1.7.2.min.js')}}"></script>

<?php function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime();
    $ago = new DateTime($datetime);

    $now->setTimezone(new DateTimeZone('Singapore'));
    $ago->setTimezone(new DateTimeZone('Singapore'));


    $diff = $now->diff($ago);



    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
} ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
<script type="text/javascript" src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<style type="text/css">
   .text {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
   margin-bottom: -8px;
}
.buttons{
    padding: 9px;
    background: #12638a;
    color: white;
}

.entry-title-divider {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin: 0 auto;
    margin-top: 15px;
    margin-bottom: 7px;
    height: 5px;
}
.entry-title-divider span {
    background-color: #fff;
}
.entry-title-divider span {
    display: inline-block;
    vertical-align: top;
    width: 5px;
    height: 5px;
    margin: 0 3px;
    -webkit-transform: rotate(
45deg
);
    transform: rotate(
45deg
);
}


.entry-title-divider:before {
    left: -48px;
}
.entry-title-divider:after {
    right: -48px;
}
.entry-title-divider:before, .entry-title-divider:after {
    content: '';
    position: absolute;
    top: 2px;
    width: 40px;
    height: 1px;
    background-color: #f4f4f4;
}
.card {
    position: relative;
    display: flex;
    padding: 20px;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 11px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}

.media img {
    width: 60px;
    height: 60px
}

.reply a {
    text-decoration: none
}
 p {
    width: : 100%!important;
    min-width: 100%!important;
    
}
</style>

<script type="text/javascript">
    //ready the document so that the reply of each comment will be displayed with out this it wont display.
function docReady(fn) {
    // see if DOM is already available
    if (document.readyState === "complete" || document.readyState === "interactive") {
        // call on next available tick
        setTimeout(fn, 1);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
} 
</script>
<?php
                               if ($blog) {
                                 $title= $blog['title'];
                               $image= $blog['image'];
                               }
                               


                               ?>
<section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" style='background-image: url("http://127.0.0.1:8000/storage/<?php if ($blog) {echo $title;} ?>/<?php if ($blog) {echo $image;} ?>");' id="header2-1">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container align-center">
        @if($blog)
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2" style="margin-bottom: -23px;"><span style="font-weight: normal;font-family: 'Playfair Display', serif;">@if($blog){{$blog['title']}}@endif</span></h1>
                <div class="entry-title-divider">
                  <span></span><span></span><span></span>
                </div>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5" style="font-size: 1rem;font-style: italic;font-family: Playfair Display;">@if($blog){{$blog['datePublish']}}@endif</h3>
                
               
            </div>
        </div>
        @else
          <div class="row justify-content-md-center">
            No Blog
          </div>
        @endif
    </div>
   
</section>

<section class="mbr-section form1 cid-rHZw4p8wYD" id="form1-i" style="background-color: #f5f5f5;">

    

    
    <div class="container" style="width: 80%;top:-100px;">
        <div class="row px-1" style="background-color: white;padding-top: 40px!important;padding-left: 40px!important;padding-right: 40px!important;padding-bottom: 40px!important;">
           
                
                   
                        
                      
                            
                            

                                @if($blog)
                                {!! $blog['content'] !!}

                                @endif

                                
                                <hr style="color: black;border: 1px solid black;width: 100%;">
                                 <br><br><br><br><br>
                                <span style="margin:auto;text-align: center;display:block;height: 0px;">

                                @if(count($blogCount)==1)
                                <span style="background-color: #12638a!important;color: white;" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">« Previous</span>
                                <span style="background-color: #12638a!important;color: white;" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">Next »</span>
                                @elseif(($blog['id']-1)<=0)
                                <span style="background-color: #12638a!important;color: white;" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">« Previous</span>

                                <a style="background-color: #12638a!important;color: white;" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" href="{{route('BlogView',$blog['id']+1)}}">Next »</a>
                                @else
                                <a style="background-color: #12638a!important;color: white;" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"  href="{{route('BlogView',$blog['id']-1)}}">« Previous</a>


                                
                                      @if(($blog['id']+1)>=$blog->count())
                                      
                                      <span style="background-color: #12638a!important;color: white;" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">Next »</span>
                                      @else
                                      <a style="background-color: #12638a!important; color: white;" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" href="{{route('BlogView',$blog['id']+1)}}">Next »</a>
                                      @endif

                                @endif
                                </span> 
        
                         

        

     
        </div>

    </div>
    
</section>

@include('layouts/footer');

<script type="text/javascript" src="{{asset('js/blog.js')}}"></script>
