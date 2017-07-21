function getNumbers(number) {
	var inputValue = number.value;
	var inputName = '#' + number.id;

	$.ajax({
		url: "http://localhost/roe/public/changeAutocomplete/" + inputValue,
		cache: false,
		success: function (numbers) {
			$(inputName).autocomplete({
				source: JSON.parse(numbers),
				delay: 500,
			});
		}
	});
};
$(document).ready(function () {


	$('#DataTable').DataTable({
		"pagingType": "full_numbers",
		language: {
			processing: "Обробка...",
			search: "Пошук:",
			lengthMenu: "Показати _MENU_ записів",
			info: "Показано з _START_ до _END_ записи. Всього: _TOTAL_ ",
			infoEmpty: "Пусто",
			infoFiltered: "",
			infoPostFix: "",
			loadingRecords: "Загружаю результати...",
			zeroRecords: "Співпадінь не знайдено",
			emptyTable: "Пуста табличка",
			paginate: {
				first: "Перша",
				previous: "Попередня",
				next: "Наступна",
				last: "Остання"
			},
			aria: {
				sortAscending: ": activer pour trier la colonne par ordre croissant",
				sortDescending: ": activer pour trier la colonne par ordre décroissant"
			}
		}
	});

	$('#price').mask('999.99грн');
	setTimeout(function () {
		$('#flash_mess').css('display', 'none');
	}, 5000);

	/*$("input[name='date_give']").change(function () {
	 var date_get = $("input[name='date_get']").val();
	 var date_give = $("input[name='date_give']").val();

	 var r=moment(date_get).isAfter(moment(date_give));

	 r?alert("Неправильно задана дата"):alert("Все ок");

	 ;
	 });*/
// $('.mySelectCalendar').datepicker({ firstDay: 1, dateFormat: "dd.mm.yy" });


	/*	window.Parsley
	 .addValidator('dateformat', {
	 validate: function() {
	 var date_get = $("input[name='date_get']").val();
	 var date_give = $("input[name='date_give']").val();

	 if(moment(date_get).isAfter(moment(date_give))){
	 return 0;

	 };



	 },
	 messages: {
	 en: 'This value should be a multiple of %s',
	 fr: 'Cette valeur doit être un multiple de %s'
	 }
	 });*/

	window.Parsley.addValidator('dateformat',
		function (value, requirement) {
			var date_get = $("input[name='date_get']").val();
			var date_give = $("input[name='date_give']").val();

			if (moment(date_get).isAfter(moment(date_give))) {
				return 0;

			}
			;
		}, 32)
		.addMessage('en', 'myvalidator', 'my validator failed');
});