class VirtualizationBuilder {
    static labelColors = ["success", "primary", "warning", "info"]
    static cols
    static chartType

    static getInstance = null

    constructor() {
        this.chart = null
        this.cube = null
        this.initCube()
    }

    checkContainers() {
        if ($(".lines-container").find("li").length === 0 && $(".columns-container").find("li").length === 0 && $(".values-container").find("li").length === 0 && $(".filters-container").find("li").length === 0){
            $("#myTabContent").find("div[data-type='info']").each((i, v)=>{
                v.classList.remove("d-none")
            })
            document.querySelector("#virtualizationTable").classList.add("d-none")
        }else {
            $("#myTabContent").find("div[data-type='info']").each((i, v)=>{
                v.classList.add("d-none")
            })
            document.querySelector("#virtualizationTable").classList.remove("d-none")
        }
    }

    addField() {
        const container = document.querySelector("#fieldsContainer")
        container.innerHTML = ""
        JSON.parse(this.chart["fields"]).forEach((value, index) => {
            container.insertAdjacentHTML("beforeend",
                `
            <div class="` + value["name"] + `-container">
                <div class="separator separator-dashed m-7"></div>
                <div class="mb-6">
                    <label class="fw-bold fs-6 mb-2">
                        <span class="text-` + VirtualizationBuilder.labelColors[index] + ` fw-bolder">` + this.getFieldName(value["name"], value["multiples"]) + `</span>
                    </label>
                    <div class="">
                        <select data-control="select2" data-placeholder="Sélectionner un champ..." class="form-select form-select-solid form-select-lg" id="` + value["name"] + `Select">
                            <option value="">Sélectionner un champ</option>
                            ` + this.getOptions(VirtualizationBuilder.cols) + `
                        </select>
                    </div>
                </div>
            </div>
        `
            )
            const field = $("#"+value["name"]+"Select")
            field.select2()
            field.on("select2:select", (e)=>{
                if (value["multiples"]) {
                    this.addFieldValueToContainer(value, index, e)
                    field.find(":selected").remove().trigger("change")
                }
                this.checkContainers()
                this.build(document.querySelector("div." + value["name"] + "-container"))

            })
        })
    }

    getFieldName(name, mul){
        let s = + mul?"s":""
        switch (name) {
            case "label": return "Etiquette" + s
            case "values": return "Valeur" + s
            case "categories": return "Categorie" + s
            case "filters": return "Filtre" + s
            case "lines": return "Ligne" + s
            case "columns": return "Colonne" + s
            default: return name
        }
    }

    getOptions(){
        let opt = ''
        VirtualizationBuilder.cols.forEach((v,i)=>{
            opt += '<option value="' + i + '">'+ v +'</option>'
        })
        return opt
    }

    addFieldValueToContainer(value ,index, e) {
        let li = `
        <li class="d-flex align-items-center py-2 ms-md-8" data-id="">
            <span class="bullet me-5 bg-` + VirtualizationBuilder.labelColors[index] + `"></span>` + e.params.data.text + `
            <button type="button" class="btn btn-sm btn-icon btn-color-danger mx-2" onclick="VirtualizationBuilder.getInstance.deleteSelected(this)" data-index="` + e.params.data.id + `" data-type="` + value["name"] + `">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                        <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                    </svg>
                </span>
            </button>
        </li>
    `
        $("." + value["name"] + "-container").append(li)
    }

    deleteSelected(target) {
        $("#" + target.dataset.type + "Select").append(new Option(VirtualizationBuilder.cols[target.dataset.index], target.dataset.index, false, false)).trigger("change")
        target.parentElement.remove()
        this.build(document.querySelector("div." + target.dataset.type + "-container"))
        this.checkContainers()
    }

    initCube(){
        let dimensionHierarchies = []
        VirtualizationBuilder.cols.forEach(value => {
            dimensionHierarchies.push(
                {
                    dimensionTable: {
                        dimension: value,
                        keyProps: [value],
                    }
                }
            )
        })

        $.ajax({
            url: Routes.dashDatasourceUrl,
            type: "POST",
            data: {
                _token: Routes.token,
            },
            success: (result) => {
                this.cube = new Cube({dimensionHierarchies})
                this.cube.addFacts(result)
            },
        });
    }

    build(container){
        console.log(this.chart["slug"])
        switch (this.chart["slug"]) {
            case "grid":
                this.grid(container)
                break
            case "line":
                break
            case "columns":
                break
            case "pie":
                break
            case "circular":
                console.log("dsfsdf")
                this.circular()
                break
            case "pivot_grid":
                this.pivot_grid()
                break
        }
    }

    grid(container){
        let selectedFieldsIndex = Array.from(container.querySelectorAll("li>button")).map(value => value.dataset.index)
        const vtable = document.querySelector("#virtualizationTable")
        vtable.querySelectorAll("tr").forEach(v=>v.remove())
        selectedFieldsIndex.forEach((values, index)=>{
            const name = VirtualizationBuilder.cols[values]
            if (index===0){
                vtable.querySelector("thead").insertAdjacentHTML("beforeend", "<tr>"+ this.getTh(name) +"</tr>")
            }else {
                vtable.querySelector("thead>tr").insertAdjacentHTML("beforeend", this.getTh(name))
            }
            this.cube.getFacts().forEach((fact, index1) => {
                if (index === 0){
                    vtable.querySelector("tbody").insertAdjacentHTML("beforeend", "<tr>"+ this.getTd(fact[name]) +"</tr>")
                }else {
                    vtable.querySelectorAll("tbody>tr")[index1].insertAdjacentHTML("beforeend", this.getTd(fact[name]))
                }
            })
        })
    }

    pivot_grid(){
        let selectedFieldsIndex = Array.from(container.querySelectorAll("li>button")).map(value => value.dataset.index)
        const vtable = document.querySelector("#virtualizationTable")
        vtable.querySelectorAll("tr").forEach(v=>v.remove())
    }

    circular(){
        let container = document.querySelector("#virtualizationContainer")
        container.innerHTML = ""
        let options = {
            series: [76, "45ds", "48dsfds", "78sddsf"],
            chart: {
                height: 350,
                type: 'radialBar',
                // offsetY: -20,
                // sparkline: {
                //     enabled: true
                // }
            },
            plotOptions: {
                radialBar: {
                    startAngle: -90,
                    endAngle: 90,
                    dataLabels: {
                        name: {
                            fontSize: "22px",
                        },
                        value: {
                            fontSize: '16px'
                        },
                        total: {
                            show: true,
                            label: "Total",
                            formatter: function (w) {
                                return 249
                            }
                        }
                    }
                }
            },
            label: ["Apples"]
        }
        console.log("dsfsdf")
        new ApexCharts(container, options).render()
    }

    getTh(value){
        return `<th class="min-w-100px">` + value + `</th>`
    }

    getTd(value){
        return `<td class="">` + value + `</td>`
    }
}
