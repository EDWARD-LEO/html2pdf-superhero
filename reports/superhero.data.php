<!-- Para colocar un logo, se recomienda colocar una tabla sin borde -->
<table class="table">
  <tbody>
    <colgroup>
      <col style='width: 25%'>
      <col style='width: 50%'>
      <col style='width: 25%'>
    </colgroup>
    <tr>
      <td>
        <img src="<?=$logo?>" class='logo'>
      </td>
      <td>
        <h1 class="text-c text-md mt-1"><?=$casa?></h1>
      </td>
      <td>
        <!-- Nothing -->
      </td>
    </tr>
  </tbody>
</table>

<table class="table table-border mt-3">
  <colgroup>
    <col style='width:5%'">     <!-- ID -->
    <col style='width:35%'">    <!-- Nombre -->
    <col style='width:15%'">    <!-- Género -->
    <col style='width:25%'">    <!-- Raza -->
    <col style='width:10%'">    <!-- Bando -->
    <col style='width:10%'" class='text-r'>    <!-- Estatura -->
  </colgroup>
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Género</th>
      <th>Raza</th>
      <th>Bando</th>
      <th>Estatura</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($listaSuperHeroes as $superheroe): ?>
    <tr>
      <td><?=$superheroe['id']?></td>
      <td><?=$superheroe['superhero_name']?></td>
      <td><?=$superheroe['gender']?></td>
      <td><?=$superheroe['race']?></td>
      <td><?=$superheroe['alignment']?></td>
      <td><?=$superheroe['height_cm']?></td>
    </tr> 
    <?php endforeach; ?>
  </tbody>
</table>