<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Gantt Chart</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
  <!-- partial:index.partial.html -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://code.highcharts.com/gantt/highcharts-gantt.js"></script>
  <script src="https://code.highcharts.com/gantt/modules/draggable-points.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <div class="main-container">
    <div id="container"></div>
    <div id="buttonGroup" class="button-row">
      <button id="btnShowDialog">
        <i class="fa fa-plus"></i>
        Add task
      </button>
      <button id="btnRemoveSelected" disabled="disabled">
        <i class="fa fa-remove"></i>
        Remove task
      </button>
    </div>

    <div id="addTaskDialog" class="hidden overlay">
      <div class="popup">
        <h3>Add task</h3>

        <label>Task name <input id="inputName" type="text" /></label>

        <label>Department
          <select id="selectDepartment">
            <option value="0">Technical</option>
            <option value="1">Marketing</option>
            <option value="2">Sales</option>
          </select>
        </label>

        <label>Dependency
          <select id="selectDependency">
            <!-- Filled in by Javascript -->
          </select>
        </label>

        <label>
          Milestone
          <input id="chkMilestone" type="checkbox" />
        </label>

        <div class="button-row">
          <button id="btnAddTask">Add</button>
          <button id="btnCancelAddTask">Cancel</button>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div id="update-title-wrapper">
      <div class="form-group">
        <label for="chart-title">Title</label>
        <input type="text" class="form-control" id="chart-title" placeholder="Enter chart-title" />
      </div>
      <div class="form-group">
        <label for="chart-subtitle">Subtitle</label>
        <input type="text" class="form-control" id="chart-subtitle" placeholder="Enter chart-subtitle" />
      </div>
      <button id="save-title">Save</button>
    </div>
    <div id="update-rows-wrapper"></div>
    <div id="reset-chart"><input type="Submit" value="Reset Chart" /></div>
    <br />
    <hr />
  </div>
  <!-- partial -->
  <script src="assets/js/script.js"></script>
</body>

</html>