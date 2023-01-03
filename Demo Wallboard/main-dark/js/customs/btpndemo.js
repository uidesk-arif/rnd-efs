$(document).ready(() => {
    widget_interest_indicator()
    setInterval(() => {
        widget_small()
        widget_interest_indicator_update()
    }, 2000) 
})

function widget_small() {
    $.getJSON("/rnd-efs/api.php?cmd=btpnDemoWidgetSmall", (result) => {
        if (result.status) {
            $('#value-interest').text(result.datas.interest ?? 0)
            $('#value-approved').text(result.datas.approved ?? 0)
            $('#value-not-approved').text(result.datas['not-approved'] ?? 0)
            $('#value-callback').text(result.datas.callback ?? 0)
        }
    })
}

function widget_interest_indicator() {
    $.getJSON("/rnd-efs/api.php?cmd=btpnDemoWidgetInterestIndicator", (result) => {
        if (result.status) {
            let total = result.datas.total
            let quarter = total/4;

            var data = [
                quarter,
                quarter * 2,
                quarter * 3,
                quarter * 4
            ];

            var value = result.datas.interest;
        
            var config = {
                type: 'gauge',
                data: {
                    //labels: ['Success', 'Warning', 'Warning', 'Error'],
                    datasets: [{
                        data: data,
                        value: value,
                        backgroundColor: ['red', 'orange', 'yellow', 'green'],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    title: {
                        display: false,
                        text: 'Gauge chart'
                    },
                    layout: {
                        padding: {
                            bottom: 0
                        }
                    },
                    needle: {
                        // Needle circle radius as the percentage of the chart area width
                        radiusPercentage: 2,
                        // Needle width as the percentage of the chart area width
                        widthPercentage: 3.2,
                        // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
                        lengthPercentage: 40,
                        // The color of the needle
                        color: 'rgba(0, 0, 0, 1)'
                    },
                    valueLabel: {
                        formatter: Math.round
                    }
                }
            };

            console.log(config.options.valueLabel)
            var ctx = document.getElementById('chart_interest_indicator').getContext('2d');
            window.myGauge = new Chart(ctx, config);
        }
    })
}

function widget_interest_indicator_update() {
    $.getJSON("/rnd-efs/api.php?cmd=btpnDemoWidgetInterestIndicator", (result) => {
        if (result.status) {
            let total = result.datas.total
            let quarter = total/4;

            var data = [
                quarter,
                quarter * 2,
                quarter * 3,
                quarter * 4
            ];
            window.myGauge.config.data.datasets[0].data = data;
            window.myGauge.config.data.datasets[0].value = result.datas.interest;
            window.myGauge.update()
        }
    })
}

