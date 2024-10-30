<x-guest-layout>

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>

						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Enregistrement</h3>
                        <x-jet-validation-errors class="mb-4" />
						<form class="row login_form" action="{{route('register')}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" :value="email" placeholder="Nom et prénom" required autofocus autocomplete="name">
							</div>
                            <div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" :value="email" required autofocus>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required autocomplete="new-password">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Confirmer mot de passe" required autocomplete="new-password">
							</div>
                            <div class="col-md-12 form-group">
                                <label for="">Selectionner un type</label>
								<select class="form-control" id="selected" name="utype" placeholder="Selectionner un type" required>
                                    <option value=""></option>
                                    <option value="ATR">Auteur</option>
                                    <option value="USR">User</option>
                                </select>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="register" name="register" class="primary-btn">S'enregistrer</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
</x-guest-layout>
