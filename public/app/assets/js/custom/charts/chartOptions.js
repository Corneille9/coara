class ChartOptions {
    constructor() {
        //Define charts type
        this.LINECHART = "line"
        this.AREACHART = "area"
        this.BARCHART = "bar"
        this.COLUMNSCHART = "bar"
        this.TIMELINECHART = "rangeBar"
        this.BOXPLOT = "boxPlot"
        this.CANDLESTICK = "candlestick"
        this.RANGEBARTCHART = ""
        this.HEATMAPCHART = "heatmap"
        this.TREEMAPCHART = "treemap"
        this.MULTIAXISCHART = ""
        this.RADAR  = "radar"
        this.RADIALBAR = "radialBar"
        this.CIRCULARGAUGE  = ""
        this.SYNCHRONIZEDCHART  = ""
        this.PIECHART  = ""
        this.DONUTCHART  = "donut"
        this.POLARAREACHART  = "polarArea"
        this.BUBBLECHART  = "bubble"
        this.SCATTERCHART  = "scatter"

        //Define charts curve options
        this.curve = {
            STRAIGHT : 'straight',
            STEPLINE : 'stepline',
            SMOOTH   : 'smooth'
        }

        //Define xaxis options
        this.XAXISTYPE = {
            CATEGORIES : "categories",
            NUMERIC    : "numeric",
            DATETIME : "datetime"
        }
    }
}
