// Load the piechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when Google charts has loaded.
google.charts.setOnLoadCallback(drawDefectsByPriority);
google.charts.setOnLoadCallback(drawDefectsByState);
google.charts.setOnLoadCallback(drawDefectsBySubmitter);

// Set the URL for the view that returns the json
function drawDefectsByPriority() {
    var jsonData = $.ajax({
        url: "/defects/json_by_priority",
        dataType: "json",
        async: false
        }).responseText;

    var options = {
        title: 'Defects by Priority',
        width: 400,
        height: 250,
    };

    // Create data table out of the json returned from the server.
    var data = new google.visualization.DataTable(jsonData);

    // Draw the chart with the chart options.
    var chart = new google.visualization.PieChart(
        document.getElementById('chart_priority'));

    chart.draw(data, options);
}

// Set the URL for the view that returns the json
function drawDefectsByState() {
    var jsonData = $.ajax({
        url: "/defects/json_by_state",
        dataType: "json",
        async: false
        }).responseText;

    var options = {
        title: 'Defects by State',
        width: 400,
        height: 250,
    };

    // Create data table out of the json returned from the server.
    var data = new google.visualization.DataTable(jsonData);

    // Draw the chart with the chart options.
    var chart = new google.visualization.PieChart(
        document.getElementById('chart_state'));

    chart.draw(data, options);
}

// Set the URL for the view that returns the json
function drawDefectsBySubmitter() {
    var jsonData = $.ajax({
        url: "/defects/json_by_submitter",
        dataType: "json",
        async: false
        }).responseText;

    var options = {
        title: 'Defects by Submitter',
        width: 400,
        height: 250,
        legend: 'none',
    };

    // Create data table out of the json returned from the server.
    var data = new google.visualization.DataTable(jsonData);

    // Draw the chart with the chart options.
    var chart = new google.visualization.BarChart(
        document.getElementById('chart_submitter'));

    chart.draw(data, options);
}
