	<?
		include('header.php');
	?>

		<div class = "container white">
			<br>

			<br>
			<div class = "row">
				<div class = "col offset-s1 s10 grey lighten-5 z-depth-1">
					<div class = "row center">
						<div class = "container">
							<br>
							<h5 class = "green-text center"> Добавьте товар на аукцион! </h5>
							<form>
					
								<div class="input-field ">
									<input class="active" id="product" type="text" class="validate">
									<label for="product">Товар</label>
								</div>

								<div class="input-field">
									<input class="active" id="first_name" type="text" class="validate">
									<label for="first_name">Краткое описание</label>
								</div>

									
								<div class = "row">
									<div class="file-field input-field">
										<div class="btn">
											<span>Фото</span>
											<input type="file" multiple>
										</div>

										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Upload one or more files">
										</div>
									</div>
								</div>

								<div class = "row">
									<div class="input-field col s6">
										<input class="active" id="last_name" type="text" class="validate">
										<label for="last_name">Начальная цена: </label>
									</div>

									<div class="input-field col s6">
										<input class="active" id="last_name" type="text" class="validate">
										<label for="last_name">Окончательная цена: </label>
									</div>	
								</div>
								<span class="alert">

								</span>

								<br>
								<br>
								<br>

								<div class="row">
									<div class="Button">
										<a class="waves-effect waves-light btn-small right regNow">Добавить</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>

		<?
			include('footer.php');
		?>

	</body>
</html>
