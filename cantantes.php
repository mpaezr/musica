<section>
	<h2>Cantantes</h2>
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Nombre</th>
		  
		</tr>
	  </thead>
	  <tbody>
		<?php 
		
		//agafem els registres de la bd
		$s="SELECT * FROM musica_cantantes ORDER BY ID ASC";
		
		$r=$bd->query($s);
		
		while($row=$r->fetch_object()){
			?>
			<tr>
				<th scope="row"><?php echo $row->ID;?></th>
				<td><a href='index.php?sec=1&cantant=<?php echo $row->ID;?>'><?php echo $row->nom;?></a></td>
			</tr>
			<?php
		}
		?>
	  </tbody>
	 
	</table>
</section>