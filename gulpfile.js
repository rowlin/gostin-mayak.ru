var elixir = require('laravel-elixir');
var bowerDir = './resources/assets/bower/';

var lessPaths = [
    bowerDir + "bootstrap/less",
    bowerDir = "fullcalendar/dist",
    bowerDir + "bootstrap-datepicker/less"
];




elixir(function(mix) {
  mix.less('app.less', 'public/css', { paths: lessPaths })
    .scripts([
        '../bower/jquery/dist/jquery.js',
        '../bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
          '../bower/fullcalendar/dist/fullcalendar.js',
        '../bower/bootstrap/dist/js/bootstrap.js'
    ], 'public/js/vendor.js');

});
