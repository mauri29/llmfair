<div class="container dynamicTile">
  <div class="row ">
    <div class="col-sm-2 col-xs-4">
      <div id="tile1" class="tile">
          
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-2 col-xs-4">
      <div id="tile2" class="tile"> 
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-2 col-xs-4">
    <div id="tile3" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            <div class="item">
               <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            </div>
         </div>
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile4" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
          </div>
        </div>
         
    </div>
  </div>
    <div class="col-sm-2 col-xs-4">
    <div id="tile5" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile6" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
          </div>
        </div>
         
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 col-xs-8">
    <div id="tile7" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://via.placeholder.com/750x320" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/750x320" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/750x320" class="img-responsive"/>
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile8" class="tile">
       
         <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
               <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            <div class="item">
               <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
            </div>
         </div>
         
    </div>
  </div>
  <div class="col-sm-2 col-xs-4">
    <div id="tile9" class="tile">
       
          <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://via.placeholder.com/350x350g" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/350x350" class="img-responsive"/>
            </div>
          </div>
        </div>
         
    </div>
  </div>
  <div class="col-sm-4 col-xs-8">
    <div id="tile7" class="tile">
       
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://via.placeholder.com/750x320" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/750x320" class="img-responsive"/>
            </div>
            <div class="item">
              <img src="http://via.placeholder.com/750x320" class="img-responsive"/>
            </div>
          </div>
        </div>
         
    </div>
  </div>
  </div></div></div><br>

<script>
  $( document ).ready(function() {
    $(".tile").height($("#tile1").width());
    $(".carousel").height($("#tile1").width());
     $(".item").height($("#tile1").width());
     
    $(window).resize(function() {
    if(this.resizeTO) clearTimeout(this.resizeTO);
  this.resizeTO = setTimeout(function() {
    $(this).trigger('resizeEnd');
  }, 10);
    });
    
    $(window).bind('resizeEnd', function() {
      $(".tile").height($("#tile1").width());
        $(".carousel").height($("#tile1").width());
        $(".item").height($("#tile1").width());
    });

});


</script>