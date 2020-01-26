project = {
	name : 'nathan-taff-php'
};

function form_action(form_id)
{
	
	form = document.getElementById(form_id);

	
	action = form.getAttribute('action');

	
	controller = action.split('.')[0];
	method = action.split('.')[1];

	
	url = '/' + project.name + '/controller/' + controller + '.php';

	
	input = document.createElement('input');
	input.setAttribute('type','hidden');
	input.setAttribute('name','action');
	input.setAttribute('value',method);s

	
	form.appendChild(input);

	
	form.setAttribute('action', url);

	
	form.submit();
}