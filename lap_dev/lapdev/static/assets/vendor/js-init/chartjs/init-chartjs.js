
// chartjs initialization

$(function () {
    "use strict";

    var interest_rate = document.getElementById('interest-rate-chart');

    if (interest_rate) {
        new Chart(interest_rate.getContext('2d'), {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5", "Item 6", "Item 7", "Item 8", "Item 9", "Item 10"],
                datasets: [{
                    label: "Interest Rate",
                    data: [0, 90, 210, 160, 25, 100, 86, 92, 55, 24],
                    backgroundColor: '#3dba6f',
                    borderColor: '#3dba6f',
                    pointBorderColor: '#ffffff',
                    pointBackgroundColor: '#3dba6f',
                    pointBorderWidth: 2,
                    pointRadius: 4
                }]
            },

            // Configuration options go here
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            zeroLineColor: '#e7ecf0',
                            color: '#e7ecf0',
                            borderDash: [5, 5, 5],
                            zeroLineBorderDash: [5, 5, 5],
                            drawBorder: false
                        }
                    }],
                    yAxes: [{
                        display: false,
                        gridLines: {
                            display: false,
                            zeroLineColor: '#e7ecf0',
                            color: '#e7ecf0',
                            borderDash: [5, 5, 5],
                            zeroLineBorderDash: [5, 5, 5],
                            drawBorder: false
                        }
                    }]

                },
                elements: {
                    line: {
                        tension: 0.00001,
                        //              tension: 0.4,
                        borderWidth: 1
                    },
                    point: {
                        radius: 2,
                        hitRadius: 10,
                        hoverRadius: 6,
                        borderWidth: 4
                    }
                }
            }
        });
    }


    var remaining_term = document.getElementById('remaining-term-chart');

    if (remaining_term) {
        new Chart(remaining_term.getContext('2d'), {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5", "Item 6", "Item 7", "Item 8", "Item 9", "Item 10"],
                datasets: [{
                    label: "My First dataset",
                    data: [0, 90, 210, 160, 25, 100, 86, 92, 55, 24],
                    backgroundColor: '#3dba6f',
                    borderColor: '#3dba6f',
                    pointBorderColor: '#ffffff',
                    pointBackgroundColor: '#3dba6f',
                    pointBorderWidth: 2,
                    pointRadius: 4
                }]
            },

            // Configuration options go here
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            zeroLineColor: '#e7ecf0',
                            color: '#e7ecf0',
                            borderDash: [5, 5, 5],
                            zeroLineBorderDash: [5, 5, 5],
                            drawBorder: false
                        }
                    }],
                    yAxes: [{
                        display: false,
                        gridLines: {
                            display: false,
                            zeroLineColor: '#e7ecf0',
                            color: '#e7ecf0',
                            borderDash: [5, 5, 5],
                            zeroLineBorderDash: [5, 5, 5],
                            drawBorder: false
                        }
                    }]

                },
                elements: {
                    line: {
                        tension: 0.00001,
                        //              tension: 0.4,
                        borderWidth: 1
                    },
                    point: {
                        radius: 2,
                        hitRadius: 10,
                        hoverRadius: 6,
                        borderWidth: 4
                    }
                }
            }
        });
    }


    // doughnut_chart

    var doughnut_chart = document.getElementById("doughnut-chart-example");
    var data = {
        labels: [
            "Reopen", "Declain", "Pending", "Solved "
        ],
        datasets: [{
            data: [40, 10, 10, 40],
            backgroundColor: [
                "#acf5fe",
                "#f79490",
                "#fcdd82",
                "#cae59b"
            ],
            borderWidth: [
                "0px",
                "0px",
                "0px",
                "0px"
            ],
            borderColor: [
                "#acf5fe",
                "#f79490",
                "#fcdd82",
                "#cae59b"
            ]
        }]
    };

    if (doughnut_chart) {
        new Chart(doughnut_chart, {
            type: 'doughnut',
            data: data,
            options: {
                legend: {
                    display: true
                }
            }
        });
    }

});


