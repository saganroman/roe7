/**
 * Created by 777 on 18.07.2017.
 */
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
});