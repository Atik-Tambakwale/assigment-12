/* getTreeview();
var treeData;
function getTreeview() {
	var id = '';
	var task_id = 0;
	$.ajax({

		type: "POST",
		data: { "id": id, "task_id": task_id },
		//url: path+'associate/task/get_tree_tasks',
		dataType: "json",
		success: function (response) {
			//alert(response);
			//$('#treeview_json').html(response);
			//alert(response);
			//console.log(response);
			initTree(response);
		}

	});
} */
function initTree(treeData) {
	$('#treeview_json').treeview({ data: treeData });
}

/* $(document).ready(function () { */
/* if(!<?php echo $task_not_attended_count ?> && !<?php echo $task_progress_count ?> && !<?php echo $task_completed_count ?>){
	$('#my-task').html('<h3>No task found!</h3>');
}
if(!<?php echo $atask_not_attended_count ?> && !<?php echo $atask_progress_count ?> && !<?php echo $atask_completed_count ?>){
	$('#assigned-task').html('<h3>No task found!</h3>');
}
var taskData = [
{data: 1, color: '#F44336', label: 'Not Attended', data: [<?php echo $task_not_attended_count;?>]},
{data: 2, color: '#FFEB3B', label: 'In Progress', data: [<?php echo $task_progress_count; ?>]},
{data: 3, color: '#8BC34A', label: 'Completed', data: [<?php echo $task_completed_count;?>]}
];

var assignedTaskData = [
{data: 1, color: '#F44336', label: 'Not Attended', data: [<?php echo $atask_not_attended_count;?>]},
{data: 2, color: '#FFEB3B', label: 'In Progress', data: [<?php echo $atask_progress_count; ?>]},
{data: 3, color: '#8BC34A', label: 'Completed', data: [<?php echo $atask_completed_count;?>]}
]; */

/* Donut Chart */
/* 
if ($('#donut-chart')[0]) {
	$.plot('#donut-chart', taskData, {
		series: {
			pie: {
				innerRadius: 0.5,
				show: true,
				stroke: {
					width: 2,
				},
			},
		},
		legend: {
			container: '.flc-donut',
			backgroundOpacity: 0.5,
			noColumns: 0,
			backgroundColor: "white",
			lineWidth: 0
		},
		grid: {
			hoverable: true,
			clickable: true
		},
		tooltip: true,
		tooltipOpts: {
			content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
			shifts: {
				x: 20,
				y: 0
			},
			defaultTheme: false,
			cssClass: 'flot-tooltip'
		}
	});
}

$("#donut-chart").bind("plotclick", function (event, pos, item) {
	if (item) {
		window.location.replace(`/associate/task/task_list?task_status='${item.series.label}'`);
	}
});

if ($('#donut-chart1')[0]) {
	$.plot('#donut-chart1', assignedTaskData, {
		series: {
			pie: {
				innerRadius: 0.5,
				show: true,
				stroke: {
					width: 2,
				},
			},
		},
		legend: {
			container: '.flc-donut',
			backgroundOpacity: 0.5,
			noColumns: 0,
			backgroundColor: "white",
			lineWidth: 0
		},
		grid: {
			hoverable: true,
			clickable: true
		},
		tooltip: true,
		tooltipOpts: {
			content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
			shifts: {
				x: 20,
				y: 0
			},
			defaultTheme: false,
			cssClass: 'flot-tooltip'
		}

	});
}

$("#donut-chart1").bind("plotclick", function (event, pos, item) {
	if (item) {
		window.location.replace(`/associate/task/assigned_task?task_status='${item.series.label}'`);
	}
}); */
/* }); */


/* $('.switchPopover').click(function (e) {
	e.stopPropagation();
	$('#popover-content').removeClass('hide');
})

$('#hideClose').click(function () {
	$('#popover-content').addClass('hide');
})

$("body").click(function () {
	$('#popover-content').addClass('hide');
});

$(".content").mCustomScrollbar({
	theme: "dark",
	mouseWheel: true
});
 */
$(document).ready(function () {

	$('.create-task-cta').on("click", function () {
		$('.create-task-container').slideDown()
		$('.my-task-container').addClass('hide')
	});
	$('.create-btn').on("click", function () {
		$('.create-task-container').slideUp()
		$('.my-task-container').removeClass('hide')
	});
	$(document).on("click", ".save-btn", function () {
		$(this).parent().parent().slideUp()
		$(this).parent().parent().prev().removeClass('hide')
	});
	$(document).on("click", ".edit-cta", function () {
		$(this).parent().parent().addClass('hide')
		$(this).parent().parent().next().slideDown();
	});
	$(document).on("click", ".label-dw-content", function () {
		$(this).next().slideDown()
		$(this).removeClass("down");
		$(this).addClass("up")
	})
	$(document).on("click", ".dw-item", function () {
		//$('.dw-item').removeClass('tick');
		$(this).parent().find('.tick').removeClass('tick');
		$(this).addClass('tick')
		var txt = $(this).text()
		$(this).parent().prev().text(txt);
		$('.label-dw-content').removeClass('up');
		$('.label-dw-content').addClass('down');
		$('.dw-content').slideUp();
	})

})
$('.switchPopover').click(function (e) {
	e.stopPropagation();
	$('#popover-content').removeClass('hide');
})

$('#hideClose').click(function () {
	$('#popover-content').addClass('hide');
})

$("body").click(function () {
	$('#popover-content').addClass('hide');
});
/* }); */
function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
}