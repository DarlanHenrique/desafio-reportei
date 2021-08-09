// Bootstrap
require('./bootstrap');

// DataTable
require('datatables.net-bs4');
require('datatables.net-buttons-bs4');

// Fancybox
import { Fancybox } from "@fancyapps/ui";

//Livewire Sortable
import 'livewire-sortable'

//AlpineJs
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// SweetAlert2
import swal from 'sweetalert2';

window.Swal = swal;