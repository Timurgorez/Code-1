	//AJAX ОТПРАВКА ФОРМ
	/*
	 <form>
		 <!-- Скрытые поля для отправки письма -->
		 <input type="hidden" name="project_name" value="Название сайта" />
		 <input type="hidden" name="admin_email" value="admin@mail.com" />
		 <input type="hidden" name="form_subject" value="Тема письма" />
		 <!-- END Hidden Required Fields -->

		 <input type="text" name="Имя" placeholder="You name..." required><br>
		 <input type="text" name="E-mail" placeholder="You E-mail..." required><br>
		 <input type="text" name="Телефон" placeholder="You phone..."><br>
		 <button>Send</button>
	 </form>
	 */
	 
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			//alert обработанный плагином sweet-alert
			alert("wfewrfer");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});
	