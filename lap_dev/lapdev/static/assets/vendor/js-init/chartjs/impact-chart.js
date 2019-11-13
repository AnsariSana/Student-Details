// chartjs initialization

$(function () {
    "use strict";


    // doughnut_chart

    var resourceChartElement = document.getElementById("impactAnalysisChart");
    var resourceChart = new Chart(resourceChartElement, {
        "type": "doughnut",
        "data": {
            "datasets": [{
                "backgroundColor": ["#e4253c", "#dea73a", "#4c9f45", "#c5202e", "#f0412b", "#29bee2"],
                "hoverBackgroundColor": ["#e4253c", "#dea73a", "#4c9f45", "#c5202e", "#f0412b", "#29bee2"],
                "data": [55, 49, 61, 64, 84, 75],
                "borderWidth": 3,
                "label": "SDG",
                "labels": ["No Poverty", "Zero Hunger", "Good Health & Well Being", "Quality Education", "Gender Equality", "Clean Water & Sanitation"]
            }, {
                "backgroundColor": ["#adc5e2", "#b8e5e4", "#bfdecf"],
                "hoverBackgroundColor": ["#adc5e2", "#b8e5e4", "#bfdecf"],
                "data": [56, 84, 95.96],
                "borderWidth": 3,
                "label": "sectors",
                "labels": ['sector 1', 'sector 2', 'sector 3']
            }],
            
        },
        "options": {
            "cutoutPercentage": 40,
            "animation": {
                "animateRotate": true,
                "animateScale": false
            },
            "responsive": true,
            "layout": {
                "padding": 0
            },
            "tooltips": {
                "callbacks": {
                  "label": function(tooltipItem, data) {
                    var dataset = data.datasets[tooltipItem.datasetIndex];
                    var index = tooltipItem.index;
                    return dataset.labels[index] + ": " + dataset.data[index];
                  }
                }
              }
        }
    });

    Chart.pluginService.register({
        beforeDraw: function (chart) {
            var width = chart.chart.width,
                height = chart.chart.height,
                ctx = chart.chart.ctx;

            ctx.restore();
            var fontSize = (height / 80).toFixed(2);
            ctx.font = fontSize + "em Montserrat";
            ctx.textBaseline = "middle";

            var text = "75",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 1.9;

            ctx.fillText(text, textX, textY);
            ctx.save();
        }
    });
});
