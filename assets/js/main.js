/**
 *
 * Active Charts using Highcharts demonstration
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2012, Script Tutorials
 * http://www.script-tutorials.com/
 */

// Функция смены типа диаграммы
function ChangeChartType(chart, series, newType) {
    newType = newType.toLowerCase();
    for (var i = 0; i < series.length; i++) {
        var srs = series[0];
        try {
            srs.chart.addSeries({
                type: newType,
                stack: srs.stack,
                yaxis: srs.yaxis,
                name: srs.name,
                color: srs.color,
                data: srs.options.data
            },
            false);
            series[0].remove();
        } catch (e) {
        }
    }
}

// Определение двух диаграмм
var chart1, chart2;

// Запуск после зваершения загрузки DOM (документа)
$(document).ready(function() {

    // Инициализация диаграммы
    chart1 = new Highcharts.Chart({
     chart: {
        renderTo: 'chart_1',
        type: 'column',
        height: 350,
     },
     title: {
        text: ' '
     },
     xAxis: {
        categories: ['2017', '2018', '2019']
     },
     yAxis: {
        title: {
           text: 'К-ть абітурієнтів на 1 місце'
        }
     },
     series: [{
        name: 'Дизайн',
        data: [3.5, 3.1, 2.4]
     },  {
        name: '*Фінанси, банківська справа та страхування',
        data: [2.4, 1.3, 4.0]
     }, {
        name: '*Підприємництво, торгівля та бірджова діяльність',
        data: [4.8, 1.6, 3.7]
     }, {
        name: '*Інженерія програмного забезпечення',
        data: [3.7, 3.36, 4.9]
     }, {
        name: '*Облік і оподаткування',
        data: [2.1, 1, 3.0]
     }, {
        name: '*Комп`ютерна інженерія',
        data: [2.7, 1, 3.7]
     }, {
        name: '*Маркетинг',
        data: [2.7, 4.6, 4.1]
     }, {
        name: '*Економіка',
        data: [2.9, 1, 3.3]
     }]
    });

    // Инициализация второй диаграммы (секторного типа)
    chart2 = new Highcharts.Chart({
        // Инициализация диаграммы

     chart: {
        renderTo: 'chart_2',
        type: 'column',
        height: 350,
     },
     title: {
        text: ' '
     },
     xAxis: {
        categories: ['2017', '2018', '2019']
     },
     yAxis: {
        title: {
           text: 'К-ть абітурієнтів на 1 місце'
        }
     },
     series: [
	 {
        name: 'Дизайн',
        data: [4.4, 4.6, 5.0]
     }, {
        name: '*Підприємництво, торгівля та бірджова діяльність',
        data: [4.2, 8.8, 6.8]
     }, {
        name: '*Інженерія програмного забезпечення',
        data: [3.6, 7.2, 7.0]
     }, {
        name: '*Облік і оподаткування',
        data: [2.1, 5.6, 3.8]
     }, {
        name: '*Комп`ютерна інженерія',
        data: [1.9, 3.5, 5.8]
     }, {
        name: '*Маркетинг',
        data: [5.4, 8.6, 5.6]
     }, {
        name: '*Економіка',
        data: [4.2, 8.8, 4.4]
     }]
    });

    // Переключение типа диаграммы
    $('.switcher').click(function () {  
        var newType = $(this).attr('id');
        ChangeChartType(chart1, chart1.series, newType);
    });
	
	
	 // Инициализация второй диаграммы (секторного типа)
    chart2 = new Highcharts.Chart({
        // Инициализация диаграммы

     chart: {
        renderTo: 'chart_3',
        type: 'column',
        height: 350,
     },
     title: {
        text: ' '
     },
     xAxis: {
        categories: ['2018','2019']
     },
     yAxis: {
        title: {
           text: 'К-ть абітурієнтів на 1 місце'
        }
     },
     series: [
	 {
        name: '*Підприємництво, торгівля та бірджова діяльність',
        data: [4.0,4.0]
     },{
        name: '*Облік і оподаткування',
        data: [6, 5.8]
     }, {
        name: '*Маркетинг',
        data: [4, 4.4]
     }, {
        name: '*Економіка',
        data: [4.3, 4.2]
     }]
    });

    // Переключение типа диаграммы
    $('.switcher').click(function () {  
        var newType = $(this).attr('id');
        ChangeChartType(chart1, chart1.series, newType);
    });
});