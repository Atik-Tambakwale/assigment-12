var path = $("#host").val();

function Active_Assoc_list() {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	var id = $("#comapny_name").val();
	$.ajax({
		url: path + "at_assoc",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {

			$("#at_assoc_list").html(data.list_table);
			$("#count_list").html(data.count_list);
			$("#lu_assoc").html(data.lu_list);
		}
	})

}

function InActive_Assoc_list() {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	var id = $("#comapny_name").val();
	$.ajax({
		url: path + "iat_assoc",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#iat_assoc_list").html(data.list_table);
			$("#iat_count_list").html(data.count_list);
			$("#group_assoc").html(data.group_one);
		}
	})

}
function Less_Used_Assoc_list() {
	var csrf_test_name = $.cookie('csrf_cookie_name');
	var id = $("#comapny_name").val();
	$.ajax({
		url: path + "lsa_assoc",
		type: "GET",
		dataType: "JSON",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			csrf_test_name, id
		},
		success: function (data) {
			$("#lu_assoc_list").html(data.lu_list_table);
			$("#lu_count_list").html(data.lu_count_list);

		}
	})

}

