// import './bootstrap';
global.$ = global.jQuery = require('jquery');
import dt from 'datatables.net-bs4';
import 'datatables.net-buttons-bs4';
global.$.DataTable = dt;

require('datatables.net-buttons/js/buttons.html5.js')();

require('jquery-modal');

require('./app/bootstrap');

require('./app/scripts');

require('./app/flash_message');