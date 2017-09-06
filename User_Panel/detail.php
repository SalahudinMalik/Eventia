<?php include_once('header.php');?>
<?php include_once('navigation.php');?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="mycss.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src = "JS/basic.js"></script>
<br/>
<style>
.animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}
</style>
<script>
    (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

$(function(){

  $('#new-review').autosize({append: "\n"});

  var reviewBox = $('#post-review-box');
  var newReview = $('#new-review');
  var openReviewBtn = $('#open-review-box');
  var closeReviewBtn = $('#close-review-box');
  var ratingsField = $('#ratings-hidden');

  openReviewBtn.click(function(e)
  {
    reviewBox.slideDown(400, function()
      {
        $('#new-review').trigger('autosize.resize');
        newReview.focus();
      });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
  });

  closeReviewBtn.click(function(e)
  {
    e.preventDefault();
    reviewBox.slideUp(300, function()
      {
        newReview.focus();
        openReviewBtn.fadeIn(200);
      });
    closeReviewBtn.hide();
    
  });

  $('.starrr').on('starrr:change', function(e, value){
    ratingsField.val(value);
  });
});
</script>
<?php
 $servername = "localhost";
$username = "root";
$password = "";
$databaseName="neweventia";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);
// Check connection
if($_GET["eventid"]!=NULL)
{
    $eid  = $_GET["eventid"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
	$sql = "SELECT * FROM `event` WHERE `event_id` = '".$eid."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		echo '<div class="container" >';
		echo '<div class="body" align="center" style="margin:50px;" >';
			echo '<h2 id  ="EventName" > '.$row["event_name"].' </h2>';
			echo '<img src="../Attendo/'.$row["photo"].'" class="img-responsive" alt="dasdas" style="width:400px;height:300px;"/>';
			echo '<br />';
			echo  '<p class="time">Starting Time: '.$row["event_start_time"].'</p>';
			echo '<br />';
			echo '<p class="descr">Event Description: '.$row["event_description"].' </p>';
			echo '<br />';
			echo '<p class="date">Event Date: '.$row["event_date"].' </p>';
			echo '<br />';
			echo '<p class="loc">Event Location: '.$row["event_location"].' </p>';
			if($row["event_type_id"] != null)
			{
				$sql = "SELECT * FROM `event_type` WHERE `event_type_id` = '".$row["event_type_id"]."'";
				$Eresult = $conn->query($sql);
				$Erow = $Eresult->fetch_assoc();
				echo '<br />';
				echo '<p class="Etype">Event Type: '.$Erow["event_type_name"].' </p>';
			}
      $eventcost = 0;
      
			echo '<br /';
      if($row["event_location"]=='Karachi' || $row["event_location"]=='karachi')
      {
        $eventcost = 500;
      }
      elseif($row["event_location"]=='Lahore' || $row["event_location"]=='lahore')
      {
        $eventcost = 700;
      }
      elseif($row["event_location"]=='Islamabad' || $row["event_location"]=='islamabad')
      {
        $eventcost = 1000;
      }
      if($eventcost != 0)
      {
        //echo '<p> Event Predicted Cost : RS '.$eventcost.' </p>';
      }
			//cho '<div class="book-now-c"> ';
			//		echo '<input type="button" onclick="" value="Report"> </input>';
			//echo '</div>';
			echo '<div  class = "review">';
            echo ' <div class="container">';
            echo '<div class="row">';
echo '<form class="form-horizontal" action="detail.php?eventid='.$row["event_id"].'"" method="post" >';
echo '<fieldset>';

echo '<!-- Form Name -->';
echo '<h4 style="font-weight: bold; ">Report this Event</h4>';

echo '<h5 style="" id="closing"></h5>';
echo '<!-- Text input-->';
echo '<div class="form-group">';
  echo '<label class="col-md-4 control-label" for="comment">Your Comment</label>';  
  echo '<div class="col-md-4">';
 echo ' <input id="comment" name="comment" type="text" placeholder="Your Comments Here..." class="form-control input-md" required=""> </input>';    
 echo ' <br />';
 echo '<input type="radio" name="type" value="Spam" checked> Spam ';
 echo '<input type="radio" name="type" value="Sexual"> Sexual ';
 echo '<input type="radio" name="type" value="other"> Other ';
  echo '</div>';
echo '</div>';
echo '<button  style="float : right; margin-right: 10cm;"  type="submit" class="btn btn-primary btn-primary">Submit</button>';
echo '</form>';

echo '<a href="attend.php?eventid='.$row["event_id"].'"   type="submit">Attend Event</a>';
			echo '</div>';
		echo '</div>';
		echo '</div>';

    
    }
   	else {
    echo "0 results";
	}
$conn->close();

}

}

?> 
<?php 
require 'dbConn.php';
$conn = Connect();
if(isset($_POST['comment'])){
$eid = $_GET["eventid"];
$comment = $_POST["comment"];
$radiob = $_POST["type"];
$query   = "INSERT into report (rEventID,rComment , rType) VALUES('" . $eid . "','" . $comment . "' ,'" . $radiob . "')";  
$success = $conn->query($query);
if(!$success){
    //die("Couldn't enter data " .$conn->error);
}
elseif($success){
    echo '<script> alert("Thanks for your Feedback.") </script>';
    }
}
$conn->close();


 ?>