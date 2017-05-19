<div class="container">
  <div class="starter-template">
    <h1>Edit fruit</h1>

    <form action="/about/editAction" method="POST">
      <input type="text" name="name" placeholder="Bannanas?" value="<?=$data[0]["name"]?>">
      <input type="hidden" name="id" value="<?=$this->parent->urlPathParts[2]?>"/>
      <input type="submit">
    </form>
  </div>
</div>
