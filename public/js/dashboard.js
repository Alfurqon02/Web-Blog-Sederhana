/* globals Chart:false, feather:false */

// (() => {
//   'use strict'

//   feather.replace({ 'aria-hidden': 'true' })

//   // Graphs
//   const ctx = document.getElementById('myChart')
//   // eslint-disable-next-line no-unused-vars
//   const myChart = new Chart(ctx, {
//     type: 'line',
//     data: {
//       labels: [
//         'Sunday',
//         'Monday',
//         'Tuesday',
//         'Wednesday',
//         'Thursday',
//         'Friday',
//         'Saturday'
//       ],
//       datasets: [{
//         data: [
//           15339,
//           21345,
//           18483,
//           24003,
//           23489,
//           24092,
//           12034
//         ],
//         lineTension: 0,
//         backgroundColor: 'transparent',
//         borderColor: '#007bff',
//         borderWidth: 4,
//         pointBackgroundColor: '#007bff'
//       }]
//     },
//     options: {
//       scales: {
//         yAxes: [{
//           ticks: {
//             beginAtZero: false
//           }
//         }]
//       },
//       legend: {
//         display: false
//       }
//     }
//   })
// })


// $(document).ready(function () {
//   // Setup - add a text input to each footer cell
//   $('#example thead tr')
//       .clone(true)
//       .addClass('filters')
//       .appendTo('#example thead');

//   var table = $('#example').DataTable({
//       orderCellsTop: true,
//       fixedHeader: true,
//       initComplete: function () {
//           var api = this.api();

//           // For each column
//           api
//               .columns()
//               .eq(0)
//               .each(function (colIdx) {
//                   // Set the header cell to contain the input element
//                   var cell = $('.filters th').eq(
//                       $(api.column(colIdx).header()).index()
//                   );
//                   var title = $(cell).text();
//                   $(cell).html('<input type="text" placeholder="' + title + '" />');

//                   // On every keypress in this input
//                   $(
//                       'input',
//                       $('.filters th').eq($(api.column(colIdx).header()).index())
//                   )
//                       .off('keyup change')
//                       .on('change', function (e) {
//                           // Get the search value
//                           $(this).attr('title', $(this).val());
//                           var regexr = '({search})'; //$(this).parents('th').find('select').val();

//                           var cursorPosition = this.selectionStart;
//                           // Search the column for that value
//                           api
//                               .column(colIdx)
//                               .search(
//                                   this.value != ''
//                                       ? regexr.replace('{search}', '(((' + this.value + ')))')
//                                       : '',
//                                   this.value != '',
//                                   this.value == ''
//                               )
//                               .draw();
//                       })
//                       .on('keyup', function (e) {
//                           e.stopPropagation();

//                           $(this).trigger('change');
//                           $(this)
//                               .focus()[0]
//                               .setSelectionRange(cursorPosition, cursorPosition);
//                       });
//               });
//       },
//   });
// });
