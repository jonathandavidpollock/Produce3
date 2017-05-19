<div class="container">
    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p><a href="/about/showAddForm">Add New</a></p>

    <?php
      foreach($data as $fruit) {
        echo $fruit["name"]."<a href='/about/showEditForm/".$fruit["id"]."'>EDIT</a>".
        "<a href='/about/delete/".$fruit["id"]."'> Delete</a><br>";

      }
    ?>
