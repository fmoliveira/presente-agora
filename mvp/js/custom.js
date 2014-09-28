$('.datepicker').datepicker({
    format: "dd/mm/yyyy"
});

$().ready(function() {
	var $estado = $('#estado');
	if ($estado.length == 1) {
		var jqxhr = $.ajax("/request?action=estados")
			.done(function(data) {
				$estado.find('option').remove().end().append($("<option/>", { text: "---" }));
				data.forEach(function(item) {
					$estado.append($("<option/>", { value: item.id, text: item.nome }));
				});
			});
	}
});

$('#estado').change(function() {
	var $estado = $(this).val();
	var $cidade = $('#cidade');
	if ($cidade.length == 1) {
		var jqxhr = $.ajax("/request?action=cidades&id=" + $estado)
			.done(function(data) {
				$cidade.find('option').remove().end().append($("<option/>", { text: "---" }));
				data.forEach(function(item) {
					$cidade.append($("<option/>", { value: item.id, text: item.nome }));
				});
			});
	}
});

$('.prod .item,.prod .love').click(function() {
	var $prod = $(this).parent();
	$prod.toggleClass('loved');
});
