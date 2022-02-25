
class ChartBuilder {

    constructor(container) {
        this.container = document.getElementById(container)
        this.height = parseInt(KTUtil.css(this.container, 'height'));
        this.labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        this.borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
        this.baseColor = KTUtil.getCssVariableValue('--bs-primary');
        this.secondaryColor = KTUtil.getCssVariableValue('--bs-gray-300');

        //Build options
        this.buildOptions()
    }

    buildOptions(){
        this.options = {
            series: [{
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: this.height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['30%'],
                    endingShape: 'rounded'
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: this.labelColor,
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: this.labelColor,
                        fontSize: '12px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return '$' + val + ' thousands'
                    }
                }
            },
            colors: [this.baseColor, this.secondaryColor],
            grid: {
                borderColor: this.borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };
    }

    init(){
        this.chart = new ApexCharts(this.container, this.options);
        this.chart.render();
    }
}
