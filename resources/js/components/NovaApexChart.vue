<template>
    <card class="px-6 py-4">
        <apexchart :width="card.chartWidth" :height="card.chartHeight" :type="card.type" :options="options" :series="card.series"></apexchart>
    </card>
</template>

<script>
    import VueApexCharts from 'vue-apexcharts'
    import commaNumber from 'comma-number'

    export default {
        components: {
            'apexchart': VueApexCharts
        },
        props: [
            'card'

            // The following props are only available on resource detail cards...
            // 'resource',
            // 'resourceId',
            // 'resourceName',
        ],
        methods: {
            handleFormatter(options) {

                Object.keys(options).forEach(key => {

                    if (key === 'formatter') {
                        const prefix = options[ key ].prefix || ''
                        const suffix = options[ key ].suffix || ''
                        const showComma = options[ key ].showComma || false
                        options[ key ] = function (val) {
                            const finalValue = showComma ? commaNumber(val) : val
                            return `${ prefix } ${ finalValue } ${ suffix }`
                        }
                    }

                    if (typeof options[ key ] === 'object') {
                        this.handleFormatter(options[ key ])
                    }
                })

            }
        },
        computed: {
            options() {
                const options = this.card.options
                this.handleFormatter(options)
                return options
            }
        }
    }
</script>