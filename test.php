<!DOCTYPE html>
<html>
<head>

<link href="http://vjs.zencdn.net/5.0.2/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
    <script src="http://vjs.zencdn.net/5.0.2/video.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



   <!-- Bootstrap css library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->

<!-- Bootstrap js library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    
        
        
    <video id="example_video" class="video-js vjs-default-skin" controls preload="auto" width="800" height="480" data-setup="{}">
    
        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
    </video>
    <br>
  <button class="btn btn-success" onclick="playVideo()">Play</button>
<button class="btn btn-success" onclick="pauseVideo()">Pause</button>
<br><br>
       
        
     
 




<div class="col-xs-8">
  <h2>Create Subtitle</h2>
  
  <form method="post" action="submit.php">
    <div class="fieldGroup" >
    <div class="form-group row">
      <div class="col-xs-2">
        
        <input type="text" name="start[]" class="form-control " placeholder="Start time" id='start' onclick="startCurrent()"/>
      </div>
      <div class="col-xs-2">
        
         <input type="text" name="end[]" class="form-control " placeholder="End time" id='end' onclick="endCurrent()"/>
      </div>
      <div class="col-xs-5">
        
        <input type="text" name="subtitle[]" class="form-control " placeholder="Enter Substitle"/>
      </div>
      <div class="col-xs-2">
        
       <a  class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
      </div>
    </div>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>

  </form>
</div>






<!-- copy of input fields group -->
<div class="fieldGroupCopy" style="display: none;">
     
  <div class="form-group row">
      <div class="col-xs-2">
        
        <input type="text" name="start[]" class="form-control " placeholder="Start time"  id='start' onclick="startCurrent()"/>
      </div>
      <div class="col-xs-2">
        
         <input type="text" name="end[]" class="form-control " placeholder="End time" id='end' onclick="endCurrent()"/>
      </div>
      <div class="col-xs-5">
        
        <input type="text" name="subtitle[]" class="form-control " placeholder="Enter Substitle"/>
      </div>
      <div class="col-xs-2">
        
       <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
    </div>
  
</div> 
</div>
<script type="text/javascript">
    // console.log($('body').find('.fieldGroup').length);
    $(document).ready(function(){
        
    //group add limit
    var maxGroup = 30;
    
    //add more fields group
    
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class=" fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
            console.log($('body').find('.fieldGroup #start').length);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        
        $(this).parents(".fieldGroup").remove();
    });
});
     

     var myPlayer = videojs('example_video');
    
    var time;
            function playVideo(){
                myPlayer.play();
                
                
            }
            function pauseVideo(){
              
                myPlayer.pause();
               
                
            }
            function startCurrent(){
              var t=Math.floor(myPlayer.currentTime(time));
                  // console.log(t);
                 $('#start').val(t);
            }
             function endCurrent(){
              var t=Math.floor(myPlayer.currentTime(time));
                  // console.log(t);
                 $('#end').val(t);
            }
            
</script>
</body></html>

