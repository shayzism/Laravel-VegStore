
var randomColorFactor = function() {
    return Math.round(Math.random() * 255);
};
var randomColor = function(opacity) {
    return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
};

var config = {
    type: 'line',
    data: {
        labels: ["روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول","روز اول"],
        datasets: [{
            data: [2,5,0,4,0,1,3,9,7,4,5,7,6,3,0,1,4,5,2,5,7,5,6,10,56,10,2,3,56,100,23,0],
            fill: false,
            label:"تعداد سفارشات"
        }]
    },
    options: {
        responsive: true,
        legend: {
            position: 'bottom',
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display:false
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                },
               
            }]
        },
        title: {
            display: true,
            text: 'نمودار فروش  خرداد'
        }
    }
};

$.each(config.data.datasets, function(i, dataset) {
    var background = randomColor(0.5);
    dataset.borderColor = background;
    dataset.backgroundColor = background;
    dataset.pointBorderColor = background;
    dataset.pointBackgroundColor = background;
    dataset.pointBorderWidth = 1;
});

window.onload = function() {
    var ctx = document.getElementById("canvas").getContext("2d");
    window.myLine = new Chart(ctx, config);
};


