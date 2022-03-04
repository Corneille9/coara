
class ChartBuilder {

    constructor(container) {
        this.chartTypes = new ChartOptions()
        this.container = container
        this.height = parseInt(KTUtil.css(this.container, 'height'));
        this.labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        this.borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
        this.baseColor = KTUtil.getCssVariableValue('--bs-primary');
        this.secondaryColor = KTUtil.getCssVariableValue('--bs-gray-300');
        this.buildOptions()
    }

    buildOptions(){
        this.options = {
            series: undefined,
            chart: {
                fontFamily: 'inherit',
                type: undefined,
                height: this.height,
                toolbar: {
                    show: true
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
                show: true
            },
            dataLabels: {
                enabled: true
            },
            stroke: {
                show: true,
                width: 2,
            },
            xaxis: {
                categories: undefined,
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
                        return val
                    }
                }
            },
            // colors: [this.baseColor, this.secondaryColor],
            grid: {
                borderColor: this.borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        }
    }

    init(){
        this.chart = new ApexCharts(this.container, this.options);
        this.chart.render();
    }
}
