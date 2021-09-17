@include('layouts/header');
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
 a:hover {
    color: white!important;
}
</style>
<section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" style='background-image: url("images/animeBack1.png");' id="header2-1">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">Want to Learn about Wiseman Tuition Agency?</span></h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">We have a lot to share with you. Please take a look below for more updates about us.</h3>
                
               
            </div>
        </div>
    </div>
    
</section>

<section class="mbr-section form1 cid-rHZw4p8wYD" id="form1-i" style="background-color: #efefef;">

    

    
    <div class="container">
        <div class="row px-1">
            <div class="tab-content">
                <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        @foreach($blog as $item)
                        <div class="col-xs-12 col-md-6 col-lg-3" style="background-color: white;margin-bottom: 20px;margin-right: 30px;margin-left: 30px;height: 400px;overflow-y: hidden;">
                            <div class="card-img " style="margin-bottom: 10px;">
                                <img src="storage/{{$item['title']}}/{{$item['image']}}" style="height: 170px;margin-bottom: 13px;margin-top: 8px;">
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                {{$item['title']}}</h4>

                            <p class="text mbr-section-text  align-center mbr-fonts-style display-7">
                               
                                <?php echo strip_tags($item['content']); ?></p><br>
                           
                                <a class="more buttons" style="cursor: pointer;" href="{{route('BlogView',$item['id'])}}">See More.</a>
                        </div>
                        @endforeach
                       
                        


                    </div>
                </div>

                
            </div>
        </div>
    </div>
    
</section>


@include('layouts/footer');