class DynamicTableBuilder {
    constructor(table, data, type) {
        this.table = table
        this.lines = data.lines
        this.columns = data.columns
        this.values = data.values
        this.filters = data.filters
        this.type = type

        this.build()
    }

    buildOptions() {

    }

    build() {
        // Build table options using parsing data
        this.buildOptions()

        // Remove table content to build a new content
        this.table.querySelectorAll('tr').forEach(value => {
            value.remove()
        })

        // Add table contents

        if (this.type === LINESVALUES) {
            this.table.querySelector("thead").insertAdjacentHTML("afterbegin",
                `<tr class="fs-6 border-bottom border-gray-200"></tr>`
            )
            this.lines.forEach((value, index) => {
                console.log(index)
                this.table.querySelector("thead>tr").insertAdjacentHTML("beforeend", this.buildTh(index))

                this.table.querySelector("tbody").insertAdjacentHTML("beforeend", this.buildTd(index))
            })
        }
    }

    // Get th by index to build table head
    buildTh(i) {
        let ths = "";

        if (this.type === LINESVALUES) {
            console.log(this.lines[i])
            ths += `<th class="min-w-100px">` + this.lines[i].name + `</th>`
        }
        return ths;
    }

    // Get all td by index to build table head
    buildTd(i) {
        let tds = "";

        if (this.type === LINESVALUES) {
            this.lines[1].data.forEach(v => {
                tds += `<tr class="border-bottom border-gray-200 text-white"><td class="">` + v + `</td></tr>`
            })
        }
        return tds;
    }
}
