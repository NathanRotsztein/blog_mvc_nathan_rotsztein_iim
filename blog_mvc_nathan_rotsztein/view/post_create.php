<h2>Ajouter un post</h2>
<a href="/nathan-taff-php/">Liste</a><br><hr>
<form id='form_create_post' onsubmit="return form_action('form_create_post')" action="post.create" method="POST">
	<label>Nom</label><br>
	<input type="text" name='nom'><br>
	<label>Nombre de post créé</label><br>
	<input type="number" name='nb_depost'><br>
	<input type="submit">
</form>
<script src="/nathan-taff-php/common/js/main.js"></script>