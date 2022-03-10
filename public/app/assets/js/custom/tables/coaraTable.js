
class CoaraTable {
    static allTags = document.getElementById("table-graph-stepper").querySelectorAll("input[data-type='tag']")

    static graphDynamicTable = document.getElementById("graph-dynamic-table")

    static testData ={
        "columns": {
            "DATES": "date",
            "PRODUITS": "string",
            "CLIENTS": "string",
            "QUANTITÉ VENDU": "number"
        },
        "data": [
            {
                "id": 1,
                "DATES": "2022-01-30",
                "PRODUITS": "PC Lenovo L540 core i5",
                "CLIENTS": "Vincent DEGENON",
                "QUANTITÉ VENDU": "48"
            },
            {
                "id": 2,
                "DATES": "2022-01-31",
                "PRODUITS": "PC HP core i3",
                "CLIENTS": "Paul BALLO",
                "QUANTITÉ VENDU": "10"
            },
            {
                "id": 3,
                "DATES": "2022-02-01",
                "PRODUITS": "PC Dell 8gb de ram p-2.5Ghz",
                "CLIENTS": "Victor DOVONOU",
                "QUANTITÉ VENDU": "58"
            },
            {
                "id": 4,
                "DATES": "2022-02-02",
                "PRODUITS": "Pc Toshiba ram 8 core i7",
                "CLIENTS": "Innocent HOUKPEVI",
                "QUANTITÉ VENDU": "2"
            },
            {
                "id": 5,
                "DATES": "2022-02-03",
                "PRODUITS": "PC Mac book",
                "CLIENTS": "Corneille Bkle",
                "QUANTITÉ VENDU": "23"
            },
            {
                "id": 6,
                "DATES": "2022-01-30",
                "PRODUITS": "Pc Toshiba ram 8 core i7",
                "CLIENTS": "Paul BALLO",
                "QUANTITÉ VENDU": "87"
            },
            {
                "id": 7,
                "DATES": "2022-02-02",
                "PRODUITS": "PC Dell 8gb de ram p-2.5Ghz",
                "CLIENTS": "Victor DOVONOU",
                "QUANTITÉ VENDU": "45"
            },
            {
                "id": 8,
                "DATES": "2022-02-01",
                "PRODUITS": "PC HP core i3",
                "CLIENTS": "Innocent HOUKPEVI",
                "QUANTITÉ VENDU": "102"
            },
            {
                "id": 9,
                "DATES": "2022-02-03",
                "PRODUITS": "PC Lenovo L540 core i5",
                "CLIENTS": "Corneille Bkle",
                "QUANTITÉ VENDU": "45"
            },
            {
                "id": 10,
                "DATES": "2022-01-30",
                "PRODUITS": "PC HP core i3",
                "CLIENTS": "Vincent DEGENON",
                "QUANTITÉ VENDU": "111"
            },
            {
                "id": 11,
                "DATES": "2022-01-31",
                "PRODUITS": "PC Mac book",
                "CLIENTS": "Victor DOVONOU",
                "QUANTITÉ VENDU": "133"
            },
            {
                "id": 12,
                "DATES": "2022-01-30",
                "PRODUITS": "PC Lenovo L540 core i5",
                "CLIENTS": "Innocent HOUKPEVI",
                "QUANTITÉ VENDU": "45"
            }
        ]
    }

    static importRoute = undefined
    static loadDataUrl = undefined
    static storeTableUrl = undefined
    static token = undefined


