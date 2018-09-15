<section>
	<h2>Discos</h2>
	
	<?php 
	//insercció de nous discos
	
	if(isset($_POST["add"])){
		
		$s="INSERT INTO musica_discos (nom,descripcio) VALUES ('".$_POST["nom"]."','".$_POST["descripcion"]."')";
		$bd->query($s) or die($bd->error);
		$s="INSERT INTO musica_cantdisco (cantant,disc) VALUES (".$_POST["cantante"].",".$bd->insert_id.")";
		$bd->query($s) or die($bd->error);
	}
	//modificacio
	if(isset($_POST["mod"])){
		
		$s="UPDATE musica_discos SET nom='".$_POST["nom"]."', descripcio='".$_POST["descripcion"]."' WHERE ID=".$_POST["editID"] ;
		$bd->query($s) or die($bd->error);
		$s="UPDATE musica_cantdisco SET cantant=".$_POST["cantante"]." WHERE disc=".$_POST["editID"];
		$bd->query($s) or die($bd->error);
	}
	//eliminar registre
	if(isset($_GET["del"])){
		$s="DELETE FROM musica_discos WHERE ID=".$_GET["del"];
		$bd->query($s);
	}
	
	?>
	
	<div class='btn btn-primary togform'>Añadir</div>
	<div class='addform d-none'>
	<!--formulari d'afegir disc-->
		<form method="POST" action='index.php?sec=1'>
		  <div class="form-group">
			<label for="nom">Nombre</label>
			<input type="text" class="form-control" placeholder="Nombre" name='nom' id='nom'>
		  </div>
		  <div class="form-group">
			<label for="descripcion">Descripción</label>
			<input type="text" class="form-control" id="descripcion" placeholder="Descripción" name='descripcion'>
		  </div>
		  <div class="form-group">
			<label for="select">Cantante</label>
			<select class="form-control" id="select" name='cantante'>
			  <?php
				$s="SELECT * FROM musica_cantantes";
				$r=$bd->query($s);
				while($row=$r->fetch_object()){
					echo "<option value='".$row->ID."'>".$row->nom."</option>";
				}
			  ?>
			</select>
		  </div>
		  <input type="submit" class="btn btn-default" value='OK' name='add'>
		</form>
	</div>
	<div class='editform d-none panel paneldefault'>
	<!--formulari d'edicio disc-->
		<form method="POST" action='index.php?sec=1'>
		  <div class="form-group">
			<label for="nom">Nombre</label>
			<input type="text" class="form-control" placeholder="Nombre" name='nom' id='nom'>
		  </div>
		  <div class="form-group">
			<label for="descripcion">Descripción</label>
			<input type="text" class="form-control" id="descripcion" placeholder="Descripción" name='descripcion'>
		  </div>
		  <div class="form-group">
			<label for="select">Cantante</label>
			<select class="form-control" id="select" name='cantante'>
			  <?php
				$s="SELECT * FROM musica_cantantes";
				$r=$bd->query($s);
				while($row=$r->fetch_object()){
					echo "<option value='".$row->ID."'>".$row->nom."</option>";
				}
			  ?>
			</select>
		  </div>
		  <input type='hidden' name='editID' class='editID' value='0'>
		  <input type="submit" class="btn btn-default" value='Editar' name='mod'>
		  <div class='btn tanca'>Cerrar</div>
		</form>
	</div>
	
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Nombre</th>
		  <th scope="col">Descripción</th>
		  <th scope="col"></th>
		  <th scope="col"></th>
		</tr>
	  </thead>
	  <tbody>
		<?php 
		
		//agafem els registres de la bd
		if(isset($_GET["cantant"])){
			$s="SELECT DISTINCT d.nom as nom, d.descripcio as descripcio, d.ID as ID FROM musica_discos as d, musica_cantdisco as c WHERE d.ID=c.disc AND c.cantant=".$_GET["cantant"]." ORDER BY ID ASC";
		}else{
			$s="SELECT * FROM musica_discos ORDER BY ID ASC";
		}
		$r=$bd->query($s);
		
		while($row=$r->fetch_object()){
			?>
			<tr>
				<th scope="row"><?php echo $row->ID;?></th>
				<td><?php echo $row->nom;?></td>
				<td><?php echo $row->descripcio;?></td>
				<td class='toedit' name='<?php echo $row->ID;?>'>Editar</td>
				<td><a href='index.php?sec=1&del=<?php echo $row->ID;?>' class='del'>X</a></td>
			</tr>
			<?php
		}
		?>
	  </tbody>
	 
	</table>
</section>