
class CoaraTable {

    constructor(containerId) {
        this.container = document.getElementById(containerId)
        this.div = document.createElement("div")
        this.card = `
        <!--begin::Card-->
            <div class="card m-5">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3 btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Filter
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-bold">Role:</label>
                                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                            <option></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Analyst">Analyst</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Support">Support</option>
                                            <option value="Trial">Trial</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-bold">Two Step Verification:</label>
                                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                            <option></option>
                                            <option value="Enabled">Enabled</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Filter-->
                            <!--begin::Export-->
                            <button type="button" class="btn btn-light-primary me-3 btn-sm" id="export">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
                                        <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
                                        <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Export
                            </button>
                            <!--end::Export-->
                            <!--begin::Add user-->
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
                                        <a href="#" class="menu-link px-3" data-type="text">Texte</a>
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
                            <!--end::Add user-->
                            </div>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
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
        this.table = this.div.querySelector("table")
        this.thead = this.table.querySelector("thead")
        this.tbody = this.table.querySelector("tbody")
        this.addRowButton = this.div.querySelector("a[data-action='addRow']")
        this.initEvent()
        this.div.querySelector("#export").addEventListener("click", evt => this.validate())
    }

    initEvent(){
        this.div.querySelector("div[data-action='addColumn']").querySelectorAll("a").forEach((item)=>{
            item.addEventListener("click",  (e) =>{
                e.stopPropagation();
                e.preventDefault()
                let columnHtml = this.columnInputs(e.target.dataset.type);
                this.thead.querySelector("tr").querySelector(".text-end").insertAdjacentHTML("beforebegin",`
                    <th class="min-w-125px">` + this.columnInputs("text") +`<input type="hidden" value="` + e.target.dataset.type + `"></th>
                `)
                this.tbody.querySelectorAll('tr:not(.odd)').forEach((item)=>{
                    item.querySelector(".text-end").insertAdjacentHTML("beforebegin", `
                        <td class="min-w-125px">` + columnHtml + `</td>
                    `)
                })
                this.inputsEvent()
            })
        })

        this.addRowButton.addEventListener("click",  (e) =>{
            if (this.thead.querySelectorAll("th").length > 2) {
                this.tbody.querySelectorAll('tr.odd').forEach(value => {
                    value.remove()
                })
                this.tbody.insertAdjacentHTML("beforeend", this.rowInputs())
                let delButtons = this.tbody.querySelectorAll("a[data-kt-users-table-filter='delete_row']")
                //add event to new checkbox
                delButtons[delButtons.length - 1].addEventListener("click", evt => {
                    evt.preventDefault()
                    evt.target.closest("tr").remove()
                    this.checkCheckboxState()
                })

                let allCheckbox = this.div.querySelectorAll("[type='checkbox']")
                allCheckbox[allCheckbox.length - 1].addEventListener("click", ( (e) =>{
                    setTimeout((() =>{
                        this.checkCheckboxState()
                    }), 50)
                }))
                this.inputsEvent()
                KTMenu.createInstances()
            }
        })

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

        this.div.querySelectorAll("[type='checkbox']")[0].addEventListener("click", ( (e) =>{
            setTimeout((() =>{
                this.tbody.querySelectorAll("[type='checkbox']").forEach(value => {
                    e.target.checked ?  value.checked = 1: value.checked = 0
                })
                this.checkCheckboxState()
            }), 50)
        }))
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
        $(this.table).DataTable({
            info: !1,
            order: [],
            pageLength: 10,
            lengthChange: !1,
            columnDefs: [{
                orderable: !1,
                targets: 0
            }]
        })
    }

    inputsEvent(){
        this.div.querySelectorAll("input[data-type='flatpickr']").forEach((item)=>{
            item.flatpickr();
        })
        this.div.querySelectorAll("button[data-action='delete']").forEach((item)=>{
            item.addEventListener("click", (evt => {
                if (item.parentElement.parentElement.tagName === "TH"){
                    this.thead.querySelectorAll("th").forEach((value, key)=>{
                        if (value === item.parentElement.parentElement) {
                            this.tbody.querySelectorAll('tr').forEach((value1) => {
                                if (value1.querySelectorAll("td>div").length <= 3){
                                    value1.remove()
                                    return
                                }
                                value1.querySelectorAll("td").forEach((value2, key1) => {
                                    if (key===key1){
                                        value2.remove()
                                    }
                                })
                            })
                        }
                    })
                    item.parentElement.parentElement.remove()
                    return
                }

                if (item.parentElement.parentElement.parentElement.querySelectorAll("td>div").length <= 3){
                    item.parentElement.parentElement.parentElement.remove()
                    return
                }
                item.parentElement.remove()
            }));
        })
    }

    columnInputs(type){
        switch (type) {
            case "text":
                return `
                    <div class="input-group w-250px input-group-sm" >
                        <input type="text" class="form-control" placeholder="Valeur"/>
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
                        <input class="form-control" placeholder="Pick a date" data-type="flatpickr"/>
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
                        <input type="number" class="form-control" data-kt-dialer-control="input" placeholder="Valeur" name=""  value="0"/>
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
        this.table.querySelectorAll("input:not(.form-check-input)").forEach(value => {
            if (value.type !== 'hidden') {
                value.parentElement.replaceWith(value.value)
            }
        })

        this.exportCsv(this.jsonify(true))
    }

    jsonify(array) {

        let columns = Array.from(this.table.querySelectorAll('th:not(.w-10px.pe-2):not(.text-end)')).map(value => value.innerText)

        let rows = Array.from(this.tbody.querySelectorAll("tr")).map(value => {
            return Array.from(value.querySelectorAll("td:not(.coara-control)")).map(value1 => value1.innerText)
        })

        if (array){
            return [columns, rows]
        }
        return JSON.stringify({columns,rows})
    }

    exportCsv(data){
        const csvLine = [];
        csvLine.push("data:text/csv;charset=utf-8," + data[0].join(";"))
        data[1].forEach( (array)=>{
            csvLine.push(array.join(";"));
        })
        return csvLine.join("\n")
    }
}
