<div class="row panel">
  <div class="col-md-12 col-xs-12">
      <div style="padding-top:10rem;"></div>
      <img src="/assets/me.jpg" class="img-thumbnail picture hidden-xs" style="width:110px;height:110px;"/><br>

      <form action="/profile/update" method="post" enctype="multipart/form-data" >
        <label class="btn btn-default btn-file" style="width:110px;">Browse
          <input name="img" type="file" style="display:none;">
        </label>
        <input type="submit" value="Update" class="btn btn-primary">
      </form>

      <div class="header">

        <h1><?= $_SESSION['user']['username']?></h1>
        <h4>Web Developer</h4>
        <span><?= $_SESSION['user']['userDesc']?></span>
      </div>
  </div>
</div>
