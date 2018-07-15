<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ContentSeeder</title>
    <?php echo Html::style('css/bootstrap.min.css'); ?>

    <?php echo Html::style('css/mystyle.css'); ?>


    <script>
        function seedForm(){
          document.getElementById('parseBtn').onclick(function(){
            location.href = "<?php echo e(url('parsedview')); ?>";
          });
        }
    </script>

  </head>

  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CSV Import</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="GET" action="<?php echo route('seederview'); ?>" enctype="multipart/form-data">


                            <div class="form-group">
                                <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                                <div class="col-md-6">
                                    <input id="csv_file" type="file" class="form-control" name="csv_file" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="header" checked> File contains header row?
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">

                                </div>
                            </div>
                        </form>
                        <button type="submit" class="btn btn-primary" id="parseBtn" onclick="seedForm()">
                            Parse CSV
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
