  <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
          Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="#"></a>.</strong> All rights reserved.
  </footer>

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="adminlte/js/adminlte.min.js"></script>
  <!-- jsGrid -->
  <script src="adminlte/plugins/jsgrid/demos/db.js"></script>
  <script src="adminlte/plugins/jsgrid/jsgrid.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="adminlte/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
      $(function() {
          $("#teams-table").jsGrid({
              height: "100%",
              width: "100%",

              sorting: true,
              paging: true,

              data: db.clients,

              fields: [{
                      name: "Name",
                      type: "text",
                      width: 150
                  },
                  {
                      name: "Age",
                      type: "number",
                      width: 50
                  },
                  {
                      name: "Address",
                      type: "text",
                      width: 200
                  },
                  {
                      name: "Country",
                      type: "select",
                      items: db.countries,
                      valueField: "Id",
                      textField: "Name"
                  },
                  {
                      name: "Married",
                      type: "checkbox",
                      title: "Is Married"
                  }
              ]
          });
      });
  </script>

  </body>

  </html>