    constructor(containerId) {
        this.container = document.getElementById(containerId)
        this.div = document.createElement("div")
        this.card = `
        <!--begin::Card-->
            <div class="card mt-5">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <h1 class="text-dark d-none" data-type="table-title"></h1>
                            <input type="text" data-type="table-title" class="form-control form-control-solid w-250px" placeholder="Titre du tableau" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <button type="button" class="btn btn-light-success btn-sm mx-2" data-kt-user-table-valid="valid">Valider</button>
                            <div data-action="addColumn">
                                <button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="left">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Ajouter une colonne
                                </button>
                            <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4 scroll h-200px px-5" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <span  class="menu-title px-3">Type de la colonne</span>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-type="string">Texte</a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-type="date">Date</a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-type="image">Image</a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-type="number">Nombre</a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-type="select">Selection</a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-type="checkbox">Case à Cocher</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <div class="ms-5" data-action="table-menu">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                  <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                  <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                      <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                      <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                      <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                  </g>
                                  </svg>
                                  </span>
                              <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-225px py-4 px-5" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                        <input type="file" accept=".json,.csv,.xlsx" data-type="import" class="d-none">
                                        <a href="#" class="menu-link px-3" data-type="import" id="import">
                                            <span class="menu-icon">
                                                <span class="svg-icon svg-icon-1 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"/>
                                                        <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"/>
                                                        <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"/>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="menu-title">Importer</span>
                                        </a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-type="export" id="export">
                                            <span class="menu-icon">
                                                <span class="svg-icon svg-icon-1 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black"/>
                                                        <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black"/>
                                                        <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4"/>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="menu-title">Exporter</span>
                                        </a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-type="graph" data-bs-toggle="modal" data-bs-target="#graph-modal">
                                            <span class="menu-icon">
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black"/>
                                                        <path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black"/>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="menu-title">Créer un Graphique</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 1-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Sélectionnés
                            </div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Supprimer</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                </div>
                            </th>
                            <th class="text-end min-w-100px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold"></tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <div class="align-self-end m-5">
                    <ul class="pagination" data-type="pagination">
                        <li class="page-item previous disabled" data-action="prev"><a href="#" class="page-link np"><i class="previous"></i></a></li>
                        <li class="page-item next" data-action="next"><a href="#"  class="page-link np"><i class="next"></i></a></li>
                    </ul>
                </div>
                <!--end::Card body-->
                <div class="form-group m-5">
                    <a href="javascript:;" data-repeater-create class="btn btn-light-primary btn-sm" data-action="addRow">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                            </svg>
                        </span>Ajouter une ligne
                    </a>
                </div>
            </div>
        `

        this.div.insertAdjacentHTML("beforeend", this.card)
        this.title = this.div.querySelector("h1[data-type='table-title']")
        this.titleInput = this.div.querySelector("input[data-type='table-title']")
        this.table = this.div.querySelector("table")
        this.thead = this.table.querySelector("thead")
        this.tbody = this.table.querySelector("tbody")
        this.addRowButton = this.div.querySelector("a[data-action='addRow']")
        // this.div.querySelector("a[data-type='export']").addEventListener("click", evt => {this.validate(),this.TCube()})
        this.div.querySelector("button[data-kt-user-table-valid='valid']").addEventListener("click", evt => this.validate())

        this.dynamicTableData = {}
        this.dynamicTableData.series = []
        this.pagination = this.div.querySelector('ul[data-type="pagination"]')

        this.initEvent()
    }

