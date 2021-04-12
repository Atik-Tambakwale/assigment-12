function loadCompanyName(target) {
	$.ajax({
		type: "GET",
		dataType: "JSON",
		url: path + "loadFCD",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {},
		success: function (json) {

			var data = json.data;

			var str = "<option value=''>select company</option>";
			$.each(data, function (key, val) {
				str += "<option value='" + val.id + "' data-db_host='" + val.DB2_host + "' data-db_name='" + val.DB2_name + "' data-db_password='" + val.DB2_password + "' data-db_username='" + val.DB2_username + "'>" + val.company_name + "</option>";
			})
			$(target).html(str);
		}
	});
}

function loadtaskDates(id) {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	$.ajax({
		type: "GET",
		dataType: "JSON",
		url: path + "loadDates",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (json) {

			var data = json.data;
			//console.log(data.load_task_details);
			var add_events = data.load_task_details.data;


			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				selectable: true,

				buttonText: {
					today: 'today',
					month: 'month',
					week: 'week',
					day: 'day'
				},
				timeZone: 'UTC',
				events: add_events,
				eventColor: '#EEF0FC',
				dateClick: function () {
					alert('clicked ' + dateStr);
				},
				select: function () {
					alert('selected ' + startStr + ' to ' + endStr);
				}
			});
			/* 		$('#calendar').render(); */

		}
	});
}
function Task_Manager(id) {
	var csrf_test_name = $.cookie('csrf_cookie_name');

	$.ajax({
		url: path + "loadTask",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#my_tasks").html(data.data.display_task_count);
			$("#assigned_tasks").html(data.data.display_atask_count);
			$("#task_info_box").html(data.data.display_task_details);
			//return data.data.load_task_details;
		}
	})
}
function Task(id) {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	/* var id = $("#comapny_name").val(); */
	$.ajax({
		url: path + "taskDisplay",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#active_tasks").html(data.data.total_active_tasks);
			$("#complete_tasks").html(data.data.total_completed_tasks);
			$("#created_tasks_list").html(data.data.created_tasks);
			$("#due_tasks_count").html(data.data.due_tasks);
			/* $("#task_info_box").html(data.data.display_task_details) */
		}
	})
}
function Project(id) {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	/* var id = $("#comapny_name").val(); */
	$.ajax({
		url: path + "projectDisplay",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#active_projects").html(data.data.active_projects);
			$("#active_projects_list").html(data.data.active_project_list);
			$("#overdue_project_count").html(data.data.overdue_project_count);
			$("#project_progress").html(data.data.project_progress_info);
		}
	})
}
function Decision(id) {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	/* var id = $("#comapny_name").val(); */
	$.ajax({
		url: path + "desicionDisplay",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#decision_info").html(data.data.desicion_info);
			//$("#active_projects_list").html(data.data.active_project_list);
		}
	})
}
function Notes(id) {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	/* var id = $("#comapny_name").val(); */
	$.ajax({
		url: path + "notesDisplay",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#notes_count").html(data.data.notes_countable);
			$("#notes_task_count").html(data.data.notes_tasks_count);
			$("#dailysheet_count").html(data.data.dailysheet_count);
			//$("#active_projects_list").html(data.data.active_project_list);
		}
	})
}
function Notice(id) {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	/* 	var id = $("#comapny_name").val(); */
	$.ajax({
		url: path + "notificationDisplay",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#notes_count").html(data.data.notes_countable);
			//$("#active_projects_list").html(data.data.active_project_list);
		}
	})
}
function Message(id) {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	/* var id = $("#comapny_name").val(); */
	$.ajax({
		url: path + "msgDisplay",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#msg_sent_count").html(data.data.msg_countable);
			$("#msg_task_count").html(data.data.msg_task_countable);
		}
	})
}
/* function DailySheets() {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	var id = $("#comapny_name").val();
	$.ajax({
		url: path + "msgDisplay",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#msg_sent_count").html(data.data.msg_countable);
			$("#msg_task_count").html(data.data.msg_task_countable);
		}
	})
} */