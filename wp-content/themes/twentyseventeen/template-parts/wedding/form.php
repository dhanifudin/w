		<!-- Form -->
		<section class="attend">
			<div class="container">
				<form action="form.php" id="contact-form" class="form-horizontal" method="post">
				<h2 class="text-center">Are you attending?</h2>
				<div class="devider">
					<img src="img/devider-flower.png" alt="devider">
				</div>
				<p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, doloribus ab. Aliquid incidunt quibusdam aut nisi dolores</p>
				<div class="row">
					<div id="name-field" class="form-field col-sm-12">
						<label for="form-name" class="control-label">Full name</label>
						<input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name" required>
					</div>
					<div id="email-field" class="form-field col-sm-12">
						<label for="form-email" class="control-label">Email</label>
						<input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
					</div>
					<div id="number-field" class="form-field col-sm-6">
						<label for="form-number" class="control-label">Number of guests</label>
						<input type="text" class="form-control" id="form-number" name="form-number" placeholder="Enter Number" required>
					</div>
					<div id="select-field" class="form-field col-sm-6 select-wrap">
						<label for="sel1" class="control-label">Select list:</label>
						<select class="form-control" id="sel1" name="mysel">
							<option value="All events">All events</option>
							<option value="Ceremony">Ceremony</option>
							<option value="Party">Party</option>
						</select>
					</div>
					<div class="col-sm-12 text-center">
						<button type="submit" class="send-button">I'm attending</button>
					</div>
				</div>
				</form>
			</div>
		</section>