    initEvent(){
        new KTBlockUI(this.div, {
            message: '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>',
        });
        //Title input event
        this.titleInput.addEventListener('keyup', evt => {
            if (evt.key === 'Enter'){
                this.titleInput.classList.add("d-none")
                this.title.classList.remove("d-none")
                this.title.innerText = this.titleInput.value
            }
        })
        this.title.addEventListener("dblclick",evt => {
            this.titleInput.classList.remove("d-none")
            this.title.classList.add("d-none")
        })

        //Import table data events
        this.div.querySelector("a[data-type='import']").addEventListener("click", evt => {
            this.div.querySelector("input[data-type='import']").click()
        })
        $(this.div.querySelector("input[data-type='import']")).change(evt => {
            let formdata = new FormData()
            formdata.append('_token', CoaraTable.token)
            formdata.append('file', evt.target.files[0])
            formdata.append('offset', "0")
            formdata.append('length', "10")
            let blockUI = KTBlockUI.getInstance(this.div);
            switch (evt.target.value.split('.').pop().toLowerCase()) {
                case "json":
                    formdata.append('type', "json")
                    blockUI.block()
                    $.ajax({
                        url: CoaraTable.importRoute,
                        type: "POST",
                        contentType: false,
                        processData: false,
                        data: formdata,
                        success: (result) =>{
                            if (result.data.length !== 0) {
                                let offset = 0
                                for (let i = 1; i <= parseInt(result.pageNumber); i++) {
                                    if (offset === 0) {
                                        this.pagination.querySelector('[data-action="next"]').insertAdjacentHTML("beforebegin", `<li class="page-item active"><a href="#" class="page-link" data-offset="` + offset + `">` + i + `</a></li>`)
                                        this.pagination.activeLinkIndex = 0
                                    } else {
                                        this.pagination.querySelector('[data-action="next"]').insertAdjacentHTML("beforebegin", `<li class="page-item"><a href="#" class="page-link" data-offset="` + offset + `">` + i + `</a></li>`)
                                    }
                                    offset += 10
                                }
                                let columns = {}
                                Object.keys(result.data[0]).forEach(value => {
                                    columns[value] = "string"
                                })
                                this.loadData({columns: columns, data: result.data})
                                this.paginationEvent()
                            }
                            blockUI.release()
                        },
                    })
                    break
                case "csv":
                    formdata.append('type', "csv")
                    blockUI.block()
                    $.ajax({
                        url: CoaraTable.importRoute,
                        type: "POST",
                        contentType: false,
                        processData: false,
                        data: formdata,
                        success: (result) =>{
                            if (result.data.length !== 0) {
                                let offset = 0
                                for (let i = 1; i <= parseInt(result.pageNumber); i++) {
                                    if (offset === 0) {
                                        this.pagination.querySelector('[data-action="next"]').insertAdjacentHTML("beforebegin", `<li class="page-item active"><a href="#" class="page-link" data-offset="` + offset + `">` + i + `</a></li>`)
                                        this.pagination.activeLinkIndex = 0
                                    } else {
                                        this.pagination.querySelector('[data-action="next"]').insertAdjacentHTML("beforebegin", `<li class="page-item"><a href="#" class="page-link" data-offset="` + offset + `">` + i + `</a></li>`)
                                    }
                                    offset += 10
                                }
                                let columns = {}
                                Object.keys(result.data[0]).forEach(value => {
                                    columns[value] = "string"
                                })
                                this.loadData({columns: columns, data: result.data})
                                this.paginationEvent()
                            }
                            blockUI.release()
                        },
                    });
                    break
                case "xlsx":
                    break
                default:
                    Swal.fire({
                        html: `Le format du fichier est incorrecte <br><strong>Format autorisés: </strong> .json, .csv et .xlsx`,
                        icon: "warning",
                        buttonsStyling: false,
                        confirmButtonText: "D'accord",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                    break
            }
        })

        //First checkbox event
        this.div.querySelectorAll("[type='checkbox']")[0].addEventListener("click", ( (e) =>{
            setTimeout((() =>{
                this.tbody.querySelectorAll("[type='checkbox']").forEach(value => {
                    e.target.checked ?  value.checked = 1: value.checked = 0
                })
                this.checkCheckboxState()
            }), 50)
        }))

        //Add columns button event
        this.div.querySelector("div[data-action='addColumn']").querySelectorAll("a").forEach((item)=>{

            if(item.dataset.listner !== "enable"){
                item.addEventListener("click",  (e) =>{
                    e.stopPropagation()
                    e.preventDefault()
                    let columnHtml = this.columnInputs(e.target.dataset.type);
                    this.thead.querySelector("tr").querySelector(".text-end").insertAdjacentHTML("beforebegin",`
                    <th class="min-w-125px">` + this.columnInputs("string") +`<input type="hidden" value="` + e.target.dataset.type + `"></th>
                `)
                    this.tbody.querySelectorAll('tr:not(.odd)').forEach((item)=>{
                        item.querySelector(".text-end").insertAdjacentHTML("beforebegin", `
                        <td class="min-w-125px">` + columnHtml + `</td>
                    `)
                    })
                    this.inputsEvent()
                    this.checkInputs()
                })
                item.dataset.listner = "enable"
            }
        })

        this.addRowButton.addEventListener("click",  (e) =>{
            if (this.thead.querySelectorAll("th").length > 2) {
                this.tbody.querySelectorAll('tr.odd').forEach(value => {
                    value.remove()
                })

                this.tbody.insertAdjacentHTML("beforeend", this.rowInputs())

                let allCheckbox = this.div.querySelectorAll("[type='checkbox']")
                allCheckbox[allCheckbox.length - 1].addEventListener("click", ( (e) =>{
                    setTimeout((() =>{
                        this.checkCheckboxState()
                    }), 50)
                }))
                this.inputsEvent()
                this.checkInputs()
                KTMenu.createInstances()
            }
        })

        this.createGraphEvent()
    }

    paginationEvent(){
        // Pagination events
        let links = this.pagination.querySelectorAll("li>a:not(.np)")
        links.forEach((a, key )=> {
            if (a.dataset.listner !== "enable") {
                a.addEventListener('click', evt => {
                    evt.preventDefault()
                    let blockUI = KTBlockUI.getInstance(this.div);
                    blockUI.block()
                    $.ajax({
                        url: CoaraTable.loadDataUrl,
                        type: "POST",
                        data: {
                            _token: CoaraTable.token,
                            id: 0,
                            offset: parseInt(a.dataset.offset),
                            length: parseInt(a.dataset.offset) + 10,
                        },
                        success: (result) => {
                            if (result.data.length !== 0) {
                                let columns = {}
                                Object.keys(result.data[0]).forEach(value => {
                                    columns[value] = "string"
                                })
                                this.tbody.querySelectorAll("tr").forEach(item => item.remove())
                                this.loadData({columns: columns, data: result.data}, true)
                                this.pagination.querySelector("li.active").classList.remove("active")
                                a.parentElement.classList.add("active")
                                this.addRowButton.scrollIntoView({behavior: 'smooth', block: "nearest"})
                                this.pagination.activeLinkIndex = key
                                if (key === 0) {
                                    this.pagination.querySelector("li.previous").classList.add("disabled")
                                } else {
                                    this.pagination.querySelector("li.previous").classList.remove("disabled")
                                }
                                if (key === links.length - 1) {
                                    this.pagination.querySelector("li.next").classList.add("disabled")
                                } else {
                                    this.pagination.querySelector("li.next").classList.remove("disabled")
                                }
                            }
                            blockUI.release()
                        },
                    });
                })
                a.dataset.listner = "enable"
            }
        })
        this.pagination.querySelector("li.previous>a").addEventListener("click", evt => {
            links[this.pagination.activeLinkIndex -1].click()
        })

        this.pagination.querySelector("li.next>a").addEventListener("click", evt => {
            links[this.pagination.activeLinkIndex +1].click()
        })
    }

    createGraphEvent(){
        CoaraTable.allTags.forEach(value => {
            if (value.dataset.taged !== "enable") {
                value.tagInst = new Tagify(value, {
                    enforceWhitelist: "enable",
                    whitelist: undefined,
                    maxTags: undefined,
                    dropdown: {
                        maxItems: undefined,
                        classname: "",
                        enabled: 0,
                        closeOnSelect: false
                    }
                })
                value.tagInst.on("add", (evt)=>{
                    if (value.dataset.action === "lines-tagify"){
                        this.dynamicTableData.lines = evt.detail.data.value
                        this.cube.getDimensionMembers(evt.detail.data.value).forEach((l, index)=>{
                            CoaraTable.graphDynamicTable.querySelector("tbody").insertAdjacentHTML("beforeend", `<tr data-index="` + evt.detail.index + `"><th class="min-w-100px text-white">` + l[evt.detail.data.value] + `</th></tr>`)
                        })
                        CoaraTable.allTags.forEach(inputTag => {
                            if (inputTag.dataset.action === "columns-tagify"){
                                const i = inputTag.tagInst.whitelist.indexOf(evt.detail.data.value)
                                if (i !== -1) {
                                    inputTag.tagInst.whitelist.splice(inputTag.tagInst.whitelist.indexOf(evt.detail.data.value), 1)
                                    inputTag.tagInst.removeTags(evt.detail.data.value)
                                }
                            }
                        })
                    }
                    else if (value.dataset.action === "columns-tagify"){
                        this.dynamicTableData.columns = evt.detail.data.value
                        this.cube.getDimensionMembers(evt.detail.data.value).forEach((l, index)=>{
                            CoaraTable.graphDynamicTable.querySelector("thead>tr").insertAdjacentHTML("beforeend", `<th class="min-w-125px" data-index="` + evt.detail.index + `">` + l[evt.detail.data.value] + `</th>`)
                        })
                        CoaraTable.allTags.forEach(inputTag => {
                            if (inputTag.dataset.action === "lines-tagify"){
                                const i = inputTag.tagInst.whitelist.indexOf(evt.detail.data.value)
                                if (i !== -1) {
                                    inputTag.tagInst.whitelist.splice(inputTag.tagInst.whitelist.indexOf(evt.detail.data.value), 1)
                                    inputTag.tagInst.removeTags(evt.detail.data.value)
                                }
                            }
                        })
                    }
                    else if (value.dataset.action === "values-tagify"){
                        this.dynamicTableData.values = evt.detail.data.value
                        CoaraTable.graphDynamicTable.querySelectorAll("tbody>tr").forEach((value1, key) => {
                            if (this.dynamicTableData.lines !== undefined && this.dynamicTableData.columns !== undefined){
                                this.cube.getDimensionMembers(this.dynamicTableData.lines).forEach(l=>{
                                    if (l[this.dynamicTableData.lines] === value1.querySelector("th").innerText) {
                                        this.cube.getDimensionMembers(this.dynamicTableData.columns).forEach((c , i)=> {
                                            let set = {}
                                            set[this.dynamicTableData.lines] = {id: l.id}
                                            set[this.dynamicTableData.columns] = {id: c.id}
                                            let cellValue = 0
                                            this.cube.dice(set).getFacts().forEach(insert => {
                                                switch (typeof insert[this.dynamicTableData.values]) {
                                                    case "number":
                                                        cellValue += insert[this.dynamicTableData.values]
                                                        break
                                                    case "string":
                                                        const formattedValue = Number(insert[this.dynamicTableData.values])
                                                        cellValue += (!isNaN(formattedValue))?formattedValue:1
                                                        break
                                                }
                                            })
                                            value1.insertAdjacentHTML("beforeend", `<td class="min-w-125px">` + cellValue + `</td`)

                                            if (this.dynamicTableData.series.length < i + 1){
                                                this.dynamicTableData.series.push({name: c[this.dynamicTableData.columns], data: []})
                                            }
                                            this.dynamicTableData.series[i].data.push(cellValue)
                                        })
                                    }
                                })
                            }
                        })
                        this.apexChat()
                    }
                })
                value.tagInst.on("remove", (evt)=>{
                    let tableData = this.getData("Array")
                    if (value.dataset.action === "lines-tagify"){
                        tableData[0].forEach((column, index)=>{
                            if (column.toLowerCase() === evt.detail.data.value.toLowerCase()){
                                CoaraTable.graphDynamicTable.querySelectorAll("tbody>tr[data-index='" + evt.detail.index + "']").forEach(value1 => {
                                    value1.remove()
                                })
                                CoaraTable.allTags.forEach(inputTag => {
                                    if (inputTag.dataset.action === "columns-tagify"){
                                        inputTag.tagInst.whitelist.push(column)
                                    }
                                })
                            }
                        })
                    }
                    else if (value.dataset.action === "columns-tagify"){
                        tableData[0].forEach((column, index)=>{
                            if (column.toLowerCase() === evt.detail.data.value.toLowerCase()){
                                CoaraTable.graphDynamicTable.querySelectorAll("thead>tr>th[data-index='" + evt.detail.index + "']").forEach(value1 => {
                                    value1.remove()
                                })
                                CoaraTable.allTags.forEach(inputTag => {
                                    if (inputTag.dataset.action === "lines-tagify"){
                                        inputTag.tagInst.whitelist.push(column)
                                    }
                                })
                            }
                        })
                    }
                })
                value.dataset.taged = "enable"
            }
        })
        this.div.querySelector("div[data-action='table-menu']").querySelectorAll("a").forEach(value => {
            if(value.dataset.type === "graph"){
                value.addEventListener("click", ev => {
                    // this.validate()
                    CoaraTable.allTags.forEach(value1 => {
                        value1.tagInst.whitelist = []
                        this.getData("Array")[0].forEach(value2 => {
                            if (value1.tagInst.whitelist.indexOf(value2) === -1){
                                value1.tagInst.whitelist.push(value2)
                            }
                        })
                    })
                })
            }
        })
    }

    checkCheckboxState(){
        let tbodyCheckbox = this.tbody.querySelectorAll('[type="checkbox"]'),
            selectedCount = this.div.querySelector('span[data-kt-user-table-select="selected_count"]'),
            baseToolbar = this.div.querySelector('[data-kt-user-table-toolbar="base"]'),
            selectionToolbar = this.div.querySelector('[data-kt-user-table-toolbar="selected"]')
        let c = !1,
            l = 0;
        tbodyCheckbox.forEach((value1 => {
            value1.checked && (c = !0, l++)
        })), c ? (selectedCount.innerHTML = l.toString(), baseToolbar.classList.add("d-none"), selectionToolbar.classList.remove("d-none")) : (baseToolbar.classList.remove("d-none"), selectionToolbar.classList.add("d-none"))
    }

    init(){
        this.container.appendChild(this.div)
        this.checkInputs()
    }

    deleteInputEvent(){
        this.div.querySelectorAll("button[data-action='delete']").forEach((item)=>{
            if(item.dataset.listner !== "enable"){
                item.addEventListener("click", (evt => {
                    if (item.parentElement.parentElement.tagName === "TH"){
                        this.thead.querySelectorAll("th").forEach((value, key)=>{
                            if (value === item.parentElement.parentElement) {
                                this.tbody.querySelectorAll('tr').forEach((value1) => {
                                    // if (value1.querySelectorAll("td>div").length <= 3){
                                    //     value1.remove()
                                    //     return
                                    // }
                                    value1.querySelectorAll("td").forEach((value2, key1) => {
                                        if (key===key1){
                                            value2.remove()
                                        }
                                    })
                                })
                            }
                        })
                        item.parentElement.parentElement.remove()
                        this.checkInputs()
                        return
                    }
                    // if (item.parentElement.parentElement.parentElement.querySelectorAll("td>div").length <= 3){
                    //     item.parentElement.parentElement.parentElement.remove()
                    //     return
                    // }
                    item.parentElement.remove()
                    this.checkInputs()
                }))
                item.dataset.listner = "enable"
            }
        })

    }

    inputsEvent(){
        this.div.querySelectorAll("input[data-type='flatpickr']").forEach((item)=>{
            if(item.dataset.listner !== "true"){
                item.flatpickr();
                item.dataset.listner = "true"
            }
        })

        this.deleteInputEvent()

        this.div.querySelector('[data-kt-user-table-select="delete_selected"]').addEventListener("click",evt =>  {
            Swal.fire({
                text: "Vous êtes sûr de vouloir tous supprimer?",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: "Oui, supprimer!",
                cancelButtonText: "Non, annuler",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then(((t) =>{
                t.value ? Swal.fire({
                    text: "Vous avez supprimé toutes le lignes sélectionnées !.",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "D'accord, j'ai compris !",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary"
                    }
                }).then((() =>{
                    let allCheckbox = this.div.querySelectorAll("[type='checkbox']")
                    allCheckbox.forEach((t => {
                        t.checked && t.closest("tbody tr")?t.closest("tbody tr").remove():""
                    }));
                    allCheckbox[0].checked = !1
                })).then((()=> {
                    this.checkCheckboxState()
                })): "cancel" === t.dismiss && Swal.fire({
                    text: "Annulé",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary"
                    }
                })
            }))
        })

        this.tbody.querySelectorAll("a[data-kt-users-table-filter='delete_row']").forEach(item => {
            if(item.dataset.listner !== "enable"){
                item.addEventListener("click", evt => {
                    evt.preventDefault()
                    evt.target.closest("tr").remove()
                    this.checkCheckboxState()
                })
                item.dataset.listner = "enable"
            }
        })

        this.tbody.querySelectorAll("a[data-kt-users-table-filter='edit_row']").forEach(item => {
            if(item.dataset.listner !== "enable"){
                item.addEventListener("click", evt => {
                    evt.preventDefault()
                    let tds = evt.target.closest("tr").querySelectorAll("td")
                    tds.forEach((i, index)=>{
                        if (index !== 0 && index !== tds.length -1) {
                            if (i.querySelector("input") === null) {
                                i.innerHTML = this.columnInputs('string', i.innerText)
                            }
                        }
                    })
                    this.deleteInputEvent()
                    this.checkInputs()
                })
                item.dataset.listner = "enable"
            }
        })

        this.tbody.querySelectorAll("td").forEach((item) => {
            if(item.dataset.listner !== "enable" && item.querySelector("div") === null){
                item.addEventListener("dblclick", ev => {
                    if (item.querySelector("input") === null) {
                        item.innerHTML = this.columnInputs('string', item.innerText)
                        this.deleteInputEvent()
                        this.checkInputs()
                    }
                })

                item.addEventListener("keyup", ev => {
                    if (ev.key === 'Enter') {
                        this.validate()
                    }
                })
                item.dataset.listner = "enable"
            }
        })

        // this.thead.querySelectorAll("th").forEach((item) => {
        //     if(item.dataset.listner !== "enable"){
        //         item.addEventListener("dblclick", ev => {
        //             if (item.querySelector("input") === null) {
        //                 item.innerHTML = this.columnInputs('string', item.innerText)
        //                 this.deleteInputEvent()
        //                 this.checkInputs()
        //             }
        //         })
        //
        //         item.addEventListener("keyup", ev => {
        //             if (ev.key === 'Enter') {
        //                 this.validate()
        //             }
        //         })
        //         item.dataset.listner = "enable"
        //     }
        // })

        this.div.querySelectorAll("[type='checkbox']").forEach(value => {
            if (value.dataset.listner = "enable") {
                value.addEventListener("click", ((e) => {
                    setTimeout((() => {
                        this.checkCheckboxState()
                    }), 50)
                }))
                value.dataset.listner = "enable"
            }
        })
    }

    columnInputs(type, value=''){
        switch (type) {
            case "string":
                return `
                    <div class="input-group w-250px input-group-sm">
                        <input type="text" class="form-control" placeholder="Valeur" value="` + value + `"/>
                        <button class="border border-secondary btn btn-icon btn-light-danger"  type="button" data-action="delete">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                `
            case "date":
                return `
                    <div class="input-group w-250px input-group-sm" >
                        <input class="form-control" placeholder="Pick a date" data-type="flatpickr" value="` + value + `"/>
                        <button class="border border-secondary btn btn-icon btn-light-danger"  type="button" data-action="delete">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                `
            case "number":
                return `
                    <!--begin::Dialer-->
                    <div class="position-relative w-250px input-group">
                        <!--begin::Input control-->
                        <input type="number" class="form-control" data-kt-dialer-control="input" placeholder="Valeur" name=""  value="` + value + `"/>
                        <!--end::Input control-->
                        <button class="border border-secondary btn btn-icon btn-light-danger"  type="button" data-action="delete">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                `
            default: return ""
        }
    }

    rowInputs(){
        let inputList = ""
        let allTh = this.thead.querySelectorAll("th")
        allTh.forEach((value, key) => {
            if (key===0 || key=== allTh.length - 1){
                return
            }
            inputList += '<td class="min-w-125px">' + this.columnInputs(value.querySelector("input[type='hidden']").value) + '</td>'
        })

        return `
            <tr>
                <td class="coara-control">
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>` +
                 inputList + `
                <td class="text-end coara-control">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm text-nowrap" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                    <span class="svg-icon svg-icon-5 m-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="view.html" class="menu-link px-3">Edit</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
            </tr>
        `
    }

    validate(){
        let thList = Array.from(this.thead.querySelectorAll("input:not(.form-check-input)")).filter(value => !(value.type === "hidden")).map(value => value.value)
        let isvalid = true
        thList.forEach((value, index, array) => {
            if (value == null || value === ''){
                toastr.warning("Veuillez remplir La colonne no " + (index + 1));
                isvalid = false
                return
            }
            if (array.indexOf(value, index + 1) !== -1 && isvalid){
                toastr.warning("Duplication du champ : " + value);
                isvalid = false
            }
        })
        if (isvalid && (this.titleInput.value === null || this.titleInput.value === '')){
            toastr.warning("Veuillez entrer le titre du tableau");
            isvalid = false
        }
        if (isvalid) {
            this.table.querySelectorAll("input:not(.form-check-input)").forEach(value => {
                if (value.type !== 'hidden') {
                    value.parentElement.replaceWith(value.value)
                }
            })
            let data = this.getData("Object", true)
            let blockUI = KTBlockUI.getInstance(this.div);
            blockUI.options.message = '<div class="blockui-message"><span class="spinner-border text-primary"></span> Sauvegarde en cours...</div>'
            blockUI.block()
            $.ajax({
                url: CoaraTable.storeTableUrl,
                type: "POST",
                data: {
                    _token: CoaraTable.token,
                    title: this.titleInput.value,
                    columns: JSON.stringify(data.columns),
                    data: JSON.stringify(data.data)
                },
                success: (result) =>{
                    console.log(result)
                    blockUI.release()
                    blockUI.options.message = '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>'
                },
                error:(result)=>{
                    blockUI.release()
                    blockUI.options.message = '<div class="blockui-message"><span class="spinner-border text-primary"></span> Loading...</div>'
                }
            })
        }
        this.checkInputs()
        // this.exportCsv(this.jsonify(true))
    }

    getData(format, withType=false) {
        let columns = Array.from(this.thead.querySelectorAll('th:not(.w-10px.pe-2):not(.text-end)')).map(value => value.innerText)
        let columnsWithType = {}
        if (withType) {
            this.thead.querySelectorAll('th:not(.w-10px.pe-2):not(.text-end)').forEach(value => {
                columnsWithType[value.innerText] = value.querySelector("input").value
            })
        }

        let rows = Array.from(this.tbody.querySelectorAll("tr")).map(value => {
            return Array.from(value.querySelectorAll("td:not(.coara-control)")).map(value1 => value1.innerText)
        })

        if (format === "Array"){
            return [columns, rows]
        }else {
            let tableData = null
            if(withType){
                tableData = {
                    columns : columnsWithType,
                    data : []
                }
            }else {
                tableData = []
            }
            let id = 0
            rows.forEach((row) => {
                let line = {id : ++id}
                columns.forEach((value, index) => {
                    line[value] = row[index]
                })
                if (withType){
                    tableData.data.push(line)
                    return
                }
                tableData.push(line)
            })

            if (format === "String") {
                return JSON.stringify(tableData)
            }else if (format === "Object") {
                return tableData
            }
        }
    }

    TCube(){
        let tableData = this.getData("Object", true)
        let dimensionHierarchies = []
        Object.keys(tableData.columns).forEach(value =>{
            dimensionHierarchies.push(
                {
                    dimensionTable: {
                        dimension: value,
                        keyProps: [value],
                    }
                }
            )
        })

        this.cube  = new Cube({dimensionHierarchies})
        this.cube.addFacts(tableData.data)
    }

    exportCsv(data = {}){
        const csvLine = [];
        csvLine.push("data:text/csv;charset=utf-8," + data[0].join(";"))
        data[1].forEach( (array)=>{
            csvLine.push(array.join(";"));
        })
        return csvLine.join("\n")
    }

    loadData(data, rowOnly=false){
        this.tbody.querySelectorAll('tr.odd').forEach(value => {value.remove()})
        // this.tbody.querySelectorAll("tr").forEach(value => value.remove())
        data.data.forEach((insert, index)=>{
            let cells = ""
            Object.entries(insert).forEach(([key, value])=>{
                if (key !== "id") {
                    if (index === 0 && !rowOnly) {
                        this.thead.querySelector("tr").querySelector(".text-end").insertAdjacentHTML("beforebegin",
                            `<th class="min-w-125px">` + key + `<input type="hidden" value="` + data["columns"][key] + `"></th>`)
                    }
                    cells += '<td class="min-w-125px">' + value + '</td>'
                }
            })
            this.tbody.insertAdjacentHTML("beforeend", `
                    <tr>
                        <td class="coara-control">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>`
                + cells +
                `<td class="text-end coara-control">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm text-nowrap" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="view.html" class="menu-link px-3" data-kt-users-table-filter="edit_row">Edit</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
            </tr>
            `)
        })
        this.inputsEvent()
        KTMenu.createInstances()
    }

    checkInputs(){
        const validButton = this.div.querySelector("button[data-kt-user-table-valid='valid']")
        if (this.div.querySelectorAll("button[data-action='delete']").length === 0){
            validButton.classList.add("d-none")
        }else {
            validButton.classList.remove("d-none")
        }
    }

    loadTableData(){
        $.ajax({
            url: CoaraTable.loadDataUrl,
            type: "POST",
            data: {
                _token: CoaraTable.token,
                id: 0,
                offset: 0,
                length: 10,
            },
            success: (result) =>{
                let blockUI = KTBlockUI.getInstance(this.div);
                blockUI.block()
                let offset = 0
                for (let i=1; i<=parseInt(result.pageNumber); i++){
                    if (offset === 0){
                        this.pagination.querySelector('[data-action="next"]').insertAdjacentHTML("beforebegin",`<li class="page-item active"><a href="#" class="page-link" data-offset="` + offset +`">` + i +`</a></li>`)
                        this.pagination.activeLinkIndex = 0
                    }else {
                        this.pagination.querySelector('[data-action="next"]').insertAdjacentHTML("beforebegin", `<li class="page-item"><a href="#" class="page-link" data-offset="` + offset + `">` + i + `</a></li>`)
                    }
                    offset += 10
                }
                let columns = {}
                Object.keys(result.data[0]).forEach(value => {
                    columns[value] = "string"
                })
                this.loadData({columns:columns,data:result.data})
                this.paginationEvent()
                blockUI.release()
            },
        });
    }

    apexChat(){
        let mychart = new ChartBuilder(document.getElementById("apexchat"))
        mychart.options.chart.type = mychart.chartTypes.LINECHART
        mychart.options.series =  this.dynamicTableData.series
        mychart.options.stroke.curve = mychart.chartTypes.curve.SMOOTH
        mychart.options.xaxis.type = (CoaraTable.testData.columns[this.dynamicTableData.lines] === "date")?mychart.chartTypes.XAXISTYPE.DATETIME:mychart.chartTypes.XAXISTYPE.CATEGORIES
        mychart.options.xaxis.categories = []
        this.cube.getDimensionMembers(this.dynamicTableData.lines).forEach(value => {
            mychart.options.xaxis.categories.push(value[this.dynamicTableData.lines])
        })
        mychart.options.tooltip.y.formatter = (val)=>{
            return (CoaraTable.testData.columns[this.dynamicTableData.values] === "number")? val + " " + this.dynamicTableData.values: val
        }
        mychart.init()
    }
}
