am4core.ready(function () {
    // // Themes begin
    am4core.useTheme(am4themes_animated);
    // // Themes end

    // create chart
    var impact_chart = document.getElementById("impactChart");

    if (!impact_chart) {
        return;
    }

    var chart = am4core.create("impactChart", am4plugins_sunburst.Sunburst);
    chart.autoMargins = false;
    chart.padding(0, 0, 0, 0);
    chart.radius = am4core.percent(98);

    chart.data = [{
        name: "No Poverty",
        color: am4core.color("#e5243b"),
        children: [
            { name: "SME Financing", value: 100, color: "#ADC5E2" },
            { name: "Consumer Loans", value: 60, color: "#B8E5E4" }
        ]
    },
    {
        name: "Climate Action",
        color: am4core.color("#3F7E44"),
        children: [
            { name: "Student Education Loans", value: 54, color: "#BFDECF" },
            { name: "SME Financing", value: 89, color: "#ADC5E2" },
            { name: "Consumer Loans", value: 89, color: "#B8E5E4" }
        ]
    },
    {
        name: "Zero Hunger",
        color: am4core.color("#DDA63A"),
        children: [
            { name: "Student Education Loans", value: 54, color: "#BFDECF" },
        ]
    }
    ];

    chart.innerRadius = 100;
    var label = chart.seriesContainer.createChild(am4core.Label);
    label.text = "75";
    label.horizontalCenter = "middle";
    label.verticalCenter = "middle";
    label.fontSize = 18

    chart.colors.step = 2;
    chart.fontSize = 11;
    chart.innerRadius = am4core.percent(30);

    // define data fields
    chart.dataFields.value = "value";
    chart.dataFields.name = "name";
    chart.dataFields.children = "children";
    chart.dataFields.color = "color";

    var level0SeriesTemplate = new am4plugins_sunburst.SunburstSeries();
    level0SeriesTemplate.hiddenInLegend = false;
    chart.seriesTemplates.setKey("0", level0SeriesTemplate);
    level0SeriesTemplate.labels.template.text = "{category}";
    level0SeriesTemplate.hiddenInLegend = false;

    // this makes labels to be hidden if they don't fit
    level0SeriesTemplate.labels.template.truncate = false;
    level0SeriesTemplate.labels.template.hideOversized = true;

    level0SeriesTemplate.labels.template.adapter.add("rotation", function (rotation, target) {
        target.maxWidth = target.dataItem.slice.radius - target.dataItem.slice.innerRadius - 10;
        target.maxHeight = Math.abs(target.dataItem.slice.arc * (target.dataItem.slice.innerRadius + target.dataItem.slice.radius) / 2 * am4core.math.RADIANS);

        return rotation;
    })


    var level1SeriesTemplate = level0SeriesTemplate.clone();
    chart.seriesTemplates.setKey("1", level1SeriesTemplate)
    level1SeriesTemplate.fillOpacity = 0.75;
    level1SeriesTemplate.hiddenInLegend = true;

    // chart.legend = new am4charts.Legend();

    chart.events.on('inited', function (event) {
        // populate our custom legend when chart renders
        chart.customLegend = document.getElementById('legend');
        for (var i in chart.data) {
            var row = chart.data[i];
            var color = chart.data[i].color;
            var children = chart.data[i].children;
            var name = row.name;
            chart.customLegend.innerHTML +=
                [
                    '<div class="legend-item">',
                    '<div class="legend-marker" style="background: ' + color + '"></div>',
                    '<span>' + name + '</span><ul class="pl-3">' + children.map(function (item) {
                        return '<li class="legend-item">' + '<span class="legend-marker" style="background: ' + item.color + '"></span>' + item.name + '</li>';
                    }).join("") + '</ul>',
                    '<hr></div>'
                ].join("");
        }
    });
